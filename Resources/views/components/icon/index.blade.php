@props([
    'solid' => false,
    'outline' => false,
    's1' => null,
    's2' => null,
    's3' => null,
    's4' => null,
    's5' => null,
    's6' => null,
    's7' => null,
    's8' => null,
    's9' => null,
    's10' => null,
    ])
@php
    $classes = str($attributes->get('class'));
@endphp
<svg xmlns="http://www.w3.org/2000/svg"
    {{$attributes->class([
       'h-1 w-1' => $s1 ?? null,
       'h-2 w-2' => $s2 ?? null,
       'h-3 w-3' => $s3 ?? null,
       'h-4 w-4' => $s4 ?? null,
       'h-5 w-5' => $s5 && (!$classes->contains('h-') && !$classes->contains('w-')),
       'h-6 w-6' => $s6 ?? null,
       'h-7 w-7' => $s7 ?? null,
       'h-8 w-8' => $s8 ?? null,
       'h-9 w-9' => $s9 ?? null,
       'h-10 w-10' => $s10 ?? null,
    ])->merge([
        'viewBox' => ($solid || $outline) ? '0 0 24 24' : '0 0 20 20',
        'fill' => $solid ? 'currentColor' : 'none',
        'stroke-width' => "1.5",
        'stroke' => "currentColor"
])}}>
    {{$slot}}
</svg>
