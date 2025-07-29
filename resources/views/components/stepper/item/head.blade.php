@props([
'icon' => false,
'text' => ''
])
<div class="stepper-head">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <span class="stepper-head-icon"> {{$icon}} </span>
    <span class="stepper-head-text"> {{$text}} </span>
</div>
