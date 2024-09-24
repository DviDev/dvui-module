<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\View\View;

class Field extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public ?string $label = null, public ?string $id = null, public array $attr = [])
    {
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('dvui::components.form/field');
    }
}
