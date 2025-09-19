<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Microphone;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Microphone extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.microphone.index');
    }
}
