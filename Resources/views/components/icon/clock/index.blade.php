@props([
    'fill' => false,
    'mini' => false,
    'micro' => false,
])
@if($fill)
    <x-dvui::icon {{$attributes}} solid>
        <path fill-rule="evenodd"
              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($mini)
    <x-dvui::icon {{$attributes}} mini>
        <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Zm7.75-4.25a.75.75 0 0 0-1.5 0V8c0 .414.336.75.75.75h3.25a.75.75 0 0 0 0-1.5h-2.5v-3.5Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($micro)
    <x-dvui::icon {{$attributes}} micro>
        <path fill-rule="evenodd"
              d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Zm7.75-4.25a.75.75 0 0 0-1.5 0V8c0 .414.336.75.75.75h3.25a.75.75 0 0 0 0-1.5h-2.5v-3.5Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@else
    <x-dvui::icon {{$attributes}} outline>
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
    </x-dvui::icon>
@endif
