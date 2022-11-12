@props([
    'disabled' => false,
    'header' => false,
    "no_action" => false,
])
<li @class([
        "font-normal whitespace-nowrap w-full",
        "bg-transparent" => !$header,
        "bg-gray-200" => $header,
        ])>
    <a @class([
        "dropdown-item text-sm py-2 px-4 block",
        "text-gray-700" => $disabled,
        "hover:bg-gray-100" => (!$header && !$disabled && !$no_action),
        "text-gray-400" => $disabled,
        "pointer-events-none" => ($disabled || $header || $no_action),
        "text-gray-500 font-semibold" => $header,
        "{$attributes->get('class')}"
        ])
       href="#"
    >
        {{$slot}}
    </a>
</li>
