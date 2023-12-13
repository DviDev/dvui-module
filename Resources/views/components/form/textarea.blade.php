@props([
    'label' => null,
    'attrs' => []
])
@php
    $model = collect($attributes->getAttributes())->filter(function($value, $key) {
        return str($key)->contains('wire:model');
    })->first();
    $model = str($model)->explode('.')->first();
    $collection = collect($attrs)->except(['id'])->merge($attributes->getAttributes());
    if ($label){
        $collection = $collection->merge(['label' => $label]);
    }
    $attributes->setAttributes($collection->all());
@endphp
<div class="w-full"
    {{--     data-te-input-wrapper-init--}}
>
    @if($label)
        <label
            for="{{$attrs['id']??null}}"
            @class([
                "pointer-events-none  mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6]  transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary",
                "absolute left-3 top-0" => false
            ])>
            {{$attributes->get('label')}}
        </label>
    @endif

    <textarea
        @class([
            "peer block min-h-[auto] w-full rounded dark:border bg-transparent px-3 py-[0.32rem] leading-[1.6]",
            "outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100",
            "data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200",
            "dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",
            "border-gray-300 dark:border-gray-700" => !$errors->get($model.'.'.$attributes->get('id')),
            "border dark:border-red-500" => $errors->get($model.'.'.$attributes->get('id')),
        ])
        rows="3"
      {{$attributes}}>{{$attributes->get('value')}}</textarea>
        <div class="text-right text-gray-400 text-xs">
            <span x-text="$wire.{{$attributes->get('wire:model')}}.length + '/'+ {{$attributes->get('maxlength')}}"></span>
        </div>
    @error($model.'.'.($attributes->get('id') ?? null))
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
