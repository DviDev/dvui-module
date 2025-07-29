@props([
'primary' => false,
'secondary' => false,
'success' => false,
'danger' => false,
'warning' => false,
'attention' => false,
'info' => false,
'light' => false,
'dark' => false,
'link' => false,
'items_dark' => false,
'xs' => false,
'sm' => false,
'md' => false,
'lg' => false,
'xlg' => false,
'dropup' => false,
'dropend' => false,
'dropstart' => false,
'label',
])

<div @class([
"dropdown" => !$dropup,
"dropup" => $dropup,
"dropend" => $dropend,
"dropstart" => $dropstart,
"relative"
])>
<x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
<x-dvui::button
    :primary="$primary || (!$secondary && !$success && !$danger && !$warning && !$attention && !$info && !$light && !$dark && !$link)"
    :secondary="$secondary"
    :success="$success"
    :danger="$danger"
    :warning="$warning"
    :attention="$attention"
    :info="$info"
    :light="$light"
    :dark="$dark"
    :link="$link"
    :xs="$xs"
    :sm="$sm"
    :md="$md || (!$xs && !$sm && !$lg && !$xlg)"
    :lg="$lg"
    :xlg="$xlg"
    class="dropdown-toggle flex items-center whitespace-nowrap rounded"
    type="button"
    id="dropdownMenuButton1"
    data-bs-toggle="dropdown"
    aria-expanded="false"
    {{$attributes}}
>
    @if($dropstart)
    <x-dvui::icon.chevron.leftmini style="margin-left: -8px; padding-bottom:1px"/>
    @endif

    @if($label)
    {{$label}}
    @endif

    @if($dropend)
    <x-dvui::icon.chevron.down mini style="margin-right: -8px; padding-bottom:1px"/>
    @elseif(!$dropstart)
    <x-dvui::icon.chevron.down mini/>
    @endif
</x-dvui::button>
<ul
    @class([
"dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none",
"bg-gray-800 text-gray-300" => $items_dark
])
aria-labelledby="dropdownMenuButton1">
{{$slot}}
</ul>
</div>
