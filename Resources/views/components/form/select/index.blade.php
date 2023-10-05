@props([
    'attr' => null,
    'size' => null,
    'searchable' => false,
    'multiple' => false,
    'required' => false
])
@php
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes());
    if ($label) {
        $array->put('label', $label);
    }
    $attributes->setAttributes($array->filter()->all());
    $id = 'comp_'.random_int(random_int(1,5), random_int(5,9));
@endphp
<div class="w-full">
    <div>
        <label for="{{$id}}" class=" relative">
            {{$attributes->get('label')}}
            @if($required)
                <i class="fas fa-asterisk text-danger -mt-[2px] absolute top-1.5 -right-2.5" style="font-size: 7px;"></i>
            @endif
        </label>
    </div>
    <select data-te-select-init
            @if($size) data-te-select-size="{{$size}}" @endif
            data-te-select-filter="{{$searchable ? 'true' : 'false'}}"
            {{$attributes->class([
                "rounded p-2 border border-gray-200 mr-2 focus:border-gray-300 w-full dark:border-gray-500 dark:bg-transparent py-[0.30rem] ",
                "bg-transparent" => (bool)collect($attributes->get('class'))->first(fn($class) => str($class)->startsWith('bg-')),
                "bg-white"
                ])}}
        {{$attributes}}>
        {{$slot}}
    </select>
</div>