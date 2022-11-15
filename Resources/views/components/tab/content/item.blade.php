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
    {{$content}}
</div>
