<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Megaphone;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Megaphone extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.megaphone.index');
    }
}
