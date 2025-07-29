@props([
'horizontal' => false,
])
<ol {{$attributes->class([
    "border-l border-gray-300",
    "md:border-l-0 md:border-t md:flex md:justify-center md:gap-6" => $horizontal,
    ])}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$slot}}
</ol>
