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
    $id = random_int(random_int(1,5), random_int(5,9));
@endphp
<div class="w-full">
    <label for="{{$id}}">
        {{$attributes->get('label')}}
    </label>
    <select id="{{$id}}" data-te-select-init
            @if($size) data-te-select-size="{{$size}}" @endif
            data-te-select-filter="{{$searchable ? 'true' : 'false'}}"
        {{--        class="rounded p-2 bg-transparent border mr-2 border-neutral-700 w-full dark:border-gray-500 dark:bg-transparent"--}}
        {{$attributes}}>
        {{$slot}}
    </select>
</div>
