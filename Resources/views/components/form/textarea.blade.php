@props([
    'label' => null,
    'attrs' => []
])
@php
    $model_ = collect($attributes->getAttributes())->filter(function($value, $key) {
        return str($key)->contains('wire:model');
    })->first();
    $model_ = str($model_)->explode('.')->first();
    $collection = collect($attrs)->except(['id'])->merge($attributes->getAttributes());
    if ($label){
        $collection = $collection->merge(['label' => $label]);
    }
    $attributes->setAttributes($collection->all());

    $field = collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
            ?? $attributes['id'] ?? $attributes['name'] ?? $label;
@endphp
<div class="w-full" x-data="{ model_value: $wire.model.{{$attributes['name']}} }"
    {{--     data-te-input-wrapper-init--}}
>
    @if($label || $attributes->get('label'))
        <x-lte::label :for="$field" :value="$label ?? $attributes->get('label')"
                      :required="$attributes->get('required')"/>
    @endif
    <textarea x-cloak
        @class([
            "border border-gray-200",
            "dark:border-gray-700" => !$errors->get($model_.'.'.$attributes->get('id')),
            "dark:border-red-500" => $errors->get($model_.'.'.$attributes->get('id')),
            "min-h-[auto] w-full rounded",
            "px-3 py-[0.32rem] leading-[1.6]",
            "text-neutral-700 dark:text-neutral-200",
            "dark:placeholder:text-neutral-200" => false,
        ])

        {{$attributes}} x-model="model_value">
        {{$attributes->get('value')}}
    </textarea>

    <div class="text-right text-gray-400 text-xs flex justify-end">
        {{--        <span x-html="model_value ? model_value.length : 0"></span>/--}}
        <span>{{$attributes->get('maxlength', 0) }}</span>
    </div>
    @error($model_.'.'.($attributes->get('id') ?? null))
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
