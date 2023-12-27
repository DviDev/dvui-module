@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} solid>
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
    @endif
</x-dvui::icon>
