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
    @if($icon)
        <x-dvui::stepper.item.head icon="{{$icon}}" text="{{$text}}"/>
    @endif
    {{$slot}}
</li>
