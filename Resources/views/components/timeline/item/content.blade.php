@props([
    'description',
    'title',
])
<div class="ml-6 mb-6 pb-6">
    {{$title}}
    <p class="text-gray-700 mt-2 mb-4">{{$description}}</p>
    {{$slot}}
</div>
