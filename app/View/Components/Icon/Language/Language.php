<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Language;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Language extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.language.index');
    }
}
