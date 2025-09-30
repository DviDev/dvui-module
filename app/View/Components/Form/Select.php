<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\View;
use Modules\DvUi\Contracts\BaseBladeComponent;
use Modules\DvUi\Enums\DvuiComponentAlias;

final class Select extends BaseBladeComponent
{
    public function render(): View
    {
        return view('dvui::components.form.select.index');
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::FormSelect;
    }
}
