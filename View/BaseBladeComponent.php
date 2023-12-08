<?php

namespace Modules\DvUi\View;

use Illuminate\View\Component;

abstract class BaseBladeComponent extends Component
{
    public function __construct(
        public ?string $label = null,
        public ?array  $attr = null,
        public bool    $required = false,
        public bool    $validate = false,
    )
    {
        $this->label = $this->attr['label'] ?? null;
        $this->required = $this->attr['required'] ?? false;
        $this->validate = $this->attr['validate'] ?? false;
    }
}
