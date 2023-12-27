@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} solid>
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
    @endif
</x-dvui::icon>
