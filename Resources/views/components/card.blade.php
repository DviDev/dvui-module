<div {{$attributes->class([
    'max-h-full flex flex-col divide-y border overflow-auto',
    'bg-white' => !$onlyClassesStartWith('bg-'),
    'rounded-md' => !$onlyClassesStartWith('border'),
    ])}}>
    {{--    header--}}
    @if(isset($heading))
        <div {{ $heading->attributes->class([$headerClasses($heading)]) }}>
            <span {{ $heading->attributes }}>{{ $heading }}</span>
        </div>
    @elseif(isset($title))
        <div class="{{$headerClasses()}}">{{$title}}</div>
    @endif

    {{--    content--}}
    <div class="max-h-full flex-grow">
        @if(isset($content))
            <div {{$content->attributes->class([
                    'min-h-full bg-white ',
                    'flex justify-center items-center h-full',
//                    'border-t rounded-t-md' => empty($heading) && empty($title),
//                    'border-b rounded-b-md' => empty($footer),
                ])}}>
                {{$content ?? null}}
            </div>
        @elseif(isset($slot))
            @php
                $content_classes = 'p-3 min-h-full flex justify-center items-center h-full';
            @endphp
            <div class="flex-wrap {{$content_classes}}">
                {{$slot ?? null}}
            </div>
        @endif
    </div>
    @if(isset($footer))
        <div {{$footer->attributes->class([
            'py-2' => !$somethingStartsWith('py-', $footer),
            'px-3' => !$somethingStartsWith('px-', $footer),
            '!border-b' => !$somethingStartsWith('border-', $footer),
            'rounded-b-md bg-gray-100',
        ])}}>
            {{$footer}}
        </div>
    @endif
</div>
