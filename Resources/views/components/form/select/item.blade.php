@props([
    'content',
    'value' => null,
    'selected' => false,
    'icon' => null
])
<option class="bg-transparent"
        value="{{$value ?? $content}}" @selected($selected)
        @if($icon)
            data-te-select-icon="<x-dvui::icon.{{$icon}}/>"
    @endif
>
    @if(isset($content))
        {!! $content !!}
    @endif
    @if($slot)
        {!! $slot !!}
    @endif
</option>
