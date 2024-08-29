<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;

class Radio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string  $name,
        public bool    $checked = false,
        public ?string $label = null,
        public bool    $primary = false,
        public bool    $orange = false
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.form.radio');
    }
}
