@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} :outline="!$fill" :solid="$fill">
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    @endif
</x-dvui::icon>
