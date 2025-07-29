<?php

namespace Modules\DvUi\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishComponents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:publish-components {module}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Module Components';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = str($this->argument('module'));
        $source = base_path("Modules/{$module->Ucfirst()->value()}/resources/views/components");
        $destination = resource_path('views/componentes/' . $module->snake()->value());

        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        File::copyDirectory($source, $destination);

        // Classes
        $source = base_path("Modules/{$module->ucfirst()->value()}/app/View/Components");
        $destination = app_path('View/Components/' . $module->ucfirst()->value());

        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        File::copyDirectory($source, $destination);

        $this->info('Components published successfully!');
    }
}
