<?php

namespace Modules\DvUi\View\Components\Carousel;

use Modules\DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Services\ComponentCheck;

class Carousel extends Component
{
    use ComponentCheck;
    use DevResources;

    public function render()
    {
        return view('dvui::components.carousel.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Carousel;
    }
}
