@props([
    'fill' => false,
    'mini' => false,
    'micro' => false,
])
@if($fill)
    <x-dvui::icon {{$attributes}} :solid="$fill">
        <path fill-rule="evenodd"
              d="M3.97 3.97a.75.75 0 011.06 0l13.72 13.72V8.25a.75.75 0 011.5 0V19.5a.75.75 0 01-.75.75H8.25a.75.75 0 010-1.5h9.44L3.97 5.03a.75.75 0 010-1.06z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($mini)
    <x-dvui::icon {{$attributes}} :outline="!$fill">
        <path
            d="M6.28 5.22a.75.75 0 00-1.06 1.06l7.22 7.22H6.75a.75.75 0 000 1.5h7.5a.747.747 0 00.75-.75v-7.5a.75.75 0 00-1.5 0v5.69L6.28 5.22z"/>
    </x-dvui::icon>
@elseif($micro)
    <x-dvui::icon {{$attributes}} :micro="$micro">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
            <path fill-rule="evenodd"
                  d="M4.22 4.22a.75.75 0 0 0 0 1.06l5.22 5.22H5.75a.75.75 0 0 0 0 1.5h5.5a.75.75 0 0 0 .75-.75v-5.5a.75.75 0 0 0-1.5 0v3.69L5.28 4.22a.75.75 0 0 0-1.06 0Z"
                  clip-rule="evenodd"/>
        </svg>

    </x-dvui::icon>
@else
    <x-dvui::icon {{$attributes}} :outline="!$fill">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25"/>
    </x-dvui::icon>
@endif
