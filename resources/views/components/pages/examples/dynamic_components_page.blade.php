@use(Modules\DvUi\Enums\DvuiComponentAlias)
@pushonce('livewire_styles')
    @livewireStyles
@endpushonce
@pushonce('livewire_scripts')
    @livewireScripts
    @livewireScriptConfig
@endpushonce
<x-lte::layout.v1.page title="Icons" header="DvUi {{__('dvui::page.components')}}">
    <div class="grow p-4 bg-gray-100">
        <div class="grid grid-cols-2 gap-3">

            <x-lte::card header="{{ DvuiComponentAlias::FormInput->value}}" info outline>
                <x-lte::card.body>
                    <x-dvui::form.input label="Name" name="name" placeholder="name"/>
                </x-lte::card.body>
            </x-lte::card>
            <x-lte::card header="{{ DvuiComponentAlias::FormSelect->value}}" info outline>
                <x-lte::card.body>
                    <x-dvui::form.input label="Name" name="name" placeholder="name"/>
                </x-lte::card.body>
            </x-lte::card>
        </div>
    </div>
</x-lte::layout.v1.page>
