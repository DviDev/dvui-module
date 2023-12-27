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
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181"/>
    </x-dvui::icon>
    @endif
