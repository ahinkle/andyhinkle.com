<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Laravel\Head\Facades\Head;

class Seo extends Component
{
    public function __construct(
        public string $title,
        public ?string $description = null,
    ) {}

    public function render(): View|Closure|string
    {
        Head::title($this->title);

        if (filled($this->description)) {
            Head::description((string) $this->description);
        }

        return '';
    }
}
