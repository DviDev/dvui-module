<?php

namespace Modules\DvUi\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableDvUiListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('dvui');
    }
}
