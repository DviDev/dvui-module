<?php

namespace Modules\DvUi\View\Components\Icon\Document;

use Illuminate\View\Component;
use Illuminate\View\View;

class Document extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.document.index');
    }
}
