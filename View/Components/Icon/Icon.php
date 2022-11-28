<?php

namespace Modules\DvUi\View\Components\Icon;

use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?bool $s1 = null,
        public ?bool $s2 = null,
        public ?bool $s3 = null,
        public ?bool $s4 = null,
        public ?bool $s5 = null,
        public ?bool $s6 = null,
        public ?bool $s7 = null,
        public ?bool $s8 = null,
        public ?bool $s9 = null,
        public ?bool $s10 = null,
    )
    {
        //
    }

    public function render()
    {
        return view('dvui::components.icon.index');
    }

    public function withoutSizes()
    {
        return
            !$this->s1
            && !$this->s2
            && !$this->s3
            && !$this->s4
            && !$this->s5
            && !$this->s6
            && !$this->s7
            && !$this->s8
            && !$this->s9
            && !$this->s10;
    }
}
