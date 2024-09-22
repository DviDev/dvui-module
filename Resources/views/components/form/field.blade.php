{{$slot}}
@if($validate || $required)
    <x-lte::error :field="collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
                ?? $attributes['id'] ?? $attributes['name'] ?? $txt"/>
@endif
