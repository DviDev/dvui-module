<?php

namespace Modules\DvUi\View\Components\Icon\User;

use Illuminate\View\Component;
use Illuminate\View\View;

class User extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.user.index');
    }
}
