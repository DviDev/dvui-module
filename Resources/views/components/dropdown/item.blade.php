@props([
    'disabled' => false
])
<li class="font-normal whitespace-nowrap bg-transparent w-full">
    <a @class([
        "dropdown-item text-sm py-2 px-4 block",
        "text-gray-700 hover:bg-gray-100" => $disabled,
        "text-gray-400 pointer-events-none" => $disabled
        ])
       href="#" {{$attributes}}>
        {{$slot}}
    </a>
</li>
