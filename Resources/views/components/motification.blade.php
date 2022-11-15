@props([
    'label' => null
])
<div {{$attributes->class([
        "absolute",
        "inline-block",
        "bottom-auto",
        "left-auto",
        "translate-x-2/4",
        "-translate-y-1/2",
        "rotate-0",
        "skew-x-0",
        "skew-y-0",
        "scale-x-100",
        "scale-y-100",
        "p-2.5" => !$label,
        "py-1 px-2.5 leading-none" => $label,
        "text-xs",
        "rounded-full",
        "z-10"
    ])}}>
    {{$label}}
</div>
