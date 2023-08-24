@props([
    'attr' => null,
    'size' => null,
    'searchable' => false,
    'multiple' => false,
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
        <label for="{{$id}}">
            {{$attributes->get('label')}}
        </label>
    </div>
    <select id="{{$id}}" data-te-select-init
            @if($size) data-te-select-size="{{$size}}" @endif
            data-te-select-filter="{{$searchable ? 'true' : 'false'}}"
            class="rounded p-2 bg-transparent border mr-2 focus:border-gray-300 w-full dark:border-gray-500 dark:bg-transparent leading-[1.6]"
        {{$attributes}}>
        {{$slot}}
    </select>
</div>
