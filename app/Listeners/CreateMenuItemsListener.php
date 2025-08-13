<?php

namespace Modules\DvUi\Listeners;

use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Entities\MenuItem\MenuItemEntityModel;
use Modules\Project\Models\MenuModel;

class CreateMenuItemsListener
{
    public function handle($event): void
    {
        if (MenuModel::query()->where('name', $this->moduleName())->exists()) {
            return;
        }

        $this->createMenuItems();
    }

    public function moduleName(): string
    {
        return config('dvui.name');
    }

    protected function createMenuItems(): void
    {
        $menu = $this->createMenu($this->moduleName(), $this->moduleName(), 1);
        $this->createMenuItem(
            menu: $menu,
            name: str(__('dvui::page.icons'))->title()->value(),
            route: route('dvui.icons')
        );
        $this->createMenuItem(
            menu: $menu,
            name: str(__('dvui::page.components'))->title()->value(),
            route: route('dvui.pages.examples.components')
        );
    }

    protected function createMenu($name, $title, $order = 1): MenuModel
    {
        return MenuModel::firstOrCreate(
            ['name' => $name],
            ['title' => $title, 'num_order' => $order, 'active' => true]
        );
    }

    protected function createMenuItem(MenuModel $menu, string $name, string $route, int $order = 1): void
    {
        $p = MenuItemEntityModel::props();

        $menu->menuItems()->create([
            $p->label => $name,
            $p->num_order => 1,
            $p->title => $name,
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => $route,
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()
            ->create(['name' => Actions::view->name, 'title' => str(__('examples'))->title()->value()]);
        $action->firstOrCreateGroup()
            ->createCondition(UserType::DEVELOPER);

        return $action;
    }

    protected function createMenuItemIcon(MenuModel $menu, MenuItemEntityModel $p): void
    {
        $icons = str(__('dvui::page.icons'))->title()->value();

        $menu->menuItems()->create([
            $p->label => $icons,
            $p->num_order => 1,
            $p->title => $icons,
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('dvui.icons'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }
}
