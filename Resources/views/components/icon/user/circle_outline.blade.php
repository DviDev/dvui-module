@props([
    'stroke' => 'currentColor',
    'stroke_width' => 2
])
<x-dvui::icon {{$attributes}} stroke="{{$stroke}}" stroke-width="{{$stroke_width}}">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
</x-dvui::icon>
