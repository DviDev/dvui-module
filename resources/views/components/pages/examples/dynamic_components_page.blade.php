@use(Modules\DvUi\Enums\DvuiComponentAlias)

<x-lte::layout.v1.page title="DvUi {{__('dvui::page.components')}}" header="DvUi {{__('dvui::page.components')}}">
    <div class="grow">
        <div class="grid grid-cols-2 gap-3">

            <x-lte::card header="{{ DvuiComponentAlias::FormInput->value}}" info outline>
                <x-lte::card.body>
                    <x-dvui::form.input label="Name" name="name" placeholder="name"/>
                </x-lte::card.body>
            </x-lte::card>

            <x-lte::card header="{{ DvuiComponentAlias::FormSelect->value}}" info outline>
                <x-lte::card.body>
                    <x-dvui::form.select label="Name">
                        <option>item 1</option>
                        <option>item 2</option>
                    </x-dvui::form.select>
                </x-lte::card.body>
            </x-lte::card>

            <x-lte::card header="{{ DvuiComponentAlias::FormDate->value}}" info outline>
                <x-lte::card.body>
                    <x-dvui::form.date label="Name" id="date"/>
                </x-lte::card.body>
            </x-lte::card>
        </div>
    </div>
</x-lte::layout.v1.page>
