@props([
    'url' => '#',
    'first' => false,
    'last' => false,
    'primary' => false,
    'label' => null,
    'disabled' => false,
])
@php
    $classes = $attributes->class([
            "block px-6 py-2",
            "rounded-t-lg" => $first,
            "bg-blue-600 text-white" => $primary,
            "border-b border-gray-200" => !$last,
            "hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600" => !$first && !$last,
            "text-gray-400 cursor-default" => $disabled
        ])->get('class');

@endphp

<x-dvui::link
    {{$attributes->merge([
        'aria-current' => true
    ])}}
    :url="$url"
    class="{{$classes}}"
    :text="$label"
    :dark="!$first && !$last"
>
</x-dvui::link>
