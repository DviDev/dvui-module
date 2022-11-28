@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} :outline="!$fill" :solid="$fill">
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5"/>
    @endif
</x-dvui::icon>
