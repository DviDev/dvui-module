@props([
    'label' => null,
    'attrs' => []
])
@php
    $model = collect($attributes->getAttributes())->filter(function($value, $key) {
        return str($key)->contains('wire:model');
    })->values()[0];
    $model = str($model)->explode('.')->first();
    $array = collect($attrs)->except(['id'])->merge($attributes->getAttributes())->all();
    $attributes->setAttributes($array);
@endphp
<div class="relative"
{{--     data-te-input-wrapper-init--}}
>
    <label
        for="{{$attrs['id']??null}}"
        @class([
            "pointer-events-none  mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary",
            "absolute left-3 top-0" => false
        ])>
        {{$attributes->get('label')}}
    </label>
    <textarea
        @class([
              "peer block min-h-[auto] w-full rounded  dark:border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",
              "border-0 dark:border-gray-700" => !$errors->get($model.'.'.$attrs['id']),
              "border dark:border-red-500" => $errors->get($model.'.'.$attrs['id']),
        ])
        rows="3"
      {{$attributes}}>{{$attributes->get('value')}}</textarea>
    @error($model.'.'.($attrs['id'] ?? null))
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
