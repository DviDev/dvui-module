<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Sparkles;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Sparkles extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.sparkles.index');
    }
}
