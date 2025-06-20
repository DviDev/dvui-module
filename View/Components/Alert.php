<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use function view;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $content = null,
        public bool $dismiss = false,
        public bool $blue = false,
        public bool $red = false,
        public bool $green = false,
        public bool $yellow = false,
        public bool $purple = false,
        public bool $indigo = false,
        public bool $gray = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dvui::components.alert');
    }
}
