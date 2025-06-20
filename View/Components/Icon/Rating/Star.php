<?php

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\Component;

class Star extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public bool $s3 = false,
        public bool $s4 = false,
        public bool $s5 = false,
        public bool $s6 = false,
        public bool $s7 = false,
        public bool $s8 = false,
        public bool $s9 = false,
        public bool $s10 = false,
        public bool $default = false,
        public bool $star = false,
        public bool $fill = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.icon.rating.star');
    }

    public function containSize(): bool
    {
        return $this->s3
            || $this->s4
            || $this->s5
            || $this->s6
            || $this->s7
            || $this->s8
            || $this->s9
            || $this->s10;
    }
}
