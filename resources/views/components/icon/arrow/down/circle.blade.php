@props([
'fill' => false,
'mini' => false,
'micro' => false,
])
@if($fill)
<x-dvui::icon {{$attributes}} solid>
    <path fill-rule="evenodd"
          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-.53 14.03a.75.75 0 001.06 0l3-3a.75.75 0 10-1.06-1.06l-1.72 1.72V8.25a.75.75 0 00-1.5 0v5.69l-1.72-1.72a.75.75 0 00-1.06 1.06l3 3z"
          clip-rule="evenodd"/>

</x-dvui::icon>
@elseif($mini)
<x-dvui::icon {{$attributes}} mini>
    <path fill-rule="evenodd"
          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v4.59L7.3 9.24a.75.75 0 00-1.1 1.02l3.25 3.5a.75.75 0 001.1 0l3.25-3.5a.75.75 0 10-1.1-1.02l-1.95 2.1V6.75z"
          clip-rule="evenodd"/>

</x-dvui::icon>
@elseif($micro)
<x-dvui::icon {{$attributes}} micro>
    <path fill-rule="evenodd"
          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25a.75.75 0 0 0-1.5 0v4.69L6.03 8.22a.75.75 0 0 0-1.06 1.06l2.5 2.5a.75.75 0 0 0 1.06 0l2.5-2.5a.75.75 0 1 0-1.06-1.06L8.75 9.44V4.75Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@else
<x-dvui::icon {{$attributes}} outline>
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>

</x-dvui::icon>
@endif
