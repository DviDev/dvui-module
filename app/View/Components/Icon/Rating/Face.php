<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

final class Face extends Icon
{
    public function render(): View
    {
        return view('dvui::components.icon.rating.face');
    }
}
