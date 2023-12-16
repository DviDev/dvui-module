@props([
    'id',
    'title' => null,
    'body' => null,
    'action' => null,
    'static' => false,
    'actionLabel' => 'ok',
    'scrollable' => false,
    'centered' => false,
    "xl" => false,
    "lg" => false,
    "sm" => false,
    "fullScreen" => false
])
@php
    $unused_according_doc = false; // 20231014
@endphp
<div
    @class([
        "modal fade" => $unused_according_doc,
        "fixed left-0 top-0 z-[1055] hidden w-full h-full overflow-y-auto overflow-x-hidden outline-none",
        "h-screen p-1" => $unused_according_doc//$fullScreen
        ])
    id="{{$id}}"
    data-te-modal-init tabindex="-1" aria-labelledby="{{$title}}"
    aria-modal="true"
    role="dialog"
    @if($static)
    data-bs-keyboard="false"
    data-bs-backdrop="static"
    @endif
>
    <div data-te-modal-dialog-ref
        @class([
        "pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]",
//        "pointer-events-none relative w-auto ",
        "modal-dialog",
        "modal-xl" => $xl,
        "modal-lg" => $lg,
        "modal-sm" => $sm,
//        "w-full h-full max-w-full mt-0" => $fullScreen,
        "modal-dialog-centered" => $centered,
        "modal-dialog-scrollable" => $scrollable,
        ])>
        <div
            @class([
                "modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current",
                "h-full" => $fullScreen,
                ])>
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                    {{ucfirst($title ?? __('attention'))}}
                </h5>
                <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-te-modal-dismiss aria-label="Close">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body relative p-4" {{$body->attributes ?? null}}>
                {{$body}}
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-between p-4 border-t border-gray-200 rounded-b-md">
                <x-dvui::button :label="__('close')" light border rounded md data-bs-dismiss="modal"
                                class="py-2.5 font-medium text-xs uppercase"/>
                @if($action)
                    {{--ex: a button with livewire action--}}
                    {{$action}}
                @else
                    <x-dvui::button type="submit" :label="__($actionLabel)" primary rounded md data-bs-dismiss="modal"
                                    class="py-2.5 font-medium text-xs uppercase"/>
                @endif
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script type="module">
        import {
            Modal,
            Ripple,
            initTE
        } from "{{Vite::asset('node_modules/tw-elements/dist/js/tw-elements.es.min.js')}}";

        initTE({Modal, Ripple});
    </script>
@endpush
