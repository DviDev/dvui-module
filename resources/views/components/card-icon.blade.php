<div x-data="{show_code: false}">
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <x-lte::card>
        <x-lte::card.header class="px-2 py-1 border-b" :navs="false">
            <div class="grow my-auto">{{$title}}</div>
            <div @click="show_code = !show_code"
                 class="ml-2 border border-gray-900 rounded bg-gray-800 text-white px-1 my-auto cursor-pointer">
                <x-dvui::icon.code.bracket s4/>
            </div>
        </x-lte::card.header>
        <x-lte::card.body>
            <div class="flex space-x-1">
                <x-dynamic-component :component="'dvui::icon.'.$icon" title="outline"
                                     class="hover:text-blue-500 cursor-pointer"/>
                <x-dynamic-component :component="'dvui::icon.'.$icon" fill title="fill"
                                     class="hover:text-blue-500 cursor-pointer"/>
                <div class="my-auto">
                    <x-dynamic-component :component="'dvui::icon.'.$icon" mini title="mini"
                                         class="hover:text-blue-500 cursor-pointer my-auto"/>

                </div>
                <x-dynamic-component :component="'dvui::icon.'.$icon" micro title="micro"
                                     class="hover:text-blue-500 cursor-pointer"/>
            </div>
            @php
            $code = '
            <x-dvui::icon.
            '.$icon.'/>';
            @endphp

        </x-lte::card.body>
        <x-lte::card.footer x-show="show_code" style="display: none">
            <div class="flex justify-center">
                <div class="bg-red rounded p-0.5 my-auto flex">
                    <code class="my-auto bg-gray-800 text-white text-center p-1 px-2 rounded">
                        {{$code}}
                    </code>
                </div>
            </div>
        </x-lte::card.footer>
    </x-lte::card>
</div>
