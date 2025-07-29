@props([
'fill' => false,
'mini' => false,
'micro' => false,
])
@if($fill)
<x-dvui::icon {{$attributes}} solid>
    <path fill-rule="evenodd"
          d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@elseif($mini)
<x-dvui::icon {{$attributes}} mini>
    <path fill-rule="evenodd"
          d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@elseif($micro)
<x-dvui::icon {{$attributes}} micro>
    <path fill-rule="evenodd"
          d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@else
<x-dvui::icon {{$attributes}} outline>
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
</x-dvui::icon>
@endif
