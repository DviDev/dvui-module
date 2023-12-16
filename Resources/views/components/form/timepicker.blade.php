@props([
    'attr' => null
])
@php
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
    $attributes->setAttributes($array);
@endphp
<div class="w-full">
    <label
        {{--        for="input_{{$attributes->get('id')}}"--}}
        @class([
            "pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary",
            "absolute top-0" => false
        ])>
        {{$attributes->get('label')}}
    </label>
    <div class="relative"
         data-te-input-wrapper-init
         data-te-with-icon="false"
         {{--         data-te-timepicker-init--}}
         data-te-format24="true"
         id="{{$attributes->get('id')}}">

        <input type="text"
               @class([
                    "peer",
                    "block",
                    "min-h-[auto]",
                    "w-full",
                    "rounded",
                    "border",
                    "border-neutral-600",
                    "bg-transparent",
                    "px-3",
                    "py-[0.32rem]",
                    "leading-[1.6]",
                    "outline-none",
                    "transition-all",
                    "duration-200",
                    "ease-linear",
                    "focus:placeholder:opacity-100",
                    "peer-focus:text-primary",
                    "data-[te-input-state-active]:placeholder:opacity-100",
                    "motion-reduce:transition-none",
                    "dark:text-neutral-200",
                    "dark:placeholder:text-neutral-200",
                    "dark:peer-focus:text-primary",
                    "[&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                ])
               x-data x-mask="99:99"
               data-te-toggle="timepicker-just-input"
               {{$attributes->except('id')}} disabled
        />
    </div>
</div>
@pushonce('scripts')
    <script type="module">
        import {
            initTE,
            Input,
            Timepicker
        } from "{{Vite::asset('node_modules/tw-elements/dist/js/tw-elements.es.min.js')}}";

        initTE({Timepicker, Input});

        const inputTime = document.querySelector("#{{$attributes->get('id')}}");
        new Timepicker(inputTime, {
            disablePast: true,
            confirmDateOnSelect: true,
            removeClearBtn: true,
        })
    </script>
@endpushonce
