@php
    $classes = str($attributes->get('class'));
@endphp
<a
    href="{{$url}}"
    aria-current="page"
    {{$attributes->class([
        'focus:outline-none focus:ring-0 transition duration-150 ease-in-out',
        'px-6' => !$classes->contains('px-'),
        'py-2.5' => !$classes->startsWith('py-'),
        'bg-blue-600' => !$classes->startsWith('bg-'),
        'text-white' => !$classes->startsWith('text-'),
        'font-medium' => !$classes->startsWith('font-'),
        'text-xs' => !$classes->startsWith('text-'),
        'leading-tight' => !$classes->startsWith('leading-'),
        'hover:bg-blue-700' => !$classes->startsWith('hover:bg-'),
        'focus:bg-blue-700' => !$classes->startsWith('focus:bg-'),
        'active:bg-blue-800' => !$classes->startsWith('active:bg-'),
    ])}}>
    {{$text}}
</a>
