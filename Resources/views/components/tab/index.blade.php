<ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
    id="tabs-tab"
    role="tablist">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$slot}}
</ul>
