@props([
    'url' => '#',
    'text' => '',
    'primary' => false,
    'secondary' => false,
    'success' => false,
    'danger' => false,
    'warning' => false,
    'attention' => false,
    'info' => false,
    'light' => false,
    'dark' => false,
    'link' => false,
    'white' => false,
    'xs' => false,
    'sm' => false,
    'md' => false,
    'lg' => false,
    'xlg' => false,
    'btn' => false
])
@php
    $classes = str($attributes->get('class'));
@endphp
<a
    href="{{$url}}"
    aria-current="page"
    {{$attributes->class([
        'transition duration-300 ease-in-out flex',

        'text-blue-600 hover:text-blue-700' =>  $primary || !$hasColor(),
        'text-purple-600 hover:text-purple-700' => $secondary,
        'text-green-500 hover:text-green-600' => $success,
        'text-red-600 hover:text-red-700' => $danger,
        'text-yellow-500 hover:text-yellow-600' => $warning,
        'text-blue-400 hover:text-blue-500' => $info,
        'text-gray-200 hover:text-gray-300' => $light,
        'text-gray-800 hover:text-gray-900' => $dark,
        'text-white hover:text-gray-100' => $white,
        'bg-blue-600' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('bg-')),
        'hover:bg-blue-700' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('hover:bg-')),
        'focus:bg-blue-700' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('focus:bg-')),
        'px-6' => $btn && !$classes->contains('px-'),
        'py-2.5' => $btn && !$classes->startsWith('py-'),

        'font-medium' => !$classes->startsWith('font-'),
        'text-xs' => $xs,
        'text-sm' => $sm,
        'text-md' => $md || !$hasSize(),
        'text-lg' => $lg,
        'text-xl' => $xlg,
    ])}}
>
    {{$text}}
</a>
