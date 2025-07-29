<?php

namespace Modules\DvUi\Listeners;

use Modules\Base\Entities\Actions\Actions;
use Modules\Person\Entities\User\UserType;
use Modules\Project\Entities\MenuItem\MenuItemEntityModel;
use Modules\Project\Models\MenuModel;
use Modules\Project\Models\ProjectActionModel;
use Modules\Project\Models\ProjectModuleEntityDBModel;

class CreateMenuItemsListener
{
    public function handle($event): void
    {
        if (MenuModel::query()->where('name', $this->moduleName())->exists()) {
            return;
        }

        $menu = $this->createMenu($this->moduleName(), $this->moduleName(), 1);

        $this->createMenuItem($menu);
    }

    public function moduleName(): string
    {
        return config('dvui.name');
    }

    protected function createMenu($name, $title, $order = 1): MenuModel
    {
        return MenuModel::firstOrCreate(
            ['name' => $name],
            ['title' => $title, 'num_order' => $order, 'active' => true]
        );
    }

    protected function createMenuItem(MenuModel $menuModel, ?ProjectModuleEntityDBModel $entity = null, $key = null): void
    {
        $p = MenuItemEntityModel::props();
        $icons = str(__('dvui::page.icons'))->title()->value();
        $menuModel->menuItems()->create([
            $p->label => $icons,
            $p->num_order => 1,
            $p->title => $icons,
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('dvui.icons'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }

    protected function getAction(): ProjectActionModel
    {
        $action = ProjectActionModel::query()
            ->create(['name' => Actions::view->name, 'title' => str(__('examples'))->title()->value()]);
        $action->firstOrCreateGroup()
            ->createCondition(UserType::DEVELOPER);

        return $action;
    }
}
