<?php

namespace Modules\DvUi\View\Components\Carousel;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Item extends Component
{
    use DevResources;


    public function render()
    {
        return view('dvui::components.carousel.item');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CarouselItem;
    }
}
