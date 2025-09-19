<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Photo;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Photo extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.photo.index');
    }
}
