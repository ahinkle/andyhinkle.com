<x-app>
    <x-slot name="seo">
        <title>Using Conditional Traits for Clean Queries</title>
        <meta name="description"
            content="Ever write a query and had a bunch of if filled with conditions? Here's a better way using conditional traits." />
        <meta property="og:title" content="Using Conditional Traits for Clean Queries" />
        <meta property="og:description"
            content="Ever write a query and had a bunch of if filled with conditions? Here's a better way using conditional traits." />
        <script type="application/ld+json">
            {
                "@@context": "https://schema.org",
                "@type": "BlogPosting",
                "headline": "Using Conditional Traits for Clean Queries",
                "datePublished": "2025-02-02T09:00:00+08:00",
                "dateModified": "2025-02-02T09:00:00+08:00",
            }
        </script>
    </x-slot>

    <h1 class="pt-4 text-center font-sans text-3xl font-bold text-white md:text-5xl">Using Conditional Traits for Clean
        Queries</h1>

    <p class="py-2 text-center font-sans text-sm text-white/75">February 2, 2025</p>

    <div class="mx-auto mt-8 max-w-3xl">
        <p class="text-left text-lg text-white/85">
            Have you ever wrote a query and had a bunch of <code>if</code> filled with conditions? Such as you need to
            update a field, but only if it's filled. Looks something like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
        if ($request->filled('title')) {
            $message->title = $request->title;
        }

        if ($request->filled('description')) {
            $message->description = $request->description;
        }

        if ($request->filled('completed')) {
            $message->completed_at = now();
        }

        if ($request->has('contacts')) {
            $message->contacts()->syncWithoutDetaching($request->contacts);
        }

        $message->save();
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            While this works, it can get messy if you add more conditions. A better way is to use conditional traits,
            which would change the code to look like this:
        </p>

        <pre>
        <x-torchlight-code language='php'>
        $message
            ->fillWhenPresent([
                'title',
                'description',
                'completed' => fn ($message) => $message->completed_at = now(),
            ])
            ->attachWhenPresent('contacts')
            ->save();
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            This is much cleaner and easier to read. Let's take a look at how this works.
        </p>

        <h2 class="mt-8 text-left font-sans text-2xl font-bold text-white">Fill When Present</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            The <code>fillWhenPresent</code> method accepts an array of attributes to fill. If the attribute is present
            in the request, it will be filled. You can also pass a closure as the value, which will be executed if the
            attribute is present. This is useful for attributes that require some processing, such as setting a
            timestamp.
        </p>

        <pre>
        <x-torchlight-code language='php'>
        namespace App\Models\Concerns;

        trait HasConditionalFills
        {
            public function fillWhenPresent(array $fields): self
            {
                collect($fields)->each(function ($value, $key) {
                    $field = is_numeric($key) ? $value : $key;

                    if (request()->filled($field)) {
                        is_callable($value)
                            ? $value($this)
                            : $this->{$field} = request()->input($field);
                    }
                });

                return $this;
            }
        }
        </x-torchlight-code>
        </pre>

        <h2 class="mt-8 text-left font-sans text-2xl font-bold text-white">Attach When Present</h2>

        <p class="mt-4 text-left text-lg text-white/85">
            The <code>attachWhenPresent</code> method is useful for attaching relationships. It will attach the
            relationship if it's present in the request. This is useful for many-to-many relationships, such as
            attaching speakers to a message.
        </p>

        <pre>
        <x-torchlight-code language='php'>
        namespace App\Models\Concerns;

        trait HasConditionalRelations
        {
            public function attachWhenPresent(string $relation, ?string $field = null): self
            {
                $field = $field ?? $relation;

                if (request()->has($field)) {
                    $this->{$relation}()->syncWithoutDetaching(request($field));
                }

                return $this;
            }
        }
        </x-torchlight-code>
        </pre>

        <p class="mt-4 text-left text-lg text-white/85">
            Conditional traits are a great way to keep your code clean and readable. They allow you to easily add
            conditions without cluttering your code with <code>if</code> statements.
        </p>
</x-app>
