<?php

declare(strict_types=1);

namespace Modules\DvUi\Services\Plugins\Toastr;

enum Position: string
{
    case topLeft = 'toast-top-left';
    case topRight = 'toast-top-right';
    case bottomLeft = 'toast-bottom-left';
    case bottomRight = 'toast-bottom-right';
    case topFullWidth = 'toast-top-full-width';
    case bottomFullWidth = 'toast-bottom-full-width';
    case topCenter = 'toast-top-center';
    case bottomCenter = 'toast-bottom-center';
}
