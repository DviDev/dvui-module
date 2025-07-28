<?php

namespace Modules\DvUi\View\Components\Icon\Clipboard\Document;

use Illuminate\View\Component;
use Illuminate\View\View;

class DocumentList extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.clipboard.document.list');
    }
}
