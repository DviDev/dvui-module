<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Dev;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Info extends Component
{
    public function render(): View|string
    {
        return view('dvui::components.dev.info');
    }
}
