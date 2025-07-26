@props([
    'active' => false,
    'icon' => false,
    'text' => ''
])
<li {{$attributes->class([
        "stepper-step",
        "stepper-active" => $active
    ])}}
    >
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if($icon)
        <x-dvui::stepper.item.head icon="{{$icon}}" text="{{$text}}"/>
    @endif
    {{$slot}}
</li>
