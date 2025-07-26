<?php

namespace Modules\DvUi\View\Components;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

class CardIcon extends Component
{
    use DevResources;
    public function __construct(public $title, public $icon)
    {
        //
    }

    public function render(): View|string
    {
        return view('dvui::components.card-icon');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::CardIcon;
    }
}
