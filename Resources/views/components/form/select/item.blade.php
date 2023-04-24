@props([
    'value',
    'selected' => false
])
<option class="bg-transparent" value="{{$value}}"
    @selected($selected)
>
    {{$slot}}
</option>
