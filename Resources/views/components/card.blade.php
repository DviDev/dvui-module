@php
    $header_classes = 'text-gray-900 text-base py-1.5 px-3 bg-white border-b-0 border rounded-t-md';
@endphp
<div {{$attributes->class(['max-h-full divide-y'])}}>
    {{--    header--}}
    @if(isset($heading))
        <div {{ $heading->attributes->class($header_classes) }}>
            <span {{ $heading->attributes }}>{{ $heading }}</span>
        </div>
    @elseif(isset($title))
        <div class="{{$header_classes}}">{{$title}}</div>
    @endif

    {{--    content--}}
    <div class="max-h-full ">
        @if(isset($slot))
            @php
                $content_classes = 'p-3 min-h-full bg-white border-y-0 border flex justify-center items-center h-full';
            @endphp
            @if (empty($heading) && empty($title))
                @php
                    $content_classes .= ' border-t rounded-t-md';
                @endphp
            @endif
            @if(empty($footer))
                @php
                    $content_classes .= ' border-b rounded-b-md';
                @endphp
            @endif
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
        'py-2 px-3 border-x !border-b rounded-b-md bg-gray-100',
    ])}}>
            {{$footer}}
        </div>
    @endif
</div>
