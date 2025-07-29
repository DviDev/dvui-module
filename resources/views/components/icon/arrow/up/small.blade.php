@props([
'fill' => false,
'mini' => false,
'micro' => false,
])
@if($fill)
<x-dvui::icon {{$attributes}} solid>
</x-dvui::icon>
@elseif($mini)
<x-dvui::icon {{$attributes}} mini>
</x-dvui::icon>
@elseif($micro)
<x-dvui::icon {{$attributes}} micro>
</x-dvui::icon>
@else
<x-dvui::icon {{$attributes}} outline>
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"/>
</x-dvui::icon>
@endif
