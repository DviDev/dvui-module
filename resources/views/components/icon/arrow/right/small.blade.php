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
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
</x-dvui::icon>
@endif
