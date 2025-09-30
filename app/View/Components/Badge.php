<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Traits\ComponentCheck;
use Modules\DvUi\Traits\DevResources;

final class Badge extends Component
{
    use ComponentCheck;
    use DevResources;

    public function render(): View
    {
        return view('dvui::components.badge');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Badge;
    }
}
