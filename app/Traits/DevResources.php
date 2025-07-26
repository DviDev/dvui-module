<?php

namespace DvUi\app\Traits;

use Modules\DvUi\Enums\DvuiComponentAlias;

trait DevResources
{
    abstract public function componentAlias(): DvuiComponentAlias;
}
