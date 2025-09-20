<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Envelope;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Envelope extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.envelope.index');
    }
}
