@props([
    'attr' => null,
])
@php
    $array = [];
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())
        ->put('label', $label)
        ->filter()
        ->all();
    $attributes->setAttributes($array);
@endphp
<div>
    <div>
        <label>{{$attributes->get('label')}}</label>
    </div>
    <select
        data-te-select-init
        data-te-select-filter="true"
        class="rounded p-2 bg-transparent border mr-2 border-neutral-700 w-full dark:border-gray-500 dark:bg-transparent"
        {{$attributes}}>
        {{$slot}}
    </select>
</div>
