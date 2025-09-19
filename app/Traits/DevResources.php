<?php

declare(strict_types=1);

namespace Modules\DvUi\Traits;

use Modules\DvUi\Enums\DvuiComponentAlias;

trait DevResources
{
    abstract public function componentAlias(): DvuiComponentAlias;
}
