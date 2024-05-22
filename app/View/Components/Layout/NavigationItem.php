<?php

namespace App\View\Components\Layout;

use Ahinkle\AutoResolvableComponents\AutoResolvableComponent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationItem extends AutoResolvableComponent
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href = '',
        public bool $active = false,
    ) {
        //
    }
}
