<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;
use Illuminate\View\ComponentSlot;
use Modules\DvUi\Entities\ComponentCheck;

class Card extends Component
{
    use ComponentCheck;

    /**
     * Create a new component instance.
     * @param null $heading Slot of the card heading
     * @param string|null $title Title of the card
     * @param string|null $footer Footer of the card
     */
    public function __construct(
        public $heading = null,
        public ?string $title = null,
        public ?string $content = null,
        public ?string $footer = null,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dvui::components.card');
    }

    public function headerClasses(ComponentSlot $target = null)
    {
        $classes = 'text-sm';
        $classes .= ' py-2';
        $classes .= ' px-3';
        $classes .= ' font-bold';
        $classes .= ' border-b dark:border-gray-700';
        $classes .= $this->onlyClassesStartWith('border', $target). ' ';
        $classes .= !$this->classesContainColor($target) ? 'text-gray-600 ' : '';
        return $classes;
    }
}
