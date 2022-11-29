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
                          copyToClipboard() {
                          const str='{{$str}}'

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
                                <x-dvui::icon.clipboard @click="copyToClipboard"
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
                        <x-dvui::icon.arrow.left s6/>
                        <x-dvui::icon.arrow.left.circle s6/>
                        <x-dvui::icon.arrow.left.onrectangle s6/>
                        <x-dvui::icon.arrow.down.long s6/>
                        <x-dvui::icon.arrow.left.long s6/>
                        <x-dvui::icon.arrow.right.long s6/>
                        <x-dvui::icon.arrow.up.long s6/>
                        <x-dvui::icon.arrow.path s6/>
                        <x-dvui::icon.arrow.path.roundedsquare s6/>
                        <x-dvui::icon.arrow.right s6/>
                        <x-dvui::icon.arrow.right.circle s6/>
                        <x-dvui::icon.arrow.right.onrectangle s6/>
                        <x-dvui::icon.arrow.down.small s6/>
                        <x-dvui::icon.arrow.left.small s6/>
                        <x-dvui::icon.arrow.right.small s6/>
                        <x-dvui::icon.arrow.up.small s6/>
                        <x-dvui::icon.arrow.top.rightonsquare s6/>
                        <x-dvui::icon.arrow.down.trending s6/>
                        <x-dvui::icon.arrow.up.trending s6/>
                        <x-dvui::icon.arrow.up s6/>
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
                <x-dvui::icon.atsymbol/>
                <x-dvui::icon.backspace/>
                <x-dvui::icon.backward/>
                <x-dvui::icon.banknotes/>
                <x-dvui::icon.bars.bars2/>
                <x-dvui::icon.bars.bottom.left/>
                <x-dvui::icon.bars.bottom.right/>
                <x-dvui::icon.bars.center.left/>
                <x-dvui::icon.bars.bars3/>
                <x-dvui::icon.bars.bars4/>
                <x-dvui::icon.bars.arrow.down/>
                <x-dvui::icon.bars.arrow.up/>
                <x-dvui::icon.bars.battery.zero/>
                <x-dvui::icon.bars.battery.complete/>
                <x-dvui::icon.bars.battery.half/>
                <x-dvui::icon.bars.beaker/>
                <x-dvui::icon.bell.alert/>
                <x-dvui::icon.bell.slash/>
                <x-dvui::icon.bell.snooze/>
                <x-dvui::icon.bell/>
                <x-dvui::icon.bolt.slash/>
                <x-dvui::icon.bolt/>
                <x-dvui::icon.book.open/>
                <x-dvui::icon.bookmark.slash/>
                <x-dvui::icon.bookmark.square/>

                <x-dvui::icon.bookmark/>
                <x-dvui::icon.briefcase/>
                <x-dvui::icon.bug.ant/>
                <x-dvui::icon.building.library/>
                <x-dvui::icon.building.office2/>
                <x-dvui::icon.building.office/>
                <x-dvui::icon.building.storefront/>
                <x-dvui::icon.cake/>

                <x-dvui::icon.calculator/>
                <x-dvui::icon.calendar.days/>
                <x-dvui::icon.calendar/>
                <x-dvui::icon.camera/>
                <x-dvui::icon.chart.bar.square/>
                <x-dvui::icon.chart.bar/>
                <x-dvui::icon.chart.pie/>
                <x-dvui::icon.chat.bubble.bottom.text.center/>
                <x-dvui::icon.chat.bubble.bottom.center/>
                <x-dvui::icon.chat.bubble.left.ellipsis/>
                <x-dvui::icon.chat.bubble.left.right/>
                <x-dvui::icon.chat.bubble.left/>
                <x-dvui::icon.chat.bubble.left.oval.ellipsis/>
                <x-dvui::icon.chat.bubble.left.oval/>
                <x-dvui::icon.check.badge/>
                <x-dvui::icon.check.circle/>
                <x-dvui::icon.check/>
                <x-dvui::icon.chevron.double.down/>
                <x-dvui::icon.chevron.double.left/>
                <x-dvui::icon.chevron.double.right/>
                <x-dvui::icon.chevron.double.up/>
                <x-dvui::icon.chevron.down/>
                <x-dvui::icon.chevron.left/>
                <x-dvui::icon.chevron.right/>

                <x-dvui::icon.chevron.updown/>
                <x-dvui::icon.chevron.up/>
                <x-dvui::icon.circle.stack/>
                <x-dvui::icon.clipboard.document.check/>
                <x-dvui::icon.clipboard.document.list/>
                <x-dvui::icon.clipboard.document/>
                <x-dvui::icon.clipboard/>
                <x-dvui::icon.clock/>

                <x-dvui::icon.cloud.arrow.down/>
                <x-dvui::icon.cloud.arrow.up/>
                <x-dvui::icon.cloud/>
                <x-dvui::icon.code.bracket.square/>
                <x-dvui::icon.code.bracket/>
                <x-dvui::icon.cog.six.tooth/>
                <x-dvui::icon.cog.eight.tooth/>
                <x-dvui::icon.cog.cog/>

                <x-dvui::icon.command.line/>
                <x-dvui::icon.computer.desktop/>
                <x-dvui::icon.cpu.chip/>
                <x-dvui::icon.credit.card/>
                <x-dvui::icon.cube.transparent/>
                <x-dvui::icon.cube/>
                <x-dvui::icon.currency.bangladeshi/>
                <x-dvui::icon.currency.dollar/>

                <x-dvui::icon.currency.euro/>
                <x-dvui::icon.currency.pound/>
                <x-dvui::icon.currency.rupee/>
                <x-dvui::icon.currency.yen/>
                <x-dvui::icon.cursor.arrow.rays/>
                <x-dvui::icon.cursor.arrow.ripple/>
                <x-dvui::icon.device.phone.mobile/>
                <x-dvui::icon.device.tablet/>

                <x-dvui::icon.document.arrow.down/>
                <x-dvui::icon.document.arrow.up/>
                <x-dvui::icon.document.chart.bar/>
                <x-dvui::icon.document.check/>
                <x-dvui::icon.document.duplicate/>
                <x-dvui::icon.document.magnify/>
                <x-dvui::icon.document.minus/>
                <x-dvui::icon.document.plus/>

                <x-dvui::icon.document.text/>
                <x-dvui::icon.document/>
                <x-dvui::icon.ellipsis.horizontal.circle/>
                <x-dvui::icon.ellipsis.horizontal/>
                <x-dvui::icon.ellipsis.vertical/>
                <x-dvui::icon.envelope.open/>
                <x-dvui::icon.envelope/>
                <x-dvui::icon.exclamation.circle/>

                <x-dvui::icon.exclamation.triangle/>
                <x-dvui::icon.eye.dropper/>
                <x-dvui::icon.eye.slash/>
                <x-dvui::icon.eye/>
                <x-dvui::icon.face.frown/>
                <x-dvui::icon.face.smile/>
                <x-dvui::icon.film/>
                <x-dvui::icon.finger.print/>

                <x-dvui::icon.fire/>
                <x-dvui::icon.flag/>
                <x-dvui::icon.folder.arrow.down/>
                <x-dvui::icon.folder.minus/>
                <x-dvui::icon.folder.open/>
                <x-dvui::icon.folder.plus/>
                <x-dvui::icon.folder/>
                <x-dvui::icon.forward/>

                <x-dvui::icon.funnel/>
                <x-dvui::icon.gif/>
                <x-dvui::icon.gift.top/>
                <x-dvui::icon.gif/>
                <x-dvui::icon.globe.alt/>
                <x-dvui::icon.globe.americas/>
                <x-dvui::icon.globe.asia.australia/>
                <x-dvui::icon.globe.europe.africa/>

                <x-dvui::icon.hand.raised/>
                <x-dvui::icon.hand.thumb.down/>
                <x-dvui::icon.hand.thumb.up/>
                <x-dvui::icon.hashtag/>
                <x-dvui::icon.heart/>
                <x-dvui::icon.home.modern/>
                <x-dvui::icon.home/>
                <x-dvui::icon.identification/>

                <x-dvui::icon.inbox.arrow.down/>
                <x-dvui::icon.inbox.stack/>
                <x-dvui::icon.inbox/>
                <x-dvui::icon.information.circle/>
                <x-dvui::icon.key/>
                <x-dvui::icon.language/>
                <x-dvui::icon.lifebuoy/>
                <x-dvui::icon.light.bulb/>

                <x-dvui::icon.link/>
                <x-dvui::icon.list.bullet/>
                <x-dvui::icon.lock.closed/>
                <x-dvui::icon.lock.open/>
                <x-dvui::icon.magnifying.glass.circle/>
                <x-dvui::icon.magnifying.glass.minus/>
                <x-dvui::icon.magnifying.glass.plus/>
                <x-dvui::icon.magnifying.glass/>

                <x-dvui::icon.map.in/>
                <x-dvui::icon.map/>
                <x-dvui::icon.megaphone/>
                <x-dvui::icon.microphone/>
                <x-dvui::icon.minus.circle/>
                <x-dvui::icon.minus.small/>
                <x-dvui::icon.minus/>
                <x-dvui::icon.moon/>

                <x-dvui::icon.musical.note/>
                <x-dvui::icon.newspaper/>
                <x-dvui::icon.nosymbol/>
                <x-dvui::icon.paint.brush/>
                <x-dvui::icon.paper.airplane/>
                <x-dvui::icon.paper.clip/>
                <x-dvui::icon.pause.circle/>
                <x-dvui::icon.pause/>

                <x-dvui::icon.pencil.square/>
                <x-dvui::icon.pencil/>
                <x-dvui::icon.phone.arrow.down.left/>
                <x-dvui::icon.phone.arrow.up.right/>
                <x-dvui::icon.phone.xmark/>
                <x-dvui::icon.phone/>
                <x-dvui::icon.photo/>
                <x-dvui::icon.play.circle/>

                <x-dvui::icon.play.pause/>
                <x-dvui::icon.play/>
                <x-dvui::icon.plus.circle/>
                <x-dvui::icon.plus.small/>
                <x-dvui::icon.plus/>
                <x-dvui::icon.power/>
                <x-dvui::icon.presentation.chart.bar/>
                <x-dvui::icon.presentation.chart.line/>

                <x-dvui::icon.printer/>
                <x-dvui::icon.puzzle.piece/>
                <x-dvui::icon.qrcode/>
                <x-dvui::icon.question.mark.circle/>
                <x-dvui::icon.queue.list/>
                <x-dvui::icon.radio/>
                <x-dvui::icon.receipt.percent/>
                <x-dvui::icon.receipt.refund/>

                <x-dvui::icon.retangle.group/>
                <x-dvui::icon.retangle.stack/>
                <x-dvui::icon.rocket.launch/>
                <x-dvui::icon.rss/>
                <x-dvui::icon.scale/>
                <x-dvui::icon.scissors/>
                <x-dvui::icon.server.stack/>
                <x-dvui::icon.server/>

                <x-dvui::icon.share/>
                <x-dvui::icon.shield.check/>
                <x-dvui::icon.shield.exclamation/>
                <x-dvui::icon.shopping.bag/>
                <x-dvui::icon.shopping.cart/>
                <x-dvui::icon.signal.slach/>
                <x-dvui::icon.signal/>
                <x-dvui::icon.sparkles/>

                <x-dvui::icon.speaker.wave/>
                <x-dvui::icon.speaker.xmark/>
                <x-dvui::icon.square.2stack/>
                <x-dvui::icon.square.3stack3d/>
                <x-dvui::icon.square.square2x2/>
                <x-dvui::icon.square.plus/>
                <x-dvui::icon.star/>
                <x-dvui::icon.stop.circle/>

                <x-dvui::icon.stop/>
                <x-dvui::icon.sun/>
                <x-dvui::icon.swatch/>
                <x-dvui::icon.table.cells/>
                <x-dvui::icon.tag/>
                <x-dvui::icon.ticket/>
                <x-dvui::icon.trash/>
                <x-dvui::icon.trophy/>

                <x-dvui::icon.truck/>
                <x-dvui::icon.tv/>
                <x-dvui::icon.user.circle/>
                <x-dvui::icon.user.group/>
                <x-dvui::icon.user.minus/>
                <x-dvui::icon.user.plus/>
                <x-dvui::icon.user/>
                <x-dvui::icon.user.users/>

                <x-dvui::icon.user.variable/>
                <x-dvui::icon.video.camera.slash/>
                <x-dvui::icon.video.camera/>
                <x-dvui::icon.view.columns/>
                <x-dvui::icon.view.finder.circle/>
                <x-dvui::icon.wallet/>
                <x-dvui::icon.wifi/>
                <x-dvui::icon.window/>

                <x-dvui::icon.wrench.screwdriver/>
                <x-dvui::icon.wrench/>
                <x-dvui::icon.x.circle/>
                <x-dvui::icon.x.mark/>
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
