@props([
    'label' => null,
    'attr' => null,
])
@php
if ($attr) {
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
    $attributes->setAttributes($array);
}
@endphp
<div class="relative"
{{--     data-te-input-wrapper-init--}}
>
    <label
        @class([
            "pointer-events-none left-3  max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary",
            "absolute top-0 mb-0" => false
        ])>
        {{$label ?: $attributes->get('label')}}
    </label>
    <input type="{{$attributes->get('type') ?: 'text'}}"
        @class([
            "peer block min-h-[auto] w-full rounded dark:border bg-transparent  px-3 outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",
            "border-0 dark:border-gray-700" => !$errors->get('model.'.$attributes->get('id')),
            "border dark:border-red-500" => $errors->get('model.'.$attributes->get('id')),
            'py-[0.30rem] leading-[1.5]' => true,
        ])
        {{$attributes}}/>
    @error("model.{$attributes->get('id')}")
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
