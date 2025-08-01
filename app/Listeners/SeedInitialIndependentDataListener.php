<?php

namespace Modules\DvUi\Listeners;

use Illuminate\Support\Facades\Artisan;
use Modules\Base\Events\DatabaseSeederEvent;
use Modules\DvUi\Database\Seeders\DvUiDatabaseSeeder;

class SeedInitialIndependentDataListener
{
    public function handle(DatabaseSeederEvent $event): void
    {
        Artisan::call('db:seed', ['--class' => DvUiDatabaseSeeder::class]);
    }
}
