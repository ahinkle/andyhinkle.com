---
title: "Display Your Public GitHub Contributions on Your Website"
description: "Learn how to showcase your public GitHub contributions on your Laravel website using GitHub's GraphQL API, caching, and Blade components for a dynamic portfolio."
published_at: "2025-10-18"
---

As developers, our GitHub contributions tell a story. They show what we're working on, what communities we're contributing to, and how active we are in open source. So why not showcase those contributions directly on your personal website?

I recently added a "Recent Contributions" section to my site, and a few folks have reached out asking how I did that. It's been a great way to highlight my recent work. Here's how you can do the same with Laravel.

![GitHub Contributions](/images/blog/github/contributions.webp)

In terms of implementation, we'll be using:

- GitHub's GraphQL API to fetch public pull requests
- An Artisan command to fetch and cache the data
- A Blade component to display the contributions

## Why Use GitHub's GraphQL API?

You might be wondering: "Doesn't GitHub have a REST API?" They do, but here's why GraphQL is the better choice for this use case:

1. **Single Request** - Get exactly the data you need in one API call instead of multiple REST endpoints
2. **Precise Data Fetching** - Request only the fields you need (title, URL, merged date, etc.) without over-fetching
3. **Flexible Filtering** - GitHub's search syntax works seamlessly with GraphQL queries

Plus, it's actually simpler to work with once you get the hang of it.

## Step 1: Create the Artisan Command

First, let's create an Artisan command to fetch contributions from GitHub. This command will run on a schedule and cache the results so we're not hitting the API on every page load.

```bash
php artisan make:command GitHub/FetchGitHubContributionsCommand
```

Here's the implementation:

```php
<?php

namespace App\Console\Commands\GitHub;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FetchGitHubContributionsCommand extends Command
{
    protected $signature = 'fetch:github-contributions';
    protected $description = 'Fetch recent GitHub contributions and stores them in cache';

    public function handle(): int
    {
        $this->info('Fetching GitHub Contributions...');

        $data = tap($this->fetchGitHubPublicPullRequests(),
            fn ($data) => Cache::put('github_contributions', $data, now()->addDay())
        );

        $this->info('GitHub contributions fetched successfully.');

        return 0;
    }

    protected function fetchGitHubPublicPullRequests(): array
    {
        $token = config('services.github.token');

        if (! is_string($token)) {
            return [];
        }

        $response = Http::withToken($token)
            ->throw()
            ->post('https://api.github.com/graphql', [
                'query' => $this->graphqlPullRequestQuery(),
            ]);

        $data = $response->json();

        if (! is_array($data)) {
            return [];
        }

        // Navigate the GraphQL response structure
        $nodes = $data['data']['search']['nodes'] ?? null;

        if (! is_array($nodes)) {
            return [];
        }

        // Filter out null entries that sometimes appear in search results
        return array_values(array_filter($nodes, fn ($node) => $node !== null));
    }

    protected function graphqlPullRequestQuery(): string
    {
        return <<<'GRAPHQL'
        query {
          search(query: "is:pr is:merged author:YOUR_GITHUB_USERNAME", type: ISSUE, first: 10) {
            nodes {
              ... on PullRequest {
                title
                url
                mergedAt
                bodyText
                additions
                deletions
                repository {
                  name
                  isPrivate
                  owner {
                    login
                  }
                }
              }
            }
          }
        }
        GRAPHQL;
    }
}
```

Don't forget to add your GitHub token to your `.env` file:

```env
GITHUB_TOKEN=your_github_personal_access_token
```

And register it in `config/services.php`:

```php
'github' => [
    'token' => env('GITHUB_TOKEN'),
],
```

## Step 2: Filtering Your Contributions

GitHub's search syntax is powerful. Here are some practical examples of when you might want to filter:

```graphql
# Exclude public work repositories (common use case)
query: "is:pr is:merged author:yourname -org:your-company"

# Only show contributions to specific organizations
query: "is:pr is:merged author:yourname org:laravel"

# Exclude multiple repositories
query: "is:pr is:merged author:yourname -repo:owner/private-repo -repo:owner/another-repo"

# Only merged PRs from the last 6 months
query: "is:pr is:merged author:yourname merged:>2024-04-18"
```

In my case, I wanted to exclude PRs to my own personal website repository (because it's not particularly interesting to visitors), so my query looks like this:

```graphql
query: "is:pr is:merged author:ahinkle -repo:ahinkle/andyhinkle.com"
```

The `-repo:owner/name` syntax excludes that specific repository from results. Simple and effective.

## Step 3: Create the Blade Component

Now let's create a component to format and display the contributions. Create a component class:

```bash
php artisan make:component RecentGithubContributions
```

Here's the implementation:

```php
<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class RecentGithubContributions extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.recent-github-contributions', [
            'contributions' => $this->getContributions(),
        ]);
    }

    protected function getContributions(): Collection
    {
        $contributions = Cache::array('github_contributions', []);
        
        return $this->formatContributions($contributions);
    }

    protected function formatContributions(array $contributions): Collection
    {
        return collect($contributions)
            ->map(fn ($contribution): array => $this->formatContribution($contribution));
    }

    private function formatContribution(mixed $contribution): array
    {
        if (! is_array($contribution)) {
            return $this->emptyContribution();
        }

        $repository = $contribution['repository'] ?? [];
        $owner = $repository['owner'] ?? [];
        $ownerLogin = $owner['login'] ?? '';

        return [
            'title' => $contribution['title'] ?? '',
            'url' => $contribution['url'] ?? '',
            'merged_at' => is_string($contribution['mergedAt'] ?? null)
                ? Carbon::parse($contribution['mergedAt'])
                : now(),
            'body' => $contribution['bodyText'] ?? '',
            'additions' => $contribution['additions'] ?? 0,
            'deletions' => $contribution['deletions'] ?? 0,
            'repository' => $repository['name'] ?? '',
            'owner' => $ownerLogin,
            'avatar_url' => $ownerLogin !== ''
                ? "https://github.com/{$ownerLogin}.png"
                : '',
        ];
    }

    private function emptyContribution(): array
    {
        return [
            'title' => '',
            'url' => '',
            'merged_at' => now(),
            'body' => '',
            'additions' => 0,
            'deletions' => 0,
            'repository' => '',
            'owner' => '',
            'avatar_url' => '',
        ];
    }
}
```

## Step 4: Create the Blade View

Create the view file at `resources/views/components/recent-github-contributions.blade.php`:

```blade
<div class="space-y-4">
    @forelse($contributions as $contribution)
        <a
            href="{{ $contribution['url'] }}"
            target="_blank"
            class="block p-4 rounded-lg border border-gray-700 hover:border-gray-600 transition"
        >
            <div class="flex items-start gap-3">
                @if($contribution['avatar_url'])
                    <img
                        src="{{ $contribution['avatar_url'] }}"
                        alt="{{ $contribution['owner'] }}"
                        class="w-10 h-10 rounded-full"
                    >
                @endif

                <div class="flex-1">
                    <h3 class="font-medium text-gray-100">
                        {{ $contribution['title'] }}
                    </h3>

                    <p class="text-sm text-gray-400 mt-1">
                        {{ $contribution['owner'] }}/{{ $contribution['repository'] }}
                    </p>

                    <div class="flex items-center gap-4 mt-2 text-xs text-gray-500">
                        <span>Merged {{ $contribution['merged_at']->diffForHumans() }}</span>
                        <span class="text-green-500">+{{ $contribution['additions'] }}</span>
                        <span class="text-red-500">-{{ $contribution['deletions'] }}</span>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <p class="text-gray-400">No recent contributions found.</p>
    @endforelse
</div>
```

## Step 5: Add to Your Homepage

Now you can add the component anywhere on your site. For example, on your homepage:

```blade
<section>
    <h2 class="text-2xl font-bold mb-4">Recent Contributions</h2>

    <x-recent-github-contributions />
</section>
```

## Step 6: Schedule the Command

Add the command to your scheduler in `routes/console.php` (or `app/Console/Kernel.php` if using Laravel 10 or earlier):

```php
use Illuminate\Support\Facades\Schedule;

Schedule::command('fetch:github-contributions')->daily();
```

For immediate testing, you can run the command manually:

```bash
php artisan fetch:github-contributions
```

## The Result

You now have a dynamic section on your website showcasing your latest public contributions. It updates daily, uses efficient caching, and only fetches the data you need from GitHub.

Is this the "best" way to implement this feature? Probably not. There are certainly more sophisticated approaches you could take:

- **Use a dedicated package** like Spatie's GitHub package for more robust API interactions
- **Store contributions in a database table** for more complex querying and filtering
- **Create a GitHub service class** to encapsulate all API logic and make it more testable
- **Implement webhooks** instead of scheduled commands to get real-time updates
- **Add retry logic and better error handling** for API failures

But here's the thing: this is a personal website. The beauty of this implementation is its simplicity. It's easy to understand, maintain, and debug. There are no dependencies beyond Laravel's HTTP client, no database migrations to manage, and the entire feature lives in just two files.

For a personal site that updates once a day and displays a handful of contributions, this approach is perfect. It's maintainable, it works reliably, and I can understand exactly what it's doing six months from now when I inevitably need to make a small change.

The best part? Your visitors can see what you're actually building, not just what you claim to be building. That's powerful social proof for any developer's portfolio.

## Resources

- [My Personal Website Source Code](https://github.com/ahinkle/andyhinkle.com)
- [GitHub GraphQL API Documentation](https://docs.github.com/en/graphql)
- [GitHub Search Syntax](https://docs.github.com/en/search-github/searching-on-github/searching-issues-and-pull-requests)
- [Laravel HTTP Client](https://laravel.com/docs/http-client)
- [Laravel Caching](https://laravel.com/docs/cache)

Happy coding! 🚀
