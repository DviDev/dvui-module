<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Hashtag;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Hashtag extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.hashtag.index');
    }
}
