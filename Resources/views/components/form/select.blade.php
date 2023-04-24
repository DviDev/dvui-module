@props([
    'label'
])
<div>
    <div>
        <label>{{$label}}</label>
    </div>
    <select data-te-select-init
            class="rounded p-2 bg-transparent border mr-2 border-gray-700 dark:border-gray-500"
            {{$attributes}}
    >
        {{$slot}}
    </select>
</div>
