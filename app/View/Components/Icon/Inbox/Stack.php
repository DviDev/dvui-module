<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Inbox;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Stack extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/inbox/stack');
    }
}
