<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.link');
    }

    public function hasColor()
    {
        return
        $this->attributes->has('primary') ||
        $this->attributes->has('secondary') ||
        $this->attributes->has('success') ||
        $this->attributes->has('danger') ||
        $this->attributes->has('warning') ||
        $this->attributes->has('attention') ||
        $this->attributes->has('info') ||
        $this->attributes->has('light') ||
        $this->attributes->has('dark') ||
        $this->attributes->has('link') ||
        $this->attributes->has('white');
    }

    public function hasSize()
    {
        return
            $this->attributes->has('xs') ||
            $this->attributes->has('sm') ||
            $this->attributes->has('md') ||
            $this->attributes->has('lg') ||
            $this->attributes->has('xlg');
    }
}
