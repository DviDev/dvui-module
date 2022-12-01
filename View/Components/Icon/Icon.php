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
        public bool $s1 = false,
        public bool $s2 = false,
        public bool $s3 = false,
        public bool $s4 = false,
        public bool $s5 = false,
        public bool $s6 = false,
        public bool $s7 = false,
        public bool $s8 = false,
        public bool $s9 = false,
        public bool $s10 = false,
        public bool $fill = false,
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
