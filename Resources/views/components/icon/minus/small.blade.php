@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} solid>
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"/>
    @endif
</x-dvui::icon>
