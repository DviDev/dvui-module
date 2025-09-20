<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Ellipsis\Envelope;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Open extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/ellipsis/envelope/open');
    }
}
