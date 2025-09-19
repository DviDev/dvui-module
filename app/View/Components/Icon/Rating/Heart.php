<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Rating;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;

final class Heart extends Icon
{
    use SizeTrait;

    public function render(): View
    {
        return view('dvui::components.icon.rating.heart');
    }
}
