<?php

namespace Modules\DvUi\View\Components\Icon\Film;

use Illuminate\View\Component;
use Illuminate\View\View;

class Film extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.film.index');
    }
}
