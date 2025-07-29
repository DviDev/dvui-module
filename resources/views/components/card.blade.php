@php
$array = $attributes->getAttributes();
$array['title'] = $title;

$attributes->setAttributes(collect($array)->merge($attr)->filter()->all());

@endphp
<!-- card -->
<div {{$attributes->class([
    'dark:divide-gray-700 divide-y',
    'bg-white' => !$onlyClassesStartWith('bg-'),
    'dark:bg-gray-800' => !$onlyClassesStartWith('bg-'),
    'rounded' => !$onlyClassesStartWith('border'),
    ])}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <!-- header -->
    @if(isset($heading))
    <div {{ $heading->attributes->class([
        $headerClasses($heading),
        'border-b border-b-1 dark:border-gray-700'
        ]) }}>
        {{ $heading }}
    </div>
    @elseif($attributes->get('title'))
    <div class="{{$headerClasses()}}">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{$attributes->get('title')}}
        </h2>
    </div>
    @endif

    {{-- content--}}
    <div class="max-h-full flex-grow">
        @if($content)
        @php
        $content_class = str($content->attributes->get('class'));
        @endphp
        <div {{$content->attributes->class([
            'min-h-full h-full flex-grow',
            'p-2' => !$content_class->contains('p-'),
            'min-h-full' => false,
            'bg-transparent' => false,
            'flex justify-center items-center h-full' => false,
            ])}} {{$content->attributes->except(['title'])}}>
            {{$content}}
        </div>
        @elseif(isset($slot))
        <div @class([
        "flex-wrap" => false,
        "p-3" => true,
        'space-y-1',
        "min-h-full" => true,
        "flex" => false,
        "justify-center" => false,
        "items-center" => false,
        "h-full" => true,
        "flex-grow" => true,
        ])>
        {{$slot ?? null}}
    </div>
    @endif
</div>
@if(isset($footer))
<div {{$footer->attributes->class([
    'border-t dark:border-gray-700',
    'py-2' => !$somethingStartsWith('py-', $footer),
    'px-3' => !$somethingStartsWith('px-', $footer),
    '!border-b' => !$somethingStartsWith('border-', $footer),
    ])}}>
    {{$footer}}
</div>
@endif
</div>
