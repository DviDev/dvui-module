<?php

namespace Modules\DvUi\View\Components\Icon\Clipboard\Document;

use Illuminate\View\Component;
use Illuminate\View\View;

class Document extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.clipboard.document.index');
    }
}
