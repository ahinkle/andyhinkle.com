---
title: "Stop Passing Booleans As Arguments"
description: "Boolean flag arguments hide intent and make code harder to read. Here's how to refactor them into expressive enums in Laravel."
published_at: "2026-03-17"
---

If you've ever seen a method call like this:

```php
$order->cancel(silent: true);
```

You might pause and ask: what does `silent` actually mean here? Now imagine the caller doesn't use named arguments:

```php
$order->cancel(true);
```

That `true` tells you nothing. You have to dig into the method signature to understand what's happening. And when a second boolean flag inevitably gets added, things get worse:

```php
$order->cancel(true, false);
```

Before long, someone adds a reason and a notification override, and now you're staring at this:

```php
$order->cancel(true, false, 'customer_request', true, null);
```

Good luck figuring out what any of that means without reading the method signature.

Boolean flags hide intent. They're a code smell that signals your method is doing two different things based on a toggle, and that toggle is invisible at the call site.

## The Before

Here's a controller that cancels an order. It accepts a `bool $silent` flag to optionally skip sending a notification to the customer:

```php
class OrderController extends Controller
{
    public function cancel(Order $order, bool $silent = false)
    {
        $order->markAsCancelled(silent: $silent);

        return redirect()->route('orders.index')
            ->with('success', 'Order cancelled.');
    }
}
```

And the event listener that handles post-cancellation logic:

```php
class SendOrderCancellationNotification
{
    public function handle(OrderCancelled $event): void
    {
        if (! $event->silent) {
            $event->order->customer->notify(
                new OrderCancelledNotification($event->order)
            );
        }
    }
}
```

This works. But `$event->silent` is a boolean doing heavy lifting. It controls whether the customer gets notified. What happens when you need a third mode, say you want to cancel and issue a refund? Do you add another boolean? `$order->markAsCancelled(silent: false, refund: true)`?

That's a path you don't want to go down.

## The Enum

Instead, replace the boolean with an enum that names the behavior:

```php
enum CancellationMode: string
{
    case Default = 'default';
    case Silent = 'silent';
}
```

Now the intent is explicit. `CancellationMode::Silent` says exactly what it does. And when you need that third mode six months from now, you add a case instead of a boolean.

## The After

The controller now accepts a string and resolves it to the enum:

```php
class OrderController extends Controller
{
    public function cancel(Order $order, string $mode = 'default')
    {
        $mode = CancellationMode::tryFrom($mode) ?? CancellationMode::Default;

        $order->markAsCancelled(mode: $mode);

        return redirect()->route('orders.index')
            ->with('success', 'Order cancelled.');
    }
}
```

The event now carries a typed mode instead of a bare boolean:

```php
class OrderCancelled
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public Order $order,
        public CancellationMode $mode = CancellationMode::Default,
    ) {}
}
```

And the listener reads like plain English:

```php
class SendOrderCancellationNotification
{
    public function handle(OrderCancelled $event): void
    {
        if ($event->mode !== CancellationMode::Silent) {
            $event->order->customer->notify(
                new OrderCancelledNotification($event->order)
            );
        }
    }
}
```

`$event->mode !== CancellationMode::Silent` is immediately understandable. No need to parse what `! $event->silent` means in context.

## Why Not Always an Enum?

Enums aren't always the answer. If the behavior you're toggling is more like a set of independent options rather than a single mode, a fluent builder can be a better fit:

```php
$order->cancel()
    ->notifyVia('email')
    ->withRefund()
    ->reason('Customer requested');
```

Each method call is self-documenting and the options are independent of each other. You'd never try to cram all of that into a single enum. Enums work best when you're picking *one* mode from a set of mutually exclusive behaviors. Fluent builders work best when you're composing multiple independent options together.

## Why This Matters

Most of the time though, an enum is exactly what I reach for.

The call site actually reads. `markAsCancelled(mode: CancellationMode::Silent)` tells you everything. `markAsCancelled(silent: true)` only makes sense if you already know the parameter name, and without named arguments you're just guessing.

New modes are trivial. Need a `NotifyViaEmail` case down the road? Add one line to the enum.

You can actually search for them. `CancellationMode::Silent` across your codebase finds every silent cancellation.

Next time you reach for a `bool $flag` parameter, consider whether it should be an enum or a fluent method instead. Either way, stop passing booleans.

Cheers
