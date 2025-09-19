<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Tag;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Tag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.tag.index');
    }
}
