@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} solid>
    @if($fill)
    @elseif($mini)
    @else
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"/>
    @endif
</x-dvui::icon>
