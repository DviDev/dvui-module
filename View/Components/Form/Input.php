<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $label = null,
        public $attr = null,
        public bool $required = false,
        public bool $validate = false,
        public bool $filled_on_error = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.form.input');
    }
}
