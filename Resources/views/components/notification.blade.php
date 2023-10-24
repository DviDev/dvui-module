@props([
    'text' => null,
    'number' => null,
    'top' => false,
    'right' => false,
    'bottom' => false,
    'left' => false,
    'center' => false,
    'middle' => false,
])
@php
    $label = $text ?? $number;
    $classes = str($attributes->get('class'));

    if (!$top && !$right && !$bottom && !$left && !$middle && !$center) {
        $top = true;
        $right = true;
    }
@endphp
<div {{$attributes->class([
        "absolute",
        "inline-block",
        "left-auto" => false,//
        "top-0" => $top,
        "left-0 -translate-x-1/2" => ($top && $left),
        "right-2/4" => ($top && $center),
        "right-0" => $right,
        "bottom-0" => $bottom,
//        "left-0" => $left,
        "top-2/4 bottom-2/4" => $middle,
        "right-auto -translate-x-2/4" => ($middle && $left),
        "right-auto left-2/4 -translate-x-2/4" => ($middle && $center),
        "translate-x-2/4 left-auto" => ($middle && $right),
        "top-auto right-auto -translate-x-2/4 translate-y-1/2" => ($bottom && $left),
        "top-auto right-2/4 left-2/4 -translate-x-2/4 translate-y-1/2" => ($bottom && $center),
        "top-auto left-auto translate-y-1/2" => ($bottom && $right),
//        "translate-x-2/4",
        "-translate-y-1/2",
        "rotate-0",
        "skew-x-0",
        "skew-y-0",
        "scale-x-100",
        "scale-y-100",
        "p-2.5" => !$text,
        "py-1 px-2.5 leading-none" => $text,
        "py-1 px-1.5 leading-none" => $number,
        "text-xs",
        "rounded-full",
        "z-10"
    ])}}>
    {{$label}}
</div>
