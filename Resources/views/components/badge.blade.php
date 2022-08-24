@props([
    'text'
])
@php
    $classes = str($attributes->get('class'));
    $color_classes = config('dvui.text-colors');
    $text_sizes = config('dvui.text-sizes');
@endphp
<span
    {{$attributes->class([
        'text-xs' => !$classes->contains($text_sizes),
        'bg-blue-600' => !$somethingStartsWith('bg-'),
        'text-white' => !$classes->contains($color_classes),
        'rounded' => !$classes->contains('rounded-full'),
        'py-1'=> !$somethingStartsWith('py-'),
        'px-2.5' => !$somethingStartsWith('px-'),
        'inline-block leading-none text-center whitespace-nowrap align-baseline font-bold'
    ])}}
>
    {{$text}}
</span>
