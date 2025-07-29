@props([
'grow' => false,
])
@php
$classes = str($attributes->get('class'));
$occurrence = fn($str) => $classes->explode(' ')->filter(fn($i) => str($i)->startsWith($str) || str($i)->substrCount(" $str"));
@endphp
<div
    {{$attributes->class([
    "inline-block",
    "spinner-border animate-spin" => !$grow,
    "spinner-grow bg-current opacity-0" => $grow,
    "w-8" => $occurrence('w-')->count() == 0,
    "h-8" => $occurrence('h-')->count() == 0,
    "border-4" => !$grow && $classes->substrCount('border-') == 0,
    "rounded-full"
    ])}}
    role="status"
    {{$attributes}}
    >
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <span class="visually-hidden">__('loading')...</span>
</div>
