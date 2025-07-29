@props([
'fill' => true,
'mini' => true,
'micro' => true,
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
</x-dvui::icon>
@endif

<x-dvui::icon {{$attributes}} fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
</x-dvui::icon>
