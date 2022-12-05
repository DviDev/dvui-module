@props([
  'default' => false,
  'primary' => false,
  'success' => false,
  'warning' => false,
  'danger' => false,
  'title' => null,
  'title2' => null,
  'label'
])
<div x-cloak
     x-show="show"
     @class(["absolute top-0 right-0 mr-4 mt-4 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded block"])
     x-bind:class="{
            'bg-white': toastType === 'default',
            'bg-blue-500': toastType === 'primary',
            'bg-green-500': toastType === 'success',
            'bg-yellow-500': toastType === 'warning',
            'bg-red-500': toastType === 'danger'
        }"
     id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
    <div>
        <div class="border-2 rounded-t-lg"
             x-bind:class="{
                'border-blue-600': ['default', 'primary'].includes(toastType),
                'border-green-400': toastType === 'success',
                'border-yellow-400': toastType === 'warning',
                'border-red-600': toastType === 'danger'
            }"
             x-bind:style="{ width:width +'%' }"></div>
    </div>
    <div class=" flex justify-between items-center pt-0 pr-0 px-3 bg-clip-padding border-b border-gray-200 rounded-t-lg"
         x-bind:class="{
            'bg-white text-gray-700': toastType === 'default',
            'bg-blue-500': toastType === 'primary',
            'bg-green-500': toastType === 'success',
            'bg-yellow-500': toastType === 'warning',
            'bg-red-500': toastType === 'danger'
         }"
    >
        <p class="font-bold flex space-x-1 items-center"
           x-bind:class="{
                'text-gray-500': toastType === 'default',
                'text-white': toastType !== 'default'

            }"
        >
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle"
                 class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                      d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
            </svg>
            <span x-text="toastTitle">{{$title}}</span>
        </p>
        <div class="flex items-center">
            <p class="text-gray-600 text-xs" x-text="toastTitle2"
               x-bind:class="{
                    'text-white': ['primary','success', 'warning', 'danger'].includes(toastType)
                }">
                {{$title2}}
            </p>
            <span x-bind:class="{
                'text-gray-800': toastType === 'default',
                'text-white': toastType !== 'default'
            }">
                <x-dvui::icon.x.circle s6 @click="closeToast()" style="margin: 6px" class="cursor-pointer"/>
            </span>
        </div>
    </div>
    <div class="p-3 rounded-b-lg break-words " x-text="toastLabel"
         x-bind:class="{
            'text-white': toastType !== 'default',
            'bg-white text-gray-700': toastType === 'default',
            'bg-blue-500': toastType === 'primary',
            'bg-green-500': toastType === 'success',
            'bg-yellow-500': toastType === 'warning',
            'bg-red-500': toastType === 'danger'
        }"
    >
        {{$label}}
    </div>
</div>
