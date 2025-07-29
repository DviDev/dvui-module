<?php

namespace Modules\DvUi\View\Components\Icon\Server;

use Illuminate\View\Component;
use Illuminate\View\View;

class Server extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.server.index');
    }
}
