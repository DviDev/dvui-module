<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components;

use Illuminate\View\ComponentSlot;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;
use Modules\DvUi\Contracts\BaseBladeComponent;

final class Card extends BaseBladeComponent
{
    public function __construct(
        public $heading = null,
        public ?string $title = null,
        public ?string $content = null,
        public mixed $footer = null,
        public ?array $attr = null,
    ) {
        parent::__construct($attr);
    }

    public function render(): View
    {
        return view('dvui::components.card');
    }

    public function headerClasses(?ComponentSlot $target = null)
    {
        $classes = 'text-sm';
        $classes .= ' py-2';
        $classes .= ' px-3';
        $classes .= ' font-bold';
        $classes .= ' border-b dark:border-gray-700';
        $classes .= $this->onlyClassesStartWith('border', $target).' ';
        $classes .= ! $this->classesContainColor($target) ? 'text-gray-600 ' : '';

        return $classes;
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Card;
    }
}
