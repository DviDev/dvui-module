@props([
    'icon' => null
])
<div>
    <div {{
        $attributes
        ->merge(['class' => 'font-bold rounded-lg py-3 px-6 text-sm'])
        ->class([
            'alert  inline-flex items-center w-full alert-dismissible fade show' => isset($dismiss),
            'bg-red-600 text-white' => $red,
            'bg-blue-400 text-gray-200' => $blue,
            'bg-indigo-400 text-gray-200' => $indigo,
            'bg-purple-100 text-purple-600' => $purple,
            'bg-green-500 text-gray-200' => $green,
            'bg-yellow-500 text-white' => $yellow,
            'bg-gray-100 text-gray-700' => $gray
         ])
    }}
         role="alert">
        <div class="mr-3">
            <div class="flex">
                @if($icon)
                <span class="mr-2 pt-1">
                    <i class="fas fa-{{$icon}} fa-1x"></i>
                </span>
                @endif
                @if(isset($content))
                    <span class="pt-1">{{$content}}</span>
                @endif
                <div class="">{{$slot}}</div>
            </div>
            @if(!$dismiss && isset($footer))
                <hr {{$attributes
                    ->class([
                        'mt-2',
                        'border-blue-600 opacity-30' => isset($blue),
                        'border-red-600 opacity-30' => isset($red),
                        'border-green-600 opacity-30' => isset($green),
                        'border-yellow-600 opacity-30' => isset($yellow),
                        'border-purple-600 opacity-30' => isset($purple),
                        'border-indigo-600 opacity-30' => isset($indigo),
                        'border-gray-600 opacity-30' => isset($gray),
                        ])}}>
                    <p class="mt-2 mb-0">
                        {{$footer ?? null}}
                    </p>
            @endif
        </div>
        @if(isset($dismiss))
            <button type="button"
                    {{
                        $attributes
                        ->merge(['class' => 'btn-close w-3 h-3 p-1 ml-auto border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:opacity-75 hover:no-underline'])
                        ->class([
                            'text-red-700 hover:text-red-700' => isset($red),
                            'text-blue-700 hover:text-blue-700' => isset($blue),
                            'text-yellow-700 hover:text-yellow-700' => isset($yellow),
                            'text-indigo-700 hover:text-indigo-700' => isset($indigo),
                            'text-purple-700 hover:text-purple-700' => isset($purple),
                            'text-gray-100 hover:text-gray-700' => isset($gray)
                            ])
                    }} data-bs-dismiss="alert" aria-label="Close">
            </button>
        @endif
    </div>
</div>
