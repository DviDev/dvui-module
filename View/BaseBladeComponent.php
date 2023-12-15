<?php

namespace Modules\DvUi\View;

use Illuminate\View\Component;

abstract class BaseBladeComponent extends Component
{
    public function __construct(
        public ?array  $attr = null,
        public ?string $label = null,
        public bool    $required = false,
        public bool    $validate = false,
        public         $value = null,
    )
    {
        $this->attr['label'] = $label ?? $this->attr['label'] ?? null;
        $this->attr['required'] = $required ?? $this->attr['required'] ?? false;
        $this->attr['validate'] = $validate ?? $this->attr['validate'] ?? false;
        $this->attr['value'] = $value ?? $this->attr['value'] ?? null;
    }

    public function getFormField($attributes)
    {
        return collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
            ?? $attributes['id'] ?? $attributes['name'] ?? $this->label;
    }
}
