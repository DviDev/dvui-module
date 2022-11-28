<x-layout>
    <div class="flex-col h-full p-2">
        <x-dvui::card title="Icons">
            <div class="flex flex-row flex-wrap  gap-4">
                <x-page.icon.card-icon title="academic-cap">
                    @php
                        $str= str('<x-dvui::icon.academiccap $opt$/>')->value()
                    @endphp
                    <div class="flex flex-col" x-data="{
                          option: 'outline',
                          teste() {
                          const str='{{$str}}';

                            if (this.option === 'outline') {
                                navigator.clipboard.writeText(str.replace('$opt$', ''));
                                return
                            }
                            if (this.option === 'solid') {
                                navigator.clipboard.writeText(str.replace('$opt$', 'fill'));
                                return
                            }
                            if (this.option === 'mini') {
                                navigator.clipboard.writeText(str.replace('$opt$', 'mini'));
                            }
                          }
                      }">
                        <x-dvui::button.group class="shadow-none hover:shadow-none">
                            <x-page.icon.card-icon.button title="outline" @click="option='outline'">
                                <x-dvui::icon.academiccap s6/>
                            </x-page.icon.card-icon.button>
                            <x-page.icon.card-icon.button title="solid" @click="option='solid'">
                                <x-dvui::icon.academiccap :fill="true" s6/>
                            </x-page.icon.card-icon.button>
                            <x-page.icon.card-icon.button title="mini" @click="option='mini'">
                                <x-dvui::icon.academiccap :mini="true" class="mt-1"/>
                            </x-page.icon.card-icon.button>
                        </x-dvui::button.group>
                        <code>
                            <div class="p-2 bg-gray-800 text-gray-200 text-xs flex" x-cloak>
                                <span x-show="option === 'outline'" id="option">
                                    @php
                                        $str= str('<x-dvui::icon.academiccap/>')->value()
                                    @endphp
                                    {{ $str }}
                                </span>
                                <span x-show="option === 'solid'" id="option">
                                    @php
                                        $str= str('<x-dvui::icon.academiccap fill/>')->value()
                                    @endphp
                                    {{$str}}
                                </span>
                                <span x-show="option === 'mini'" id="option">
                                    @php
                                        $str= str('<x-dvui::icon.academiccap mini/>')->value()
                                    @endphp
                                    {{$str}}
                                </span>
                                <x-dvui::icon.clipboard.clipboard @click="teste"
                                                                  title="copiar para área de transferência"
                                                                  fill s4
                                                                  class="p-0 text-gray-200 ml-1 cursor-pointer"/>
                            </div>
                        </code>
                    </div>
                </x-page.icon.card-icon>
                <x-dvui::card title="Adjustments">
                    <x-dvui::icon.adjustment.horizontal s6/>
                    <x-dvui::icon.adjustment.vertical s6/>
                </x-dvui::card>
                <x-dvui::card title="Arquive box">
                    <x-dvui::icon.arquivebox.arrowdown s6/>
                    <x-dvui::icon.arquivebox.xmark s6/>
                    <x-dvui::icon.arquivebox s6/>
                </x-dvui::card>
                <x-dvui::card title="Arrows">
                    <div class="flex flex-row flex-wrap gap-4">
                        <x-dvui::icon.arrow.down s6/>
                        <x-dvui::icon.arrow.down.circle s6/>
                        <x-dvui::icon.arrow.down.left s6/>
                        <x-dvui::icon.arrow.down.onsquare s6/>
                        <x-dvui::icon.arrow.down.onsquarestack s6/>
                        <x-dvui::icon.arrow.down.right s6/>
                        <x-dvui::icon.arrow.down.tray s6/>
                        <x-dvui::icon.arrow.left.left s6/>
                        <x-dvui::icon.arrow.left.circle s6/>
                        <x-dvui::icon.arrow.left.onrectangle s6/>
                        <x-dvui::icon.arrow.down.long s6/>
                        <x-dvui::icon.arrow.left.long s6/>
                        <x-dvui::icon.arrow.right.long s6/>
                        <x-dvui::icon.arrow.up.long s6/>
                        <x-dvui::icon.arrow.path s6/>
                        <x-dvui::icon.arrow.path.roundedsquare s6/>
                        <x-dvui::icon.arrow.right.right s6/>
                        <x-dvui::icon.arrow.right.circle s6/>
                        <x-dvui::icon.arrow.right.onrectangle s6/>
                        <x-dvui::icon.arrow.down.small s6/>
                        <x-dvui::icon.arrow.left.small s6/>
                        <x-dvui::icon.arrow.right.small s6/>
                        <x-dvui::icon.arrow.up.small s6/>
                        <x-dvui::icon.arrow.top.rightonsquare s6/>
                        <x-dvui::icon.arrow.down.trending s6/>
                        <x-dvui::icon.arrow.up.trending s6/>
                        <x-dvui::icon.arrow.up.up s6/>
                        <x-dvui::icon.arrow.up.circle s6/>
                        <x-dvui::icon.arrow.up.left s6/>
                        <x-dvui::icon.arrow.up.onsquare s6/>
                        <x-dvui::icon.arrow.up.onsquarestack s6/>
                        <x-dvui::icon.arrow.up.right s6/>
                        <x-dvui::icon.arrow.up.tray s6/>
                        <x-dvui::icon.arrow.down.uturn s6/>
                        <x-dvui::icon.arrow.left.uturn s6/>
                        <x-dvui::icon.arrow.right.uturn s6/>
                        <x-dvui::icon.arrow.up.uturn s6/>
                        <x-dvui::icon.arrow.pointing.in s6/>
                        <x-dvui::icon.arrow.pointing.out s6/>
                        <x-dvui::icon.arrow.rigthleft s6/>
                        <x-dvui::icon.arrow.updown s6/>
                    </div>
                </x-dvui::card>
                <x-dvui::icon.folder s6/>
                <x-dvui::icon.trash s6/>
                <x-dvui::icon.plus s6/>
                <x-dvui::icon.check s6/>
                <x-dvui::icon.pencil s6/>
                <x-dvui::icon.arrow.magnifying.glass s6/>
                {{--                <x-dvui::icon.user.circle_outline/>--}}
                <x-dvui::icon.home s6/>
            </div>
        </x-dvui::card>
    </div>
</x-layout>
@push('scripts')
    <script>
        function teste () {
            alert('asdfasd fasdfs')
        }
    </script>
@endpush
