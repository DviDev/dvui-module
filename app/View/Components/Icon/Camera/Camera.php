<?php

namespace Modules\DvUi\View\Components\Icon\Camera;

use Illuminate\View\Component;
use Illuminate\View\View;

class Camera extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.camera.index');
    }
}
