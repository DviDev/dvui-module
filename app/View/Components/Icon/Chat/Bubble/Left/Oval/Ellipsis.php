<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Chat\Bubble\Left\Oval;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Ellipsis extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/chat/bubble/left/oval/ellipsis');
    }
}
