@props([
    'label' => null,
    'id' => null,
    'checked' => false,
    'attr' => null,
    'primary' => true,
    'orange' => false
])
@php
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
    $array['id'] = $attributes->get('id') ?? 'check_'.random_int(10, 99);
    $attributes->setAttributes($array);

    $primary = !$orange;
@endphp
<div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
    <input
        @class([
            "relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-['']",
            "checked:border-primary" => $primary,
            "checked:border-[#FF494AFF]" => $orange,
            "checked:bg-primary" => $primary,
            "checked:bg-[#FF494AFF]" => $orange,
            "dark:checked:border-primary" => $primary,
            "dark:checked:border-[#FF494AFF]" => $orange,
            "dark:checked:bg-primary" => $primary,
            "dark:checked:bg-[#FF494AFF]" => $orange,
            "checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04]",
            "hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)]" => $primary,
            "hover:before:shadow-[0px_0px_0px_13px_#FF494AFF]" => $orange,
            "focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12]",
            "focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)]" => $primary,
            "focus:before:shadow-[0px_0px_0px_13px_#FF494AFF]" => $orange,
            "focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100",
            "checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" => $primary,
            "checked:focus:before:shadow-[0px_0px_0px_13px_#FF494AFF]" => $orange,
            "checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600",
            "dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)]",
            "dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" => $primary,
            "dark:checked:focus:before:shadow-[0px_0px_0px_13px_#FF494AFF]" => $orange,
        ])
        type="checkbox"
        @checked($checked)
        {{$attributes}} />
    <label for="{{$attributes->get('id')}}"
        class="inline-block pl-[0.15rem] hover:cursor-pointer">
        {{$label}}
    </label>
</div>
