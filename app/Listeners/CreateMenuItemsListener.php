<?php

namespace Modules\DvUi\Listeners;

use Modules\Permission\Enums\Actions;
use Modules\Permission\Models\PermissionActionModel;
use Modules\Person\Enums\UserType;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;
use Modules\Project\Entities\ProjectModuleMenuItem\ProjectModuleMenuItemEntityModel;
use Modules\Project\Events\CreateMenuItemsEvent;

class CreateMenuItemsListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('dvui.name');
    }

    protected function createMenuItems(CreateMenuItemsEvent $event): void
    {
        $p = ProjectModuleMenuItemEntityModel::props();

        $this->event->menu->menuItems()->create([
            $p->label => str(__('dvui::page.icons'))->title()->value(),
            $p->num_order => 1,
            $p->title => str(__('dvui::page.icons'))->title()->value(),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('dvui.icons'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
        $this->event->menu->menuItems()->create([
            $p->label => str(__('dvui::page.components'))->title()->value(),
            $p->num_order => 1,
            $p->title => str(__('dvui::page.components'))->title()->value(),
            $p->icon => '<i class="nav-icon fas fa-circle fa-xs text-xs"></i>',
            $p->url => route('dvui.pages.examples.components'),
            $p->active => true,
            $p->action_id => $this->getAction()->id,
        ]);
    }

    protected function getAction(): PermissionActionModel
    {
        $action = PermissionActionModel::query()->create([
            'name' => Actions::view->name,
            'title' => str(__('examples'))->title()->value(),
        ]);

        $action->firstOrCreateGroup()->createCondition(UserType::DEVELOPER);

        return $action;
    }
}
