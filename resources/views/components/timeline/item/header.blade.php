@props([
'title'
])
<div class="flex flex-start items-center">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2"></div>
    <h4 class="text-gray-800 font-semibold text-xl -mt-2">{{$title}}</h4>
</div>
