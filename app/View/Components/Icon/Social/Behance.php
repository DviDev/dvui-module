<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Social;

use Illuminate\View\View;
use Modules\DvUi\View\Components\Icon\Icon;
use Modules\DvUi\View\Components\Icon\Rating\SizeTrait;

final class Behance extends Icon
{
    use SizeTrait;

    public function render(): View
    {
        return view('dvui::components.icon/social/behance');
    }
}
