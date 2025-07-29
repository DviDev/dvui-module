<?php

namespace Modules\DvUi\View\Components\Icon\User;

use Illuminate\View\Component;
use Illuminate\View\View;

class Users extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon/user/users');
    }
}
