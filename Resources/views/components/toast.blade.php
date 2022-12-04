@props([
  'primary' => null,
  'title' => null,
  'title2' => null,
  'label'
])
<div x-cloak
    x-show="show"
     @class(["absolute top-0 right-0 mr-4 mt-4 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block"])
     x-bind:class="toastType === 'primary' ? 'bg-blue-500' : 'bg-white'"
     id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
    <div>
        <div class="border-2 bg-yellow-300 border-yellow-300 rounded-t"
             :style="{ width:width +'%' }"></div>
    </div>
    <div class=" flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-gray-200 rounded-t-lg"
         x-bind:class="toastType === 'primary' ? 'bg-blue-500' : 'bg-white'"

    >
        <p class="font-bold flex space-x-1" x-bind:class="toastType === 'primary' ? 'text-white items-center' : 'text-gray-500'"
        >
            <x-dvui::icon.information.circle/>
            <span x-text="toastTitle">{{$title}}</span>
        </p>
        <div class="flex items-center"
        >
            <p class="text-gray-600 text-xs" x-text="toastTitle2"
               x-bind:class="toastType === 'primary' ? 'text-white' : ''"

            >{{$title2}}</p>
            <x-dvui::button @click="closeToast()">
                <x-dvui::icon.x.circle s6/>
            </x-dvui::button>
        </div>
    </div>
    <div class="p-3 rounded-b-lg break-words " x-text="toastLabel"
         x-bind:class="toastType === 'primary' ? 'bg-blue-500 text-white' : 'bg-white text-gray-700'"
    >
        {{$label}}
    </div>
</div>
