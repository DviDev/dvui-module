<?php

namespace Modules\DvUi\View\Components\Icon\Queue;

use Illuminate\View\Component;
use Illuminate\View\View;

class QueueList extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/queue/list');
    }
}
