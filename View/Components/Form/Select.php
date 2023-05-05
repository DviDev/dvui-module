<?php

namespace Modules\DvUi\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public ?array $attr = null, public ?string $label = null)
    {
        $this->attributes = $this->attributes ?: $this->newAttributeBag();
        $array = collect($attr)->except(['id'])->merge($this->attributes->getAttributes())
            ->put('label', $label)
            ->filter()
            ->all();
        $this->attributes->setAttributes($array);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('dvui::components.form/select');
    }
}
