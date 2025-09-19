<?php

declare(strict_types=1);

use Modules\DvUi\Services\Plugins\Toastr\Toastr;

if (! function_exists('toastr')) {
    function toastr($instance): Toastr
    {
        return Toastr::instance($instance);
    }
}
