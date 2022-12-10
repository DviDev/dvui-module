@props([
    'link' => false,
    'rounded' => true,
    'border' => true
])
@if($link)
    <div {{$attributes->class([
        "bg-white",
        "rounded-lg" => $rounded,
        "border border-gray-200" => $border,
        "text-gray-900"
     ])}}
        {{$attributes}}
    >
        {{$slot}}
    </div>
@else
    <ul
        {{$attributes->class([
            "rounded-lg" => $rounded,
            "bg-white",
            "border border-gray-200" => $border,
            "text-gray-900"
        ])}}
        {{$attributes}}
    >
        {{$slot}}
    </ul>
@endif
