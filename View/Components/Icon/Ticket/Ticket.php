<?php

namespace Modules\DvUi\View\Components\Icon\Ticket;

use Illuminate\View\Component;
use Illuminate\View\View;

class Ticket extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.ticket.index');
    }
}
