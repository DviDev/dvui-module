@props([
'label' => null,
'title' => null,
'description' => '',
])
@aware([
'horizontal' => false
])
<li>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    @if($label)
    <div {{$attributes->class([
        "flex flex-start items-center",
        "pt-3" => !$horizontal,
        "md:block pt-2 md:pt-0" => $horizontal
        ])}}>
        <div {{$attributes->class([
            "bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3",
            "md:ml-0 md:mr-0 md:-mt-1" => $horizontal,
            ])}}>
        </div>
        <p {{$attributes->class([
            "text-gray-500 text-sm",
            "mt-2" => $horizontal
            ])}}>{{$label}}</p>
    </div>
    @endif
    {{-- header --}}
    @if($title || $description)
    <div {{$attributes->class([
        "mt-0.5",
        "mb-6 ml-4" => !$horizontal,
        "pb-5" => !$horizontal,
        ])}}>
        <h4 class="text-gray-800 font-semibold text-xl mb-1.5">
            {{$title}}
        </h4>
        <p class="text-gray-500 mb-3">{{$description}}</p>
    </div>
    @endif
    {{$slot}}
</li>
