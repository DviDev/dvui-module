@props([
    'content',
    'value' => null,
    'selected' => false,
    'icon' => null
])
<option class="bg-transparent"
        value="{{$value ?? $content}}" @selected($selected)
{{--        data-te-select-icon="{{$icon ?  "<x-dvui::icon.".$icon."/>" : ''}}"--}}
>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if(isset($content))
        {!! $content !!}
    @endif
    @if($slot)
        {!! $slot !!}
    @endif
</option>
