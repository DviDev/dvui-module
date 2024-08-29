{{--as variaveis definidas na classe tem interacoes diferentes. Preferir definir as propriedades no componente blade. --}}
@props([
    'name',
    'checked' => false,
    'label' => null,
    'primary' => false,
    'orange' => false
])
@php
    $primary = !$orange
@endphp
<div class="mb-[0.125rem] inline-block  pl-[1.5rem]">
    <input
        @class([
            "relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none",
            "border-2 border-solid rounded-full",
            "border-neutral-300",
            "before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-['']",
            "checked:border-primary" => $primary,
            "checked:border-[#FF494AFF]" => $orange,
            "checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full",
            "checked:after:border-primary" => $primary,
            "checked:after:border-[#FF494AFF]" => $orange,
            "checked:after:bg-primary" => $primary,
            "checked:after:bg-[#FF494AFF]" => $orange,
            "checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)]",
            "hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)]",
            "checked:focus:border-primary" => $primary,
            "checked:focus:border-[#FF494AFF]" => $orange,
            "focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s]",
            "checked:focus:before:scale-100",
            "checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" => $primary,
            "checked:focus:before:shadow-[0px_0px_0px_13px_#FF494AFF]" => $orange,
            "checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]",
            "dark:border-neutral-600",
            "dark:checked:border-primary" => $primary,
            "dark:checked:border-[#FF494AFF]" => $orange,
            "dark:checked:after:border-primary" => $primary,
            "dark:checked:after:border-[#FF494AFF]" => $orange,
            "dark:checked:after:bg-primary" => $primary,
            "dark:checked:after:bg-[#FF494AFF]" => $orange,
            "dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)]",
            "dark:checked:focus:border-primary" => $primary,
            "dark:checked:focus:border-[#FF494AFF]" => $orange,
            "dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
        ])
        type="radio"
        name="{{$name}}"
        id="{{$attributes->get('id')}}"
        {{$attributes}}
        @checked($checked ?? false)
    />
    <label
        class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
        for="{{$attributes->get('id')}}">
        {{$label?? null}}
    </label>
</div>
