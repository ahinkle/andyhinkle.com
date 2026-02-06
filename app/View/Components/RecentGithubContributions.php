<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

/**
 * @phpstan-type ContributionShape array{
 *     title: string,
 *     url: string,
 *     merged_at: Carbon,
 *     body: string,
 *     additions: int,
 *     deletions: int,
 *     repository: string,
 *     owner: string,
 *     avatar_url: string
 * }
 */
class RecentGithubContributions extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-github-contributions', [
            'contributions' => $this->getContributions(),
        ]);
    }

    /**
     * Get the formatted contributions.
     *
     * @return Collection<int, ContributionShape>
     */
    protected function getContributions(): Collection
    {
        $contributions = Cache::array('github_contributions', []);

        return $this->formatContributions($contributions);
    }

    /**
     * Format contributions.
     *
     * @param  array<mixed>  $contributions
     * @return Collection<int, ContributionShape>
     */
    protected function formatContributions(array $contributions): Collection
    {
        return collect($contributions)
            ->map(fn ($contribution): array => $this->formatContribution($contribution));
    }

    /**
     * @return ContributionShape
     */
    private function formatContribution(mixed $contribution): array
    {
        if (! is_array($contribution)) {
            return $this->emptyContribution();
        }

        $repository = $this->getArray($contribution, 'repository');
        $owner = $this->getArray($repository, 'owner');
        $ownerLogin = $this->getString($owner, 'login');

        return [
            'title' => $this->getString($contribution, 'title'),
            'url' => $this->getString($contribution, 'url'),
            'merged_at' => $this->parseDate($contribution['mergedAt'] ?? null),
            'body' => $this->getString($contribution, 'bodyText'),
            'additions' => $this->getInt($contribution, 'additions'),
            'deletions' => $this->getInt($contribution, 'deletions'),
            'repository' => $this->getString($repository, 'name'),
            'owner' => $ownerLogin,
            'avatar_url' => $ownerLogin !== '' ? "https://github.com/{$ownerLogin}.png" : '',
        ];
    }

    /**
     * @return ContributionShape
     */
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

    /**
     * @param  array<mixed>  $array
     * @return array<mixed>
     */
    private function getArray(array $array, string $key): array
    {
        $value = $array[$key] ?? [];

        return is_array($value) ? $value : [];
    }

    /**
     * @param  array<mixed>  $array
     */
    private function getString(array $array, string $key): string
    {
        $value = $array[$key] ?? '';

        return is_string($value) ? $value : '';
    }

    /**
     * @param  array<mixed>  $array
     */
    private function getInt(array $array, string $key): int
    {
        $value = $array[$key] ?? 0;

        return is_int($value) ? $value : 0;
    }

    private function parseDate(mixed $date): Carbon
    {
        return is_string($date) ? Carbon::parse($date) : now();
    }
}
