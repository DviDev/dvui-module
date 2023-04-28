@props([
    'value',
    'content' => null,
    'selected' => false
])
<option class="bg-transparent" value="{{$value}}" @selected($selected) >
    @if(isset($content))
        {{$content}}
    @endif
    @if($slot)
        {{$slot}}
    @endif
</option>
