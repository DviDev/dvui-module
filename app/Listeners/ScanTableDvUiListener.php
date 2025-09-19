<?php

declare(strict_types=1);

namespace Modules\DvUi\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

final class ScanTableDvUiListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('dvui');
    }
}
