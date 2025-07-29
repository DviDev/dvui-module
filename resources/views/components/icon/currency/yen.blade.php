@props([
'fill' => false,
'mini' => false,
'micro' => false,
])
@if($fill)
<x-dvui::icon {{$attributes}} solid>
    <path fill-rule="evenodd"
          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM9.624 7.084a.75.75 0 0 0-1.248.832l2.223 3.334H9a.75.75 0 0 0 0 1.5h2.25v1.5H9a.75.75 0 0 0 0 1.5h2.25v1.5a.75.75 0 0 0 1.5 0v-1.5H15a.75.75 0 0 0 0-1.5h-2.25v-1.5H15a.75.75 0 0 0 0-1.5h-1.599l2.223-3.334a.75.75 0 1 0-1.248-.832L12 10.648 9.624 7.084Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@elseif($mini)
<x-dvui::icon {{$attributes}} mini>
    <path fill-rule="evenodd"
          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM7.346 5.294a.75.75 0 0 0-1.192.912L9.056 10H6.75a.75.75 0 0 0 0 1.5h2.5v1h-2.5a.75.75 0 0 0 0 1.5h2.5v1.25a.75.75 0 0 0 1.5 0V14h2.5a.75.75 0 1 0 0-1.5h-2.5v-1h2.5a.75.75 0 1 0 0-1.5h-2.306l2.902-3.794a.75.75 0 1 0-1.192-.912L10 8.765l-2.654-3.47Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@elseif($micro)
<x-dvui::icon {{$attributes}} micro>
    <path fill-rule="evenodd"
          d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM5.6 3.55a.75.75 0 1 0-1.2.9L7.063 8H4.75a.75.75 0 0 0 0 1.5h2.5v1h-2.5a.75.75 0 0 0 0 1.5h2.5v.5a.75.75 0 0 0 1.5 0V12h2.5a.75.75 0 0 0 0-1.5h-2.5v-1h2.5a.75.75 0 0 0 0-1.5H8.938L11.6 4.45a.75.75 0 1 0-1.2-.9L8 6.75l-2.4-3.2Z"
          clip-rule="evenodd"/>
</x-dvui::icon>
@else
<x-dvui::icon {{$attributes}} outline>
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M9 7.5l3 4.5m0 0l3-4.5M12 12v5.25M15 12H9m6 3H9m12-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
</x-dvui::icon>
@endif
