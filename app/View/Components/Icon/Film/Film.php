<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Film;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Film extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.film.index');
    }
}
