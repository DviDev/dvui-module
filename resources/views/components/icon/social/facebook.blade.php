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
<i class="fa-brands fa-facebook"></i>
@endif
