@props([
    'stroke' => 'currentColor',
    'stroke_width' => 2
])
<x-dvui::icon {{$attributes}} stroke="{{$stroke}}" stroke-width="{{$stroke_width}}">
    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
</x-dvui::icon>
