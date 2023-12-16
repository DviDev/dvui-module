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
        <label
            @class([
                "pointer-events-none max-w-[90%]",
                "origin-[0_0] truncate" => false,
                "leading-[1.5]" => false,
                "mb-0",
                "transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none",
                "text-neutral-700 dark:text-neutral-200",
                "peer-focus:text-primary dark:peer-focus:text-primary",
                "absolute top-0 mb-0" => false,
                "text-red-700 text-bold" => $errors->has($field),
                "relative",
            ]) title="{{$label}} @if($required){{trans('required')}}@endif"
            for="{{$attributes->get('id')}}"
        >
            {{trim($label ?: $attributes->get('label'))}}
            @if($required)
                <i class="fas fa-asterisk text-danger -mt-[2px] absolute top-1.5 -right-2.5"
                   style="font-size: 7px;"></i>
            @endif

        </label>
    @endif
    <div class="relative" data-te-input-wrapper-init>
        <input
            type="{{$attributes->get('type') ?: 'text'}}"
            {{$attributes->class([
                "border peer block min-h-[auto] w-full rounded bg-transparent px-3 py-[0.32rem] leading-[1.5] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0",
                "border-gray-200 dark:border-0 dark:border-gray-700" => !$errors->has($field),
                "border-red-500" => $errors->has($field),
            ])}}
            {{$attributes}}/>
        @error("model.{$attributes->get('id')}")
        <div class="text-red-500">{{$message}}</div>
        @enderror
        @if($validate)
            <x-dvui::error :field="$field"/>
        @endif
    </div>

    {{-- <div
        @class([
            "relative w-full",
            "bg-red-100 border border-red-200 px-1 rounded" => $errors->has($field)
            ])
        data-te-input-wrapper-init
        @if($attributes->has('title'))
            data-te-toggle="tooltip"
        data-te-placement="top"
        data-te-ripple-init
        data-te-ripple-color="light"
        @endif
    >

        <input type="{{$attributes->get('type') ?: 'text'}}"
                {{$attributes->class([
                    "peer block min-h-[auto] w-full rounded",
                    "bg-transparent" => (bool)collect($attributes->get('class'))->first(fn($class) => str($class)->startsWith('bg-')),
                    "px-3 outline-none transition-all duration-200 ease-linear",
                    "motion-reduce:transition-none dark:text-neutral-200",
                    "dark:peer-focus:text-primary",
                    "peer-focus:text-primary",
                    "focus:placeholder:opacity-100" => true,
                    "data-[te-input-state-active]:placeholder:opacity-100" => true,
                    "dark:placeholder:text-neutral-200" => true,
                    "border border-gray-200 dark:border-0 dark:border-gray-700" => !$errors->get('model.'.$attributes->get('id')),
                    "border dark:border-red-500" => ($errors->get('model.'.$attributes->get('id')) || $errors->get($field)),
                    "py-[0.30rem]" => true,
                    "leading-[1.5]" => true,
                ])}}
                {{$attributes}}/>
            @if($label || $attributes->get('label'))
                <label
                    @class([
                        "pointer-events-none max-w-[90%]",
                        "origin-[0_0] truncate" => false,
                        "leading-[1.6]" => false,
                        "mb-0",
                        "text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none",
                        "text-neutral-700 dark:text-neutral-200",
                        "peer-focus:text-primary dark:peer-focus:text-primary",
                        "absolute top-0 mb-0" => false,
                        "text-red-700 text-bold" => $errors->has($field),
                        "relative",
                    ]) title="{{$label}} @if($required){{trans('required')}}@endif"
                    for="{{$attributes->get('id')}}"
                >
                    {{trim($label ?: $attributes->get('label'))}}
                    @if($required)
                        <i class="fas fa-asterisk text-danger -mt-[2px] absolute top-1.5 -right-2.5"
                           style="font-size: 7px;"></i>
                    @endif

                </label>
            @endif
            @error("model.{$attributes->get('id')}")
            <div class="text-red-500">{{$message}}</div>
            @enderror
            @if($validate || $required)
                @error($field)
                <x-dvui::error :field="$field"/>
                @enderror
            @endif
        </div>--}}
</div>

@pushonce('scripts')
    <script type="module">
        import {initTE, Input,} from "{{Vite::asset('node_modules/tw-elements/dist/js/tw-elements.es.min.js')}}";
        initTE({Input});
    </script>
@endpushonce
