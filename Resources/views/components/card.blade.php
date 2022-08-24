<div {{$attributes->class([
    'max-h-full flex flex-col divide-y',
    'bg-white' => !$onlyClassesStartWith('bg-'),
    'border border-x-2 rounded-md' => !$onlyClassesStartWith('border'),
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
    <div class="max-h-full flex-grow p-1">
        @if(isset($slot))
            @php
                $content_classes = 'p-3 min-h-full flex justify-center items-center h-full';
            @endphp
            <div class="flex-wrap {{$content_classes}}">
                {{$slot ?? null}}
            </div>
        @elseif($content)
            <div {{$content->attributes->class([
                    'p-3 min-h-full bg-white border-y-0 border',
                    'flex justify-center items-center h-full',
                    'border-t rounded-t-md' => empty($heading) && empty($title),
                    'border-b rounded-b-md' => empty($footer),
                ])}}>
                {{$slot ?? $content ?? null}}
            </div>
        @endif
    </div>
    {{--    footer--}}
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
