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
    {{$slot}}
</ul>
