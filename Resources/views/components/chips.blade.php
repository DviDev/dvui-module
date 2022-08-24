@props([
    'img_url',
    'label'
])
@php
    $classes = 'rounded-full text-gray-500 font-semibold text-sm flex align-center cursor-pointer active:bg-gray-300 transition duration-300 ease w-max ';
    $classes .= !$somethingStartsWith('border') ? 'bg-gray-200' : '';
    $classes .= str($attributes->get('class'))->explode(' ')->filter(fn($c) => !in_array($c, ['w-9', 'h-9', 'h-11', 'w-11', 'w-14', 'h-14']))->implode(' ');
@endphp
<span class="{{$classes}}">
    @php
        $img_classes = 'rounded-full max-w-none ';
        $img_classes .= $somethingStartsWith('border') ? 'border ' : '';
        $img_classes .= !$somethingStartsWith('w-') ? 'w-9 ' : $onlyClassesStartWith('w-').' ';
        $img_classes .= !$somethingStartsWith('h-') ? 'h-9 ' : $onlyClassesStartWith('h-').' ';
    @endphp
    <img class="{{$img_classes}}" alt="{{$label}}" src="{{$img_url}}"/>
    <span class="flex items-center px-3 py-2">
      {{$label}}
    </span>
    <button class="bg-transparent hover focus:outline-none">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
           class="w-3 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 352 512">
        <path fill="currentColor"
              d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
        </path>
      </svg>
    </button>
</span>
