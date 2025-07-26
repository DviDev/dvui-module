@props([
    'target' => 'offcanvas'
])
<x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
<x-dvui::button {{$attributes}}
                data-bs-toggle="offcanvas" data-bs-target="#{{$target}}" aria-controls="{{$target}}" rounded/>
