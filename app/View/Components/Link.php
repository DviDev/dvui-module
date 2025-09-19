<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

final class Link extends Component
{
    use DevResources;

    public function render(): View
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

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Link;
    }
}
