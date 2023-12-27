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
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/>
    </x-dvui::icon>
@endif
