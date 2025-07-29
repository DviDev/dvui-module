@props([
'label' => null,
'attr' => null,
])
@php
$array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
$attributes->setAttributes($array);
@endphp
<div class="relative flex flex-wrap items-stretch space-x-2">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <div
        data-te-datepicker-init
        data-te-input-wrapper-init
        class="relative border-0">
        <input type="text" placeholder="{{$attributes->get('label')}} Data"
               class="peer block min-h-[auto] w-full rounded-none border-0 border-none bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
               data-te-datepicker-toggle-ref
               data-te-datepicker-toggle-button-ref/>
        <label
            for="floatingInput"
            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            {{$attributes->get('label')}} Data
        </label>
    </div>
    <div id="timepicker-just-input" class="relative border-0 rounded-none border-none"
         data-te-with-icon="false"
         data-te-timepicker-init
         data-te-input-wrapper-init>
        <input data-te-toggle="timepicker-just-input" type="text" id="{{$attributes->get('id')}}"
               class="peer block min-h-[auto] w-full border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"/>
        <label for="{{$attributes->get('id')}}"
               class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">
            {{$attributes->get('label')}} Tempo
        </label>
    </div>
</div>
