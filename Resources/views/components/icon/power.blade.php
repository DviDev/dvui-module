@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} :outline="!$fill" :solid="$fill">
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9"/>
    @endif
</x-dvui::icon>
