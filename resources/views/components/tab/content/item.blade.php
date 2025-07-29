@props([
'id',
'content' => null,
'active' => false,
])
<div {{$attributes->class([
    "tab-pane fade show",
    'active' => $active
    ])}}
    id="{{$id}}" role="tabpanel" aria-labelledby="{{$id.'-tab'}}" {{$attributes}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$content}}
</div>
