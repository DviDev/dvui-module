<?php

namespace Modules\DvUi\View\Components\Icon\Envelope;

use Illuminate\View\Component;
use Illuminate\View\View;

class Envelope extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.envelope.index');
    }
}
