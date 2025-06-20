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

        <p class="text-xs text-red-600" x-text="msg" x-show="msg" x-cloak></p>
    </div>

    {{-- Lista de Resultados da Busca --}}
    <div @class(["mt-1",
        "max-h-60 overflow-y-auto",
        "border border-gray-200 rounded-md"
        ])
         x-show="list_open" x-cloak
{{--         x-show="searchResults.length > 0 || loading" x-cloak--}}
    >
        <div x-show="loading || searchResults.length > 0" x-cloak>
            <div class="space-y-2 mt-1 p-2" x-show="loading && searchResults.length == 0" x-cloak>
                <x-flowbite::skeleton/>
                <x-flowbite::skeleton/>
                <x-flowbite::skeleton/>
            </div>
            <div class="pt-1 flex justify-center" x-show="loading && searchResults.length > 0" x-cloak>
                <x-dvui::icon.cog class="animate-spin h-5 w-5 text-gray-400"/>
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
                        {{--<button
                            type="button"
                            wire:click="removeItem('{{ $selectedItem[$searchKey] }}')"
                            class="flex-shrink-0 ml-1.5 h-3.5 w-3.5 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white"
                        >
                            <span class="sr-only">Remover</span>
                            <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                            </svg>
                        </button>--}}
                    </span>
                @endforeach
            </div>
        </div>
    @endif
</div>
