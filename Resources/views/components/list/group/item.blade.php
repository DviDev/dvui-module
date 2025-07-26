@props([
    'rounded' => false,
    'first' => false,
    'last' => false,
    'rounded' => false,
    'content' => '',
    'disabled' => false,
    'primary' => false,
    'secondary' => false,
    'info' => false,
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
])
<li {{$attributes->class([
      "px-6 py-2 w-full",
      "border-b border-gray-200" => !$last,
      "rounded-t-lg" => $first,
      "rounded-b-lg" => $last,
      "bg-blue-600 text-white" => $primary,
      "text-gray-400 cursor-default" => $disabled
    ])}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{$content}}
</li>
