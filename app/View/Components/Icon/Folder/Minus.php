<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Folder;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Minus extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/folder/minus');
    }
}
