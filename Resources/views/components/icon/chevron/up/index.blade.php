@props([
    'fill' => false,
    'mini' => false,
    'micro' => false,
])

@if($fill)
    <x-dvui::icon {{$attributes}} solid>
        <path fill-rule="evenodd"
              d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($mini)
    <x-dvui::icon {{$attributes}} mini>
        <path fill-rule="evenodd"
              d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($micro)
    <x-dvui::icon {{$attributes}} micro>
        <path fill-rule="evenodd"
              d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@else
    <x-dvui::icon {{$attributes}} outline>
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/>
    </x-dvui::icon>
@endif
