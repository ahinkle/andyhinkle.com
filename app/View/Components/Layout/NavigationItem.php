<?php

namespace App\View\Components\Layout;

use Ahinkle\AutoResolvableComponents\AutoResolvableComponent;
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
