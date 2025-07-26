<?php

namespace Modules\DvUi\View\Components\List\Group;

use DvUi\Traits\DevResources;
use Illuminate\View\Component;
use Modules\DvUi\Enums\DvuiComponentAlias;

class Link extends Component
{
    use DevResources;
    public function render()
    {
        return view('dvui::components.list/group/link');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ListGroupLink;
    }
}
