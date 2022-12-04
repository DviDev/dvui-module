@props([
  'primary' => null,
  'title' => null,
  'title2' => null,
  'label'
])
<div x-cloak
    x-show="show"
     @class([
                    "absolute top-0 right-0 mr-4 mt-4
                    bg-white shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block"])
     id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
    <div>
        <div class="border-2 bg-yellow-300 border-yellow-300 rounded-t"
             :style="{ width:width +'%' }"></div>
    </div>
    <div class="bg-white flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-gray-200 rounded-t-lg">
        <p class="font-bold flex space-x-1" x-bind:class="toastType === 'primary' ? 'text-white items-center' : 'text-gray-500'"
        >
            <x-dvui::icon.information.circle/>
            <span x-text="toastTitle">{{$title}}</span>
        </p>
        <div class="flex items-center">
            <p class="text-gray-600 text-xs" x-text="toastTitle2">{{$title2}}</p>
            <button type="button" @click="closeToast()" class="btn-close box-content w-4 h-4 ml-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-mdb-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <div class="p-3 bg-white rounded-b-lg break-words text-gray-700" x-text="toastLabel">
        {{$label}}
    </div>
</div>
