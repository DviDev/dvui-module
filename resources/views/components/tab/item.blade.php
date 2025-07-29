@props([
'href',
'label',
'active' => false,
])
<li class="nav-item" role="presentation">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <a href="#tabs-{{$href}}"
       {{$attributes->class([
        "active" => $active,
        "nav-link",
        "block",
        "font-medium",
        "text-xs",
        "leading-tight",
        "uppercase",
        "border-x-0 border-t-0 border-b-2 border-transparent",
        "px-6",
        "py-3",
        "my-2",
        "hover:border-transparent hover:bg-gray-100",
        "focus:border-transparent",
        ])}}
        id="{{'tabs-'.$href.'-tab'}}"
        data-bs-toggle="pill"
        data-bs-target="{{'#tabs-'.$href}}"
        role="tab"
        aria-controls="{{'tabs-'.$href}}"
        aria-selected="true">
        {{$label}}
    </a>
</li>
