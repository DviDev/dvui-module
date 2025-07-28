<?php

namespace Modules\DvUi\View\Components\Tab\Content;

use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Content extends Component
{
    use DevResources;

    public function render()
    {
        return view('dvui::components.tab.content.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::TabContent;
    }
}
