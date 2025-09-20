<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Server;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Server extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.server.index');
    }
}
