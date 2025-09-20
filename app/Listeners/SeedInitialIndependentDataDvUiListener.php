<?php

declare(strict_types=1);

namespace Modules\DvUi\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Artisan;
use Modules\Base\Events\BaseSeederInitialIndependentDataEvent;
use Modules\DvUi\Database\Seeders\DvUiDatabaseSeeder;

final class SeedInitialIndependentDataDvUiListener implements ShouldQueue
{
    public function handle(BaseSeederInitialIndependentDataEvent $event): void
    {
        Artisan::call('db:seed', ['--class' => DvUiDatabaseSeeder::class]);
    }
}
