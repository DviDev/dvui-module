<?php

namespace Modules\DvUi\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
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
}
