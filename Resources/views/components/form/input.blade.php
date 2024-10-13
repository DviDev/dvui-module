@php
    if ($attr) {
        $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
        if (isset($array['name'])){
            $array['name'] = trans($array['name']);
        }
        if (isset($array['placeholder'])){
            $array['placeholder'] = trans($array['placeholder']);
        }
        if (isset($array['label'])){
            $array['label'] = ucfirst(trans(strtolower($array['label'])));
        }
        $attributes->setAttributes($array);
    }
    $field = collect($attributes)->first(fn($value, $key) => str($key)->contains('wire:model'))
            ?? $attributes['id'] ?? $attributes['name'] ?? $label;
@endphp
<div class="w-full">
    @if($label || $attributes->get('label'))
        <x-lte::label :for="$field" :value="$label ?? $attributes->get('label')" :required="$attributes->get('required')"/>
    @endif
        <div class="relative">
        <input
            type="{{$attributes->get('type') ?: 'text'}}"
            {{$attributes->class([
                "leading-[1.5]" => !$attributes->has('type') || $attributes->get('type') == 'date',
                "leading-[1.6]" => $attributes->get('type') !== 'date',
                "bg-transparent" => false, //se usar wire:loading.class="bg-gray-200" ñ funciona se bg-transparent=true
                "border peer block min-h-[auto] w-full rounded  px-3 py-[0.32rem]  outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary",
                "border-gray-200 dark:border-0 dark:border-gray-700" => !$errors->has($field),
                "border-red-500" => $errors->has($field),
            ])}}
            {{$attributes}}/>

        <x-dvui::error :field="$field"/>
    </div>
</div>
