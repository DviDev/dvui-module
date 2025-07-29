@props([
'show_selected_items' => config('dvui.components.multi-select-search.show_selected_items'),
'label' => null,
])
<div
    x-data="{
            searchTerm: '',
            msg: '',
            loading: $wire.entangle('componentLoading'),
            searchResults: $wire.entangle('searchResults'),
            list_open: false,
            checkAndSetSearch: function() {
                if (this.searchTerm.length == 0) {
                    this.msg = '';
                    this.$wire.set('searchTerm', null);
                    return;
                }
                if (this.searchTerm.length < {{ $searchMinlength }} ) {
                    this.msg = 'Digite pelo menos {{ $searchMinlength }} caracteres.';
                    return;
                }

                this.msg = '';
                // ... Só envia a requisição se atender ao criterio.
                // Simula o debounce.
                this.loading = true;
                setTimeout(() => {
                    this.$wire.set('searchTerm', this.searchTerm);
                }, 900)
            }
        }"
    @click="list_open = true" @click.outside="list_open = false"
>
    <div>
        @if($label)
        <x-flowbite::form.label :id="$id" :label="$label"/>
        @endif
        <x-flowbite::form.input
            placeholder="{{ $placeholder }}"
            title="{{$title}}"
            id="{{$id}}"
            x-model="searchTerm"
            @input="checkAndSetSearch()"
        />
        @error('searchTerm') <p class="text-xs text-red-600">{{ $message }}</p> @enderror

        <p class="text-xs text-red-600" x-text="msg" x-show="msg" x-cloak></p>
    </div>

    {{-- Search result list --}}
    <div @class([
    "mt-1",
    "max-h-60 overflow-y-auto",
    "border border-gray-200 rounded-md"
    ])
    x-show="list_open && searchResults.length > 0" x-cloak>
    <div x-show="loading" x-cloak>
        <div class="space-y-2 mt-1 p-2">
            <x-flowbite::skeleton class="py-1"/>
            <x-flowbite::skeleton class="py-1"/>
            <x-flowbite::skeleton class="py-1"/>
        </div>
    </div>
    @foreach ($searchResults as $result)
    @php $item_id = $this->getItemId($result[$searchKey]); @endphp
    <div class="flex items-center p-2 hover:bg-gray-50 border-b last:border-b-0">
        <input
            type="checkbox"
            id="{{ $item_id }}"
            value="{{ $result[$searchKey] }}"
            wire:click="toggleSelection('{{ $result[$searchKey] }}')"
            @checked(in_array($result[$searchKey], array_column($selectedItems, $searchKey)))
            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
        >
        <label for="{{ $item_id }}" class="ml-2 block text-xs text-gray-900 cursor-pointer">
                    <span class="flex space-x-1">
                        @foreach($displayKey as $key)
                            <span>{{$result[$key]}}</span>
                        @endforeach
                    </span>
        </label>
    </div>
    @endforeach
</div>

{{-- Selected Items --}}
@if ($show_selected_items && count($selectedItems) > 0)
<div class="mt-1">
    <h3 class="text-sm font-medium text-gray-700">{{mb_ucfirst(__('dvui::components.selected items'))}}</h3>
    <div class="flex flex-wrap gap-2">
        @foreach ($selectedItems as $selectedItem)
        <span @class([
        "inline-flex items-center px-2.5 py-0.5 rounded-full",
        "bg-indigo-100",
        "text-indigo-800 text-[10px] font-medium uppercase leading-4 text-center",
        ])>
        <span class="flex space-x-1">
                            @foreach($displayKey as $key)
                                    <span>{{$result[$key]}}</span>
                                @endforeach
                        </span>
        </span>
        @endforeach
    </div>
</div>
@endif
</div>
