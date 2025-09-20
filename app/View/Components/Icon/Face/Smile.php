<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Face;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Smile extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/face/smile');
    }
}
