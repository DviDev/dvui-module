@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} solid>
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
    @endif
</x-dvui::icon>
