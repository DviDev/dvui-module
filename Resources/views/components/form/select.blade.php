@props([
    'label',
    'attr' => null
])
@php
    $array = collect($attr)->except(['id'])->merge($attributes->getAttributes())->all();
    $attributes->setAttributes($array);
@endphp
<div>
    <div>
        <label>{{$attributes->get('label')}}</label>
    </div>
    <select
        data-te-select-init
        data-te-select-filter="true"
        class="rounded p-2 bg-transparent border mr-2 border-gray-700 dark:border-gray-500 dark:bg-transparent"
        {{$attributes}}>
        {{$slot}}
    </select>
</div>
