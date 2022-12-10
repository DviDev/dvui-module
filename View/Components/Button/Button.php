<?php

namespace Modules\DvUi\View\Components\Button;

use Illuminate\View\Component;

class Button extends Component
{
    /**
    * Create a new component instance
    *
    * @return void
    */
    public function __construct(
        public bool    $noColor = false,
        public bool    $primary = false,
        public bool    $secondary = false,
        public bool    $success = false,
        public bool    $danger = false,
        public bool    $warning = false,
        public bool    $attention = false,
        public bool    $info = false,
        public bool    $light = false,
        public bool    $dark = false,
        public bool    $link = false,
        public string  $type = 'button',
        public ?string $title = null,
        public ?string $label = null,
        public bool    $ripple = false,
        public bool    $rounded = false,
        public bool    $pill = false,
        public bool    $shadow = false,
        public bool    $border = false,
        public bool    $xs = false,
        public bool    $sm = false,
        public bool    $md = false,
        public bool    $lg = false,
        public bool    $xlg = false,
        public bool    $disabled = false,
        public bool    $full = false,
        public ?string $icon = null,
        public ?string $modal = null,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('dvui::components.button.index');
    }

    public function borderColor()
    {
        $item = collect([
            ['color' => 'blue', 'value' => $this->primary],
            ['color' => 'purple', 'value' => $this->secondary],
            ['color' => 'green', 'value' => $this->success],
            ['color' => 'red', 'value' => $this->danger],
            ['color' => 'yellow', 'value' => $this->warning],
            ['color' => 'blue', 'value' => $this->info],
            ['color' => 'transparent', 'value' => $this->link],
            ['color' => 'light', 'value' => $this->light],
            ['color' => 'gray', 'value' => $this->dark],
        ])->reject(fn($color) => !$color || !$color['value'])->last();
        return $item ? $item['color'] : null;
    }
}
