@props([
    'target' => 'offcanvas'
])
<x-dvui::button {{$attributes}}
                data-bs-toggle="offcanvas" data-bs-target="#{{$target}}" aria-controls="{{$target}}"
                rounded/>
