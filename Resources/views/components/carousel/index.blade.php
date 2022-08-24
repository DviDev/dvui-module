<div {{$attributes->class([
        "carousel relative slide",
        ])}} data-bs-ride="carousel">
    @if(isset($indicators))
    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        {{$indicators}}
    </div>
    @endif
    <div class="carousel-inner relative w-full overflow-hidden">
        {{$slot}}
    </div>
    @isset($controls)
        {{$controls}}
    @endisset
</div>
