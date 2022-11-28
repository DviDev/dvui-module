@props([
    'fill' => false,
    'mini' => false,
])
<x-dvui::icon {{$attributes}} :outline="!$fill" :solid="$fill">
    @if($fill)
        <path fill-rule="evenodd"
              d="M11.47 2.47a.75.75 0 011.06 0l3.75 3.75a.75.75 0 01-1.06 1.06l-2.47-2.47V21a.75.75 0 01-1.5 0V4.81L8.78 7.28a.75.75 0 01-1.06-1.06l3.75-3.75z"
              clip-rule="evenodd"/>

    @elseif($mini)
        <path fill-rule="evenodd"
              d="M10 18a.75.75 0 01-.75-.75V4.66L7.3 6.76a.75.75 0 11-1.1-1.02l3.25-3.5a.75.75 0 011.1 0l3.25 3.5a.75.75 0 01-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0110 18z"
              clip-rule="evenodd"/>

    @else
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18"/>

    @endif
</x-dvui::icon>
