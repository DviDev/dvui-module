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
@php
    if (!$label){
        throw new Exception('Inform the label property');
    }
    $default = $default || (!$primary && !$success && !$warning && !$danger)
@endphp
<div x-data="{ width:100 }"
     role="alert"
     aria-live="assertive"
     aria-atomic="true"
     data-te-autohide="false"
     data-te-toast-init
     data-te-toast-show
     @class([
        "absolute top-[8px] right-[8px] shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding
        rounded block",
        "bg-white" => $default,
        "text-primary-700" => $primary,
        "bg-transparent text-success-700 dark:text-success-200" => $success,
        "text-warning-700" => $warning,
        "text-danger-700" => $danger
    ])
     id="static-example">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <div>
        <div @class([
            "pt-1 rounded-t-lg",
            'border-blue-600' => $default || $primary,
            'bg-success-700' => $success,
            'border-yellow-400' => $warning,
            'border-red-600' => $danger
            ])
             x-bind:style="{ width:width +'%' }"></div>
    </div>
    <div @class([
        'bg-white text-gray-700' => $default,
        'bg-primary-100' => $primary,
        'bg-success-100 bg-success-600' => $success,
        'bg-warning-100' => $warning,
        'bg-danger-100' => $danger
    ])>
        <div @class([
            "flex justify-between items-center pt-0 pr-0 px-3 bg-clip-padding border-b",
            "border-green-200" => $success
        ])>
            <p @class([
            "font-bold flex space-x-1 items-center",
            'text-gray-500' => $default,
            ])>
                @if($default)
                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                         data-icon="info-circle"
                         class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                    </svg>
                @endif
                @if($success || $primary)
                    <x-dvui::icon.check.circle fill s5 style="margin: 2px" data-te-toast-dismiss/>
                @elseif($warning)
                    <x-dvui::icon.exclamation.triangle fill s5 style="margin: 2px"/>
                @elseif($danger)
                    <x-dvui::icon.shield.exclamation fill s5 style="margin: 2px"/>
                @endif
                <span>{{$title}}</span>
            </p>
            <div class="flex items-center">
                <p @class(["text-xs"])>{{$title2}}</p>
                <span @class(['text-gray-800' => $default])>
            <x-dvui::icon.x.circle s6 style="margin: 6px" class="cursor-pointer" data-te-toast-dismiss/>
        </span>
            </div>
        </div>
        <div @class(["p-3 rounded-b-lg break-words"])>
            {{$label}}
        </div>
    </div>
</div>
