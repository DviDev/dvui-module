@props([
    'rounded' => false,
    'first' => false,
    'last' => false,
    'rounded' => false,
    'content' => ''
])
<li @class([
      "px-6 py-2 w-full",
      "border-b border-gray-200" => !$last,
      "rounded-t-lg" => $first,
      "rounded-b-lg" => $last
    ])>
    {{$content}}
</li>
