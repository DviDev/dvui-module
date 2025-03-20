<?php

use Modules\DvUi\Services\Plugins\Toastr\Toastr;

function toastr($instance): Toastr
{
    return Modules\DvUi\Services\Plugins\Toastr\Toastr::instance($instance);
}
