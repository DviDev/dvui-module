<?php

namespace Modules\DvUi\View\Components\Tab\Content;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

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
