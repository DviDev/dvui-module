<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Ticket;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Ticket extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.ticket.index');
    }
}
