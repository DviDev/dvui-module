<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Clipboard\Document;

use Illuminate\View\Component;
use Illuminate\View\View;

final class DocumentList extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.clipboard.document.list');
    }
}
