<div {{$attributes->class([
        'carousel-item relative float-left w-full'
    ])}}
>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$slot}}
</div>
