<?php

namespace Modules\DvUi\View\Components\Carousel;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Item extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.carousel.item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CarouselItem;
    }
}
