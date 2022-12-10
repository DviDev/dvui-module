@props([
    'id' => null,
])
@php
    $id = $id ?? \Illuminate\Support\Str::random(5);
@endphp
<input
    type="range"
    {{$attributes->class([
        "form-range appearance-none w-full h-6 p-0 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none"
    ])}}
    id="{{$id}}"
    {{$attributes}}
/>
