@props([
    'attr' => null
])
@php
    $items = collect($attr)->merge($attributes->getAttributes());
    if (!$items->has('id')) {
        $items->put('id', 'comp_date_'.random_int(900, 1000));
    }
    $array = $items ->all();

    $attributes->setAttributes($array);
@endphp
<div @class(["w-full flex flex-col"])>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if($attributes->has('label'))
        <label>{{$attributes->get('label')}}</label>
    @endif
    {{--<label
        for="{{$attributes->get('id')}}"
        @class([
            "pointer-events-none left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary",
            "absolute top-0" => false
        ])>
        {{$attributes->get('label')}}
    </label>--}}
    {{--<div class="relative"
         id="{{$attributes->get('id')}}"
         --}}{{--         data-te-datepicker-init--}}{{--
         data-te-input-wrapper-init
         data-te-format="yyyy-mm-dd"
    >
        <input
            id="{{$attributes->get('id')}}"
            type="text"
            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
            placeholder="Select a date"
            data-te-datepicker-toggle-ref
            data-te-datepicker-toggle-button-ref
            x-data x-mask="9999-99-99"
        />
        <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            date
        </label>
    </div>--}}
    @dump('wip')
    {{--<input type="date" {{$attributes}}>--}}
</div>

{{--@push('scripts')
    <script type="module">
        import {
            initTE,
            Datepicker,
            Input
        } from "{{Vite::asset('node_modules/tw-elements/dist/js/tw-elements.es.min.js')}}"

        initTE({Datepicker, Input});

        const datepickerDisablePast = document.getElementById('{{$attributes->get('id')}}');
        new Datepicker(datepickerDisablePast, {
            disablePast: true,
            confirmDateOnSelect: true,
            removeClearBtn: true,
        })


    </script>
@endpush--}}
