@props(['confirm_msg'])
@php

$classes = str($attributes->get('class'));
$confirm = $confirm ?? isset($confirm_type) || isset($confirm_msg) || isset($confirm_label);
$confirmation = $confirm;
@endphp
<div>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if($confirmation)
    <x-lte::modal id="{{$id}}"
                  wire:click.prevent="{{$action}}" :msg="$confirm_msg ?? $title"
                  :info="$confirm_type === 'info' || $info"
                  :danger="$confirm_type === 'danger' || $danger"/>
    @endif
    <button
        type="{{$type ?? 'button'}}"
        {{$attributes->class([
        'inline-block font-medium transition duration-150 ease-in-out',
        'focus:outline-none focus:ring-0' => false,
        'shadow-md hover:shadow-lg focus:shadow-lg active:shadow-lg' => $shadow,
        'active:bg-blue-800 active:text-white text-white' => ($primary && !$noColor),
        'active:bg-purple-800 active:text-white' => $secondary,
        'active:bg-green-700 active:text-white' => $success,
        'active:bg-red-800 active:text-white' => $danger,
        'active:bg-yellow-700 active:text-white' => ($warning),
        'active:bg-yellow-600 active:text-white' => ($attention),
        'hover:bg-blue-500 active:bg-blue-600 active:text-white' => $info,
        'bg-blue-400' => ($info && !$border),
        'hover:bg-gray-900 active:bg-gray-900 active:text-white' => $dark,
        'hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 active:text-white' => $light,
        'hover:bg-blue-700' => ($primary && !$noColor) && !$border,
        'bg-purple-600 hover:bg-purple-700 active:text-white active:bg-purple-800' => ($secondary && !$border),
        'hover:bg-green-700 focus:bg-green-700 active:bg-green-700' => ($success && !$border),
        'hover:bg-red-700 focus:bg-red-700 active:bg-red-800' => ($danger && !$border),
        'bg-orange-500 hover:bg-yellow-600 focus:bg-yellow-600 active:bg-yellow-700' => ($warning && !$border),
        'bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-500 active:bg-yellow-600' => ($attention && !$border),

        'border-r-0' => $classes->contains('rounded-l'),
        'border-l-0' => $classes->contains('rounded-r'),
        'border-0' => !$border,
        'hover:bg-black hover:bg-opacity-5 border' => $border,
        'border-'. $borderColor() .'-600' => ($border && !$info && !$success),
        'border-'. $borderColor() .'-400' => ($border && $success),
        'border-blue-500' => ($border && $info),
        'text-'.$borderColor() .'-600' => ($border && !$link),
        'text-gray-400' => (($link && !$pill) || ($link && !$border)),
        'border-gray-200 text-gray-800' => ($border && $light),
        'text-gray-800' => ($border && $link),
        'hover:text-gray-600 hover:bg-gray-100 focus:bg-gray-100 active:bg-gray-200' => $link,
        'bg-transparent' => ($link && !$pill),
        'rounded' => $rounded,
        'rounded-full' => $pill,
        'text-white' => ((!$border && !$pill && !$link && !$noColor) || ($pill && !$border && !$link && !$light &&
        !$noColor)),
        'bg-gray-50 text-gray-200' => ($link && $pill),
        'border-b' => ($link && !$rounded && !$border && !$shadow),
        'border-b-2' => false, //($link && $rounded && !$shadow),
        'bg-blue-600' => (!$border && ($primary && !$noColor)),
        'bg-green-600' => (!$border && $success),
        'bg-red-600' => (!$border && $danger),
        'bg-gray-300 text-white' => (!$border && $light && !$noColor),
        'bg-gray-500 text-gray-100' => (!$border && $dark),
        //xs
        "px-2" => ($xs && !$sm && !$md && !$lg) && $classes->substrCount('px-') == 0,
        "py-1" => ($xs && !$sm && !$md && !$lg) && $classes->substrCount('py-') == 0,
        "text-xs" => ($xs && !$sm && !$md && !$lg),
        //sm
        'px-3 py-1.5 text-sm' => ($sm && !$xs && !$md && !$lg),
        //md
        'px-4 py-2 text-md' => (($md && !$xs && !$sm && !$lg) || (!$xs && !$sm && !$md && !$lg)),
        //lg
        'px-5 py-2.5 text-lg' => ($lg && !$xs && !$md),
        //xlg
        'px-8 py-3 text-2xl' => ($xlg && !$lg && !$md && !$xs),
        'pointer-events-none opacity-60' => $disabled,
        'w-full' => $full,
        ])}}

        @if($popover)
        data-te-toggle="popover"
        data-te-trigger="hover"
        @if($pop_title)
        data-te-title="{{$pop_title}}"
        @endif
        data-te-content="{{$popover}}"
        data-te-ripple-init
        data-te-ripple-color="light"
        @endif

        @if($ripple)
        data-mdb-ripple="true" data-mdb-ripple-color="light"
        @endif
        @if($title)
        title="{{$title}}"
        @endif

        @if($confirm)
        data-toggle="modal" data-target="#modal-{{$id}}"
        @endif

        {{$attributes}}
        >
        @if(!empty($icon))
        <i class="{{$icon}}"></i>
        @if(!empty($label) or !empty($title))
        <span class="ml-1">
                {{$label ?? $title}}
            </span>
        @endif
        @elseif($label)
        <span @if(is_object($label))
              {{$label->attributes}}
                @endif >{{$label}}</span>
        @endif
        @if(!empty($slot))
        {{$slot ?? null}}
        @endif
    </button>
</div>
