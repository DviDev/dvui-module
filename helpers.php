<?php

use Modules\DvUi\Services\Plugins\Toastr\Toastr;

function toastr($instance): Toastr
{
    return Toastr::instance($instance);
}
