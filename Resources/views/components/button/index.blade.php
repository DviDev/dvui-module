@php
    $classes = str($attributes->get('class'));
@endphp
<button type="{{$type ?? 'button'}}"
        {{$attributes->class([
            'inline-block font-medium leading-tight focus:outline-none focus:ring-0 transition duration-150 ease-in-out',
            'shadow-md hover:shadow-lg focus:shadow-lg active:shadow-lg' => $shadow,
            'active:bg-blue-800 active:text-white' => $primary,
            'active:bg-purple-800 active:text-white' => $secondary,
            'active:bg-green-700 active:text-white' => $success,
            'active:bg-red-800 active:text-white' => $danger,
            'active:bg-yellow-700 active:text-white' => $warning,
            'hover:bg-blue-500 active:bg-blue-600 active:text-white' => $info,
            'bg-blue-400' => ($info && !$border),
            'hover:bg-gray-900 active:bg-gray-900 active:text-white' => $dark,
            'hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 active:text-white' => $light,
            'hover:bg-blue-700' => $primary && !$border,
            'bg-purple-600 hover:bg-purple-700 active:text-white active:bg-purple-800' => ($secondary && !$border),
            'hover:bg-green-600 focus:bg-green-600 active:bg-green-700' => ($success && !$border),
            'hover:bg-red-700 focus:bg-red-700 active:bg-red-800' => ($danger && !$border),
            'bg-orange-500 hover:bg-yellow-600 focus:bg-yellow-600 active:bg-yellow-700' => ($warning && !$border),

            'border-r-0' => $classes->contains('rounded-l'),
            'border-l-0' => $classes->contains('rounded-r'),
            'hover:bg-black hover:bg-opacity-5 border-2'  => $border,
            'border-'. $borderColor() .'-600' => ($border && !$info),
            'border-blue-500' => ($border && $info),
            'text-'.$borderColor() .'-600' => ($border && !$link),
            'text-gray-400' => (($link && !$pill) || ($link && !$border)),
            'border-gray-200 text-gray-800' => ($border && $light),
            'text-gray-800' => ($border && $link),
            'hover:text-gray-600 hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200' => $link,
            'bg-transparent' => ($link && !$pill),
            'rounded' => $rounded,
            'rounded-full' => $pill,
            'text-white' => (($label && !$border && !$pill && !$link) || ($pill && !$border && !$link && !$light)),
            'bg-gray-50 text-gray-200' => ($link && $pill),
            'border-b' => ($link && !$rounded && !$border && !$shadow),
            'border-b-2' => ($link && $rounded && !$shadow),
            'bg-blue-600' => (!$border && $primary),
            'bg-green-500' => (!$border && $success),
            'bg-red-600' => (!$border && $danger),
            'bg-gray-300 text-white' => (!$border && $light),
            'bg-gray-500 text-gray-100' => (!$border && $dark),
            'px-2 py-1 text-xs' => ($xs && !$sm && !$md && !$lg),
            'px-3 py-1.5 text-sm' => (!$xs && $sm && !$md && !$lg),
            'px-6 py-2.5 text-xs' => ((!$xs && !$sm && !$md && !$lg) || ($md && !$xs && !$sm && !$lg)),
            'px-7 py-3 text-lg' => ($lg && !$xs && !$md),
            'pointer-events-none opacity-60' => $disable,
            'w-full' => $full
        ])}}
        @if($ripple)
            data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        {{--        {{$attributes->merge(['data-mdb-ripple'=> "true", 'data-mdb-ripple-color' => "light"])}}--}}
        @endif
        @if($title)
            title="{{$title}}"
    @endif
>
    @if(!empty($icon))
        <i class="fas {{$icon}}"></i>
        @if(!empty($label) or !empty($title))
            <span class="ml-1">
                {{$label ?? $title}}
            </span>
        @endif
    @else
        {{--        <span class="{{$text_color ?? null}}">--}}
        {{$label}}
        {{--        </span>--}}
    @endif
    @if(!empty($slot))
        {{$slot ?? null}}
    @endif
</button>
