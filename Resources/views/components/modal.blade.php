@props([
    'id',
    'title' => null,
    'body' => null,
    'action' => null,
    'static' => false,
    'actionLabel' => 'save',
    'scrollable' => false,
    'centered' => false,
    "xl" => false,
    "lg" => false,
    "sm" => false,
    "fullScreen" => false
])
<div
    @class([
        "modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto",
        "h-screen p-1" => $fullScreen
        ])
    id="{{$id}}"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    @if($static)
    data-bs-keyboard="false"
    data-bs-backdrop="static"
    @endif
>
    <div @class([
         "relative w-auto pointer-events-none",
        "modal-dialog",
        "modal-xl" => $xl,
        "modal-lg" => $lg,
        "modal-sm" => $sm,
        "w-full h-full max-w-full mt-0" => $fullScreen,
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
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4"
                {{$body->attributes ?? null}}>
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
