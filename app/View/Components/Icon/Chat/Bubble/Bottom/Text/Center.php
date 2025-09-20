<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Chat\Bubble\Bottom\Text;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Center extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/chat/bubble/bottom/text/center');
    }
}
