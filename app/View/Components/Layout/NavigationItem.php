<?php

namespace App\View\Components\Layout;

use Ahinkle\AutoResolvableComponents\AutoResolvableComponent;

class NavigationItem extends AutoResolvableComponent
{
    public function __construct(
        public string $href = '',
        public bool $active = false,
    ) {
        //
    }
}
