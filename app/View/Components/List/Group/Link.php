<?php

namespace Modules\DvUi\View\Components\List\Group;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\DevResources;

class Link extends Component
{
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.list/group/link');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::ListGroupLink;
    }
}
