<?php

namespace Modules\DvUi\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Modules\Base\Database\Seeders\BaseSeeder;
use Modules\Base\Entities\Config\ConfigEntityModel;
use Modules\Base\Models\ConfigModel;
use Modules\Person\Entities\User\UserType;
use Modules\Person\Models\UserTypeModel;

class DvUiDatabaseSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $superAdminTypeModel = UserTypeModel::query()->where('name', UserType::SUPER_ADMIN->value)->first();

        $superAdmin = BaseSeeder::firstOrCreateUser($superAdminTypeModel);

        $config = ConfigEntityModel::props();
        ConfigModel::query()->firstOrCreate([$config->name => 'app_logo'], [
            $config->name => 'app_logo',
            $config->value => asset('assets/img/dvi_logo.png'),
            $config->description => 'application_logo',
            $config->user_id => $superAdmin->id,
            $config->default => 1,
        ]);
    }
}
