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
    'btn' => false,
    'group_item' => false
])
@php
    $classes = str($attributes->get('class'));
@endphp
<a
    href="{{$url}}"
    aria-current="page"
    {{$attributes->class([
        'my-auto',
        'text-blue-600 hover:text-blue-700' => !$btn && ($primary || !$hasColor()),
        'text-purple-600 hover:text-purple-700' => $secondary,
        'text-green-500 hover:text-green-600' => $success,
        'text-red-600 hover:text-red-700' => $danger,
        'bg-red-600 text-white hover:text-gray-200' => $btn && $danger,
        'text-yellow-500 hover:text-yellow-600' => $warning,
        'text-blue-400 hover:text-blue-500' => $info,
        'text-gray-200 hover:text-gray-300' => $light,
        'text-gray-800 hover:text-gray-900' => $dark,
        'text-white hover:text-gray-100 dark:text-gray-500' => $white,
        'rounded items-center' => $btn,
        'bg-blue-600 text-white' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('bg-')),
        'hover:bg-blue-700' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('hover:bg-')),
        'focus:bg-blue-700' => $btn && $primary || ($btn && !$hasColor() && !$classes->startsWith('focus:bg-')),
        'px-6' => $btn && $lg && !$classes->contains('px-'),
        'px-2 py-1' => $btn && $sm && !$classes->contains(['px-', 'py-']),
        'py-2.5' => $btn && ($md || (!$xs && !$sm && !$lg)) && !$classes->startsWith('py-'),
        'px-2.5' => $btn && ($md || (!$xs && !$sm && !$lg)) && !$classes->startsWith('px-'),
        'py-1' => $btn && ($xs || (!$sm && !$md && !$lg)) && !$classes->startsWith('py-'),
        'px-1' => $btn && ($xs || (!$sm && !$md && !$lg)) && !$classes->startsWith('px-'),
        'font-medium' => !$classes->startsWith('font-'),
        'text-xs' => $xs,
        'text-sm' => $sm,
        'text-md' => $md || !$hasSize(),
        'text-lg' => $lg,
        'text-xl' => $xlg,
    ])}}
>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if($text)
        {{$text}}
    @else
        {{$slot}}
    @endif
</a>
