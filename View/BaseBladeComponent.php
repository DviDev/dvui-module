<?php

namespace Modules\DvUi\View;

use Illuminate\View\Component;
use Modules\DvUi\Entities\ComponentCheck;

abstract class BaseBladeComponent extends Component
{
    use ComponentCheck;

    public function __construct(
        public ?array          $attr = null,
        public ?string         $label = null,
        public ?bool           $required = null,
        public ?bool            $validate = null,
        public                 $value = null,
        public string|int|null $id = null,
        public ?bool   $disabled = null,
        public ?string $placeholder = null,
    )
    {
        $this->attr['label'] = $label ?? $this->attr['label'] ?? null;
        $this->attr['required'] = $required ?? $this->attr['required'] ?? false;
        $this->attr['validate'] = $validate ?? $this->attr['validate'] ?? false;
        $this->attr['value'] = $value ?? $this->attr['value'] ?? null;
        $this->attr['id'] = $id ?? $this->attr['id'] ?? null;
        $this->attr['disabled'] = $this->disabled ?? $this->attr['disabled'] ?? null;
        $this->attr['placeholder'] = $this->placeholder ?? $this->attr['placeholder'] ?? null;
    }

    public function getFormField($attributes)
    {
        return collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
            ?? $attributes['id'] ?? $attributes['name'] ?? $this->label;
    }
}
