@props([
    'fill' => false,
    'mini' => false,
    'micro' => false,
])
@if($fill)
    <x-dvui::icon {{$attributes}} solid>
        <path fill-rule="evenodd"
              d="M19.253 2.292a.75.75 0 0 1 .955.461A28.123 28.123 0 0 1 21.75 12c0 3.266-.547 6.388-1.542 9.247a.75.75 0 1 1-1.416-.494c.94-2.7 1.458-5.654 1.458-8.753s-.519-6.054-1.458-8.754a.75.75 0 0 1 .461-.954Zm-14.227.013a.75.75 0 0 1 .414.976A23.183 23.183 0 0 0 3.75 12c0 3.085.6 6.027 1.69 8.718a.75.75 0 0 1-1.39.563c-1.161-2.867-1.8-6-1.8-9.281 0-3.28.639-6.414 1.8-9.281a.75.75 0 0 1 .976-.414Zm4.275 5.052a1.5 1.5 0 0 1 2.21.803l.716 2.148L13.6 8.246a2.438 2.438 0 0 1 2.978-.892l.213.09a.75.75 0 1 1-.584 1.381l-.214-.09a.937.937 0 0 0-1.145.343l-2.021 3.033 1.084 3.255 1.445-.89a.75.75 0 1 1 .786 1.278l-1.444.889a1.5 1.5 0 0 1-2.21-.803l-.716-2.148-1.374 2.062a2.437 2.437 0 0 1-2.978.892l-.213-.09a.75.75 0 0 1 .584-1.381l.214.09a.938.938 0 0 0 1.145-.344l2.021-3.032-1.084-3.255-1.445.89a.75.75 0 1 1-.786-1.278l1.444-.89Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($mini)
    <x-dvui::icon {{$attributes}} mini>
        <path fill-rule="evenodd"
              d="M15.212 2.079a.75.75 0 0 1 1.006.336A16.932 16.932 0 0 1 18 10c0 2.724-.641 5.3-1.782 7.585a.75.75 0 1 1-1.342-.67A15.432 15.432 0 0 0 16.5 10c0-2.486-.585-4.834-1.624-6.915a.75.75 0 0 1 .336-1.006Zm-10.424 0a.75.75 0 0 1 .336 1.006A15.433 15.433 0 0 0 3.5 10c0 2.486.585 4.834 1.624 6.915a.75.75 0 1 1-1.342.67A16.933 16.933 0 0 1 2 10c0-2.724.641-5.3 1.782-7.585a.75.75 0 0 1 1.006-.336Zm2.285 3.554a1.5 1.5 0 0 1 2.219.677l.856 2.08 1.146-1.77a2.25 2.25 0 0 1 3.137-.65l.235.156a.75.75 0 1 1-.832 1.248l-.235-.156a.75.75 0 0 0-1.045.216l-1.71 2.644 1.251 3.04.739-.492a.75.75 0 1 1 .832 1.248l-.739.493a1.5 1.5 0 0 1-2.219-.677l-.856-2.08-1.146 1.77a2.25 2.25 0 0 1-3.137.65l-.235-.156a.75.75 0 0 1 .832-1.248l.235.157a.75.75 0 0 0 1.045-.217l1.71-2.644-1.251-3.04-.739.492a.75.75 0 0 1-.832-1.248l.739-.493Z"
              clip-rule="evenodd"/>
    </x-dvui::icon>
@elseif($micro)
    <x-dvui::icon {{$attributes}} micro>
        <path
            d="M3.38 3.012a.75.75 0 1 0-1.408-.516A15.97 15.97 0 0 0 1 8c0 1.932.343 3.786.972 5.503a.75.75 0 0 0 1.408-.516A14.47 14.47 0 0 1 2.5 8c0-1.754.311-3.434.88-4.988ZM12.62 3.012a.75.75 0 1 1 1.408-.516A15.97 15.97 0 0 1 15 8a15.97 15.97 0 0 1-.972 5.503.75.75 0 0 1-1.408-.516c.569-1.554.88-3.233.88-4.987s-.311-3.434-.88-4.988ZM6.523 4.785a.75.75 0 0 1 .898.38l.758 1.515.812-.902a2.376 2.376 0 0 1 2.486-.674.75.75 0 1 1-.454 1.429.876.876 0 0 0-.918.249L8.9 8.122l.734 1.468.388-.124a.75.75 0 0 1 .457 1.428l-1 .32a.75.75 0 0 1-.899-.379L7.821 9.32l-.811.901a2.374 2.374 0 0 1-2.489.673.75.75 0 0 1 .458-1.428.874.874 0 0 0 .916-.248L7.1 7.878 6.366 6.41l-.389.124a.75.75 0 1 1-.454-1.43l1-.318Z"/>
    </x-dvui::icon>
@else
    <x-dvui::icon {{$attributes}} outline>
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M4.745 3A23.933 23.933 0 003 12c0 3.183.62 6.22 1.745 9M19.5 3c.967 2.78 1.5 5.817 1.5 9s-.533 6.22-1.5 9M8.25 8.885l1.444-.89a.75.75 0 011.105.402l2.402 7.206a.75.75 0 001.104.401l1.445-.889m-8.25.75l.213.09a1.687 1.687 0 002.062-.617l4.45-6.676a1.688 1.688 0 012.062-.618l.213.09"/>
    </x-dvui::icon>
@endif
