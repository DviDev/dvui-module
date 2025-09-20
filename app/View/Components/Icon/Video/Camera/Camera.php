<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Icon\Video\Camera;

use Illuminate\View\Component;
use Illuminate\View\View;

final class Camera extends Component
{
    public function render(): View
    {
        return view('dvui::components.icon.video.camera.index');
    }
}
