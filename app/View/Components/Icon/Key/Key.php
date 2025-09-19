<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Key;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Key extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.key.index');
    }
}
