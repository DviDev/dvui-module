@props([
    'content',
    'value' => null,
    'selected' => false
])
<option class="bg-transparent" value="{{$value ?? $content}}" @selected($selected) >
    @if(isset($content))
        {{$content}}
    @endif
    @if($slot)
        {{$slot}}
    @endif
</option>
