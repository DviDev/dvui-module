@props([
    'disabled' => false,
    'header' => false,
    'no_action' => false,
    'dark' => false,
])
<li @class([
        "font-normal whitespace-nowrap w-full",
        "bg-transparent" => !$header,
        "bg-gray-200" => ($header && !$dark),
        "bg-gray-300" => ($header && $dark),
        "bg-gray-800 text-gray-300" => $dark,
        ])>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <a @class([
        "dropdown-item text-sm py-2 px-4 block",
        "text-gray-500 font-semibold" => ($header && !$dark),
        "text-gray-700 font-semibold" => ($header && $dark),
        "text-gray-700" => $disabled,
        "hover:bg-gray-100" => (!$header && !$disabled && !$no_action && !$dark),
        "hover:bg-gray-700 hover:text-white focus:text-white focus:bg-gray-700 active:bg-blue-600" => $dark,
        "text-gray-400" => $disabled,
        "pointer-events-none" => ($disabled || $header || $no_action),
        "{$attributes->get('class')}"
        ])
       href="#"
    >
        {{$slot}}
    </a>
</li>
