---
title: "Using Conditional Traits for Clean Queries"
description: "Ever write a query and had a bunch of if filled with conditions? Here's a better way using conditional traits."
published_at: "2025-02-02"
---

Have you ever wrote a query and had a bunch of `if` filled with conditions? Such as you need to update a field, but only if it's filled. Looks something like this:

```php
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
```

While this works, it can get messy if you add more conditions. A better way is to use conditional traits, which would change the code to look like this:

```php
$message
    ->fillWhenPresent([
        'title',
        'description',
        'completed' => fn ($message) => $message->completed_at = now(),
    ])
    ->attachWhenPresent('contacts')
    ->save();
```

This is much cleaner and easier to read. Let's take a look at how this works.

## Fill When Present

The `fillWhenPresent` method accepts an array of attributes to fill. If the attribute is present in the request, it will be filled. You can also pass a closure as the value, which will be executed if the attribute is present. This is useful for attributes that require some processing, such as setting a timestamp.

```php
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
```

## Attach When Present

The `attachWhenPresent` method is useful for attaching relationships. It will attach the relationship if it's present in the request. This is useful for many-to-many relationships, such as attaching speakers to a message.

```php
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
```

Conditional traits are a great way to keep your code clean and readable. They allow you to easily add conditions without cluttering your code with `if` statements.
