@props([
    'vertical' => false,
])
<ul {{$attributes->class([
    "stepper",
    "stepper-vertical" => $vertical
])}}
    data-mdb-stepper="stepper"
    @if($vertical)
        data-mdb-stepper-type="vertical"
    @endif
>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$slot}}
</ul>
