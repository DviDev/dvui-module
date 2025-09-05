@props([
'solid' => false,
'outline' => false,
'mini' => false,
'micro' => false,
'icon' => null
])
@php
$classes = str($attributes->get('class'));
@endphp
<span
    @if($attributes->has('title')) title="{{$attributes->get('title')}}" @endif
    @class(["flex items-center" => true])>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <svg xmlns="http://www.w3.org/2000/svg"
         {{$attributes->class([
       'h-1 w-1' => $s1 ?? null,
       'h-2 w-2' => $s2 ?? null,
       'h-3 w-3' => $s3 ?? null,
       'h-4 w-4' => ($s4 || $micro) ?? null,
       'h-5.5 w-5' => $s5 || $mini,
       'h-6 w-6' => $s6 || ($withoutSizes() && !$mini && !$micro && !$classes->contains('h-') && !$classes->contains('w-')) ?? null,
       'h-7 w-7' => $s7 ?? null,
       'h-8 w-8' => $s8 ?? null,
       'h-9 w-9' => $s9 ?? null,
       'h-10 w-10' => $s10 ?? null,
    ])->merge([
        'viewBox' => ($solid || $outline) ? '0 0 24 24' : ($micro ? '0 0 16 16' : '0 0 20 20'),
        'fill' => $solid || $mini || $micro ? 'currentColor' : 'none',
    ])}}
    @if($outline)
        {{$attributes->merge([
            'stroke-width' => "1.5",
            'stroke' => "currentColor"
        ])}}
    @endif
>
    {{$slot}}
</svg>
</span>
