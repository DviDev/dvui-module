<?php

namespace Modules\DvUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\DvUi\View\Components\Alert;
use Modules\DvUi\View\Components\Badge;
use Modules\DvUi\View\Components\Button\Button;
use Modules\DvUi\View\Components\Card;
use Modules\DvUi\View\Components\Carousel\Item;
use Modules\DvUi\View\Components\Chips;
use Modules\DvUi\View\Components\Icon\Icon;
use Modules\DvUi\View\Components\Icon\Pencil\Pencil;
use Modules\DvUi\View\Components\Icon\Rating\Face;
use Modules\DvUi\View\Components\Icon\Rating\Heart;
use Modules\DvUi\View\Components\Icon\Rating\Star;
use Modules\DvUi\View\Components\Link;

class DvUiServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'DvUi';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'dvui';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));

        $this->registerComponents();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
            $this->loadJsonTranslationsFrom(module_path($this->moduleName, 'Resources/lang'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }

    protected function registerComponents()
    {
        //if the component uses a class, inform here
        Blade::component('dvui::alert', Alert::class);
        Blade::component('dvui::button', Button::class);
        Blade::component('dvui::button.group');
        Blade::component('dvui::carousel');
        Blade::component('dvui::carousel.item', Item::class);
        Blade::component('dvui::dropdown');
        Blade::component('dvui::dropdown.item');
        Blade::component('dvui::link', Link::class);
        Blade::component('dvui::badge', Badge::class);
        Blade::component('dvui::card', Card::class);
        Blade::component('dvui::chips', Chips::class);
        Blade::component('dvui::icon', Icon::class);
        Blade::component('dvui::icon.adjustment');
        Blade::component('dvui::icon.adjustment.horizontal');
        Blade::component('dvui::icon.adjustment.vertical');
        Blade::component('dvui::icon.arquivebox');
        Blade::component('dvui::icon.arquivebox.arrowdown');
        Blade::component('dvui::icon.arquivebox.index');
        Blade::component('dvui::icon.arquivebox.xmark');
        Blade::component('dvui::icon.arrow');
        Blade::component('dvui::icon.arrow.down');
        Blade::component('dvui::icon.arrow.down.circle');
        Blade::component('dvui::icon.arrow.down.left');
        Blade::component('dvui::icon.arrow.down.long');
        Blade::component('dvui::icon.arrow.down.onsquare');
        Blade::component('dvui::icon.arrow.down.onsquarestack');
        Blade::component('dvui::icon.arrow.down.right');
        Blade::component('dvui::icon.arrow.down.small');
        Blade::component('dvui::icon.arrow.down.tray');
        Blade::component('dvui::icon.arrow.down.trending');
        Blade::component('dvui::icon.arrow.down.uturn');
        Blade::component('dvui::icon.arrow.left.circle');
        Blade::component('dvui::icon.arrow.left.index');
        Blade::component('dvui::icon.arrow.left.long');
        Blade::component('dvui::icon.arrow.left.onretangle');
        Blade::component('dvui::icon.arrow.left.small');
        Blade::component('dvui::icon.arrow.left.uturn');
        Blade::component('dvui::icon.arrow.path');
        Blade::component('dvui::icon.arrow.path.roundedsquare');
        Blade::component('dvui::icon.arrow.poiting.in');
        Blade::component('dvui::icon.arrow.poiting.out');
        Blade::component('dvui::icon.arrow.right');
        Blade::component('dvui::icon.arrow.right.circle');
        Blade::component('dvui::icon.arrow.right.long');
        Blade::component('dvui::icon.arrow.right.onretangle');
        Blade::component('dvui::icon.arrow.right.small');
        Blade::component('dvui::icon.arrow.right.uturn');
        Blade::component('dvui::icon.arrow.right.uturn');
        Blade::component('dvui::icon.arrow.top.rightonsquare');
        Blade::component('dvui::icon.arrow.up');
        Blade::component('dvui::icon.arrow.up.circle');
        Blade::component('dvui::icon.arrow.up.left');
        Blade::component('dvui::icon.arrow.up.long');
        Blade::component('dvui::icon.arrow.up.onsquare');
        Blade::component('dvui::icon.arrow.up.onsquarestack');
        Blade::component('dvui::icon.arrow.up.right');
        Blade::component('dvui::icon.arrow.up.small');
        Blade::component('dvui::icon.arrow.up.tray');
        Blade::component('dvui::icon.arrow.up.trending');
        Blade::component('dvui::icon.arrow.up.uturn');
        Blade::component('dvui::icon.arrow.down');
        Blade::component('dvui::icon.arrow.rightleft');
        Blade::component('dvui::icon.arrow.updown');
        Blade::component('dvui::icon.backspace.path');
        Blade::component('dvui::icon.bars.arrow.down');
        Blade::component('dvui::icon.bars.arrow.up');
        Blade::component('dvui::icon.bars.battery.complete');
        Blade::component('dvui::icon.bars.battery.half');
        Blade::component('dvui::icon.bars.battery.zero');
        Blade::component('dvui::icon.bars.bottom.left');
        Blade::component('dvui::icon.bars.bottom.right');
        Blade::component('dvui::icon.bars.center.left');
        Blade::component('dvui::icon.bars.bars2');
        Blade::component('dvui::icon.bars.bars3');
        Blade::component('dvui::icon.bars.bars4');
        Blade::component('dvui::icon.bars.beaker');
        Blade::component('dvui::icon.bell');
        Blade::component('dvui::icon.bell.alert');
        Blade::component('dvui::icon.bell.slash');
        Blade::component('dvui::icon.bell.snooze');
        Blade::component('dvui::icon.bolt');
        Blade::component('dvui::icon.bolt.slash');
        Blade::component('dvui::icon.book.open');
        Blade::component('dvui::icon.bookmark');
        Blade::component('dvui::icon.bookmark.slash');
        Blade::component('dvui::icon.bookmark.square');
        Blade::component('dvui::icon.bug.ant');
        Blade::component('dvui::icon.building.library');
        Blade::component('dvui::icon.building.office');
        Blade::component('dvui::icon.building.office2');
        Blade::component('dvui::icon.building.storefront');
        Blade::component('dvui::icon.calendar');
        Blade::component('dvui::icon.calendar.days');
        Blade::component('dvui::icon.camera');
        Blade::component('dvui::icon.chart.bar');
        Blade::component('dvui::icon.chart.bar.square');
        Blade::component('dvui::icon.chart.pie');
        Blade::component('dvui::icon.chat.bubble.bottom.center');
        Blade::component('dvui::icon.chat.bubble.bottom.text.center');
        Blade::component('dvui::icon.chat.bubble.left');
        Blade::component('dvui::icon.chat.bubble.left.oval');
        Blade::component('dvui::icon.chat.bubble.left.oval.ellipsis');
        Blade::component('dvui::icon.chat.bubble.left.right');
        Blade::component('dvui::icon.check');
        Blade::component('dvui::icon.check.badge');
        Blade::component('dvui::icon.check.circle');
        Blade::component('dvui::icon.chevron.double.down');
        Blade::component('dvui::icon.chevron.double.left');
        Blade::component('dvui::icon.chevron.double.right');
        Blade::component('dvui::icon.chevron.double.up');
        Blade::component('dvui::icon.chevron.down');
        Blade::component('dvui::icon.chevron.down.double');
        Blade::component('dvui::icon.chevron.left');
        Blade::component('dvui::icon.chevron.right');
        Blade::component('dvui::icon.chevron.leftmini');
        Blade::component('dvui::icon.chevron.rightmini');
        Blade::component('dvui::icon.chevron.up');
        Blade::component('dvui::icon.chevron.down');
        Blade::component('dvui::icon.circle.stack');
        Blade::component('dvui::icon.clipboard');
        Blade::component('dvui::icon.clipboard.document');
        Blade::component('dvui::icon.clipboard.document.check');
        Blade::component('dvui::icon.clipboard.document.list');
        Blade::component('dvui::icon.cloud');
        Blade::component('dvui::icon.cloud.arrow');
        Blade::component('dvui::icon.cloud.arrow.down');
        Blade::component('dvui::icon.cloud.arrow.up');
        Blade::component('dvui::icon.code.bracelet');
        Blade::component('dvui::icon.code.bracelet.square');
        Blade::component('dvui::icon.cog.eight.tooth');
        Blade::component('dvui::icon.cog.sizx.tooth');
        Blade::component('dvui::icon.cog.cog');
        Blade::component('dvui::icon.command.line');
        Blade::component('dvui::icon.computer.desktop');
        Blade::component('dvui::icon.cpu.chip');
        Blade::component('dvui::icon.credit.card');
        Blade::component('dvui::icon.cube');
        Blade::component('dvui::icon.cube.transparent');
        Blade::component('dvui::icon.currency.bangladeshi');
        Blade::component('dvui::icon.currency.dollar');
        Blade::component('dvui::icon.currency.pound');
        Blade::component('dvui::icon.currency.rupee');
        Blade::component('dvui::icon.currency.yen');
        Blade::component('dvui::icon.currency.yen');
        Blade::component('dvui::icon.cursor.arrow.rays');
        Blade::component('dvui::icon.cursor.arrow.ripple');
        Blade::component('dvui::icon.device');
        Blade::component('dvui::icon.device.phone.mobile');
        Blade::component('dvui::icon.device.tablet');
        Blade::component('dvui::icon.document');
        Blade::component('dvui::icon.document');
        Blade::component('dvui::icon.document.arrow.down');
        Blade::component('dvui::icon.document.arrow.up');
        Blade::component('dvui::icon.document.chart.bar');
        Blade::component('dvui::icon.document.check');
        Blade::component('dvui::icon.document.duplicate');
        Blade::component('dvui::icon.document.magnify');
        Blade::component('dvui::icon.document.minus');
        Blade::component('dvui::icon.document.plus');
        Blade::component('dvui::icon.document.text');
        Blade::component('dvui::icon.dropdown');
        Blade::component('dvui::icon.ellipsis');
        Blade::component('dvui::icon.ellipsis.envelope');
        Blade::component('dvui::icon.ellipsis.envelope.open');
        Blade::component('dvui::icon.ellipsis.exclamation.circle');
        Blade::component('dvui::icon.ellipsis.horizontal');
        Blade::component('dvui::icon.ellipsis.horizontal.circle');
        Blade::component('dvui::icon.ellipsis.vertical');
        Blade::component('dvui::icon.envelope');
        Blade::component('dvui::icon.envelope.open');
        Blade::component('dvui::icon.exclamation');
        Blade::component('dvui::icon.exclamation.circle');
        Blade::component('dvui::icon.exclamation.triangle');
        Blade::component('dvui::icon.eye');
        Blade::component('dvui::icon.eye.dropper');
        Blade::component('dvui::icon.eye.slash');
        Blade::component('dvui::icon.face.frown');
        Blade::component('dvui::icon.eye.smile');
        Blade::component('dvui::icon.finger.print');
        Blade::component('dvui::icon.folder');
        Blade::component('dvui::icon.folder.arrow.down');
        Blade::component('dvui::icon.folder.minus');
        Blade::component('dvui::icon.folder.open');
        Blade::component('dvui::icon.folder.plus');
        Blade::component('dvui::icon.git');
        Blade::component('dvui::icon.globe');
        Blade::component('dvui::icon.globe.asia.australia');
        Blade::component('dvui::icon.globe.europe.africca');
        Blade::component('dvui::icon.globe.hand.raised');
        Blade::component('dvui::icon.globe.alt');
        Blade::component('dvui::icon.globe.americas');
        Blade::component('dvui::icon.hand');
        Blade::component('dvui::icon.hand.thumb.down');
        Blade::component('dvui::icon.hand.thumb.up');
        Blade::component('dvui::icon.hand.hashtag');
        Blade::component('dvui::icon.hand.raised');
        Blade::component('dvui::icon.home');
        Blade::component('dvui::icon.home.modern');
        Blade::component('dvui::icon.inbox');
        Blade::component('dvui::icon.inbox.arrow.down');
        Blade::component('dvui::icon.inbox.stack');
        Blade::component('dvui::icon.information.circle');
        Blade::component('dvui::icon.light.bulb');
        Blade::component('dvui::icon.list.bullet');
        Blade::component('dvui::icon.lock.closed');
        Blade::component('dvui::icon.lock.open');
        Blade::component('dvui::icon.magnifying');
        Blade::component('dvui::icon.magnifying.glass');
        Blade::component('dvui::icon.magnifying.glass.circle');
        Blade::component('dvui::icon.magnifying.glass.minus');
        Blade::component('dvui::icon.magnifying.glass.plus');
        Blade::component('dvui::icon.map');
        Blade::component('dvui::icon.map.in');
        Blade::component('dvui::icon.menu.outline');
        Blade::component('dvui::icon.minus');
        Blade::component('dvui::icon.minus.circle');
        Blade::component('dvui::icon.minus.small');
        Blade::component('dvui::icon.musical.note');
        Blade::component('dvui::icon.paint.brush');
        Blade::component('dvui::icon.paper.airplane');
        Blade::component('dvui::icon.paper.clip');
        Blade::component('dvui::icon.pause');
        Blade::component('dvui::icon.pause.circle');
        Blade::component('dvui::icon.pencil');
        Blade::component('dvui::icon.pencil', Pencil::class);
        Blade::component('dvui::icon.phone.arrow');
        Blade::component('dvui::icon.phone.arrow.down.left');
        Blade::component('dvui::icon.phone.arrow.up.right');
        Blade::component('dvui::icon.phone.arrow.xmark');
        Blade::component('dvui::icon.play');
        Blade::component('dvui::icon.play.circle');
        Blade::component('dvui::icon.play.pause');
        Blade::component('dvui::icon.plus');
        Blade::component('dvui::icon.plus.circle');
        Blade::component('dvui::icon.plus.small');
        Blade::component('dvui::icon.presentation.chart.bar');
        Blade::component('dvui::icon.presentation.chart.line');
        Blade::component('dvui::icon.puzzle.piece');
        Blade::component('dvui::icon.question.mark.circle');
        Blade::component('dvui::icon.queue.list');
        Blade::component('dvui::icon.rating.face');
        Blade::component('dvui::icon.rating.heart');
        Blade::component('dvui::icon.rating.star');
        Blade::component('dvui::icon.receipt.percent');
        Blade::component('dvui::icon.receipt.refound');
        Blade::component('dvui::icon.retangle.group');
        Blade::component('dvui::icon.retangle.stack');
        Blade::component('dvui::icon.rocket.lauch');
        Blade::component('dvui::icon.server');
        Blade::component('dvui::icon.server.stack');
        Blade::component('dvui::icon.shield.check');
        Blade::component('dvui::icon.shield.exclamation');
        Blade::component('dvui::icon.shopping.bag');
        Blade::component('dvui::icon.shopping.cart');
        Blade::component('dvui::icon.signal');
        Blade::component('dvui::icon.signal.slach');
        Blade::component('dvui::icon.social.behance');
        Blade::component('dvui::icon.social.discord');
        Blade::component('dvui::icon.social.dribble');
        Blade::component('dvui::icon.social.facebook');
        Blade::component('dvui::icon.social.github');
        Blade::component('dvui::icon.social.google');
        Blade::component('dvui::icon.social.instagran');
        Blade::component('dvui::icon.social.linkedin');
        Blade::component('dvui::icon.social.messenger');
        Blade::component('dvui::icon.social.pinterest');
        Blade::component('dvui::icon.social.reddit');
        Blade::component('dvui::icon.social.slack');
        Blade::component('dvui::icon.social.snapchat');
        Blade::component('dvui::icon.social.stackoverflow');
        Blade::component('dvui::icon.social.telegram');
        Blade::component('dvui::icon.social.tiktok');
        Blade::component('dvui::icon.social.titch');
        Blade::component('dvui::icon.social.twiter');
        Blade::component('dvui::icon.social.vkontakte');
        Blade::component('dvui::icon.social.whatsapp');
        Blade::component('dvui::icon.social.youtube');
        Blade::component('dvui::icon.speaker.wave');
        Blade::component('dvui::icon.speaker.xmark');
        Blade::component('dvui::icon.square.2stack');
        Blade::component('dvui::icon.square.3stack3d');
        Blade::component('dvui::icon.square.plus');
        Blade::component('dvui::icon.square.square2x2');
        Blade::component('dvui::icon.stop');
        Blade::component('dvui::icon.stop.circle');
        Blade::component('dvui::icon.table.cells');
        Blade::component('dvui::icon.trash');
        Blade::component('dvui::icon.up.left');
        Blade::component('dvui::icon.user');
        Blade::component('dvui::icon.user.circle');
        Blade::component('dvui::icon.user.group');
        Blade::component('dvui::icon.user.minus');
        Blade::component('dvui::icon.user.users');
        Blade::component('dvui::icon.user.variable');
        Blade::component('dvui::icon.video.camera');
        Blade::component('dvui::icon.video.camera.slash');
        Blade::component('dvui::icon.view.finder.circle');
        Blade::component('dvui::icon.view.columns');
        Blade::component('dvui::icon.wrench');
        Blade::component('dvui::icon.wrench.screwdriver');
        Blade::component('dvui::icon.x.circle');
        Blade::component('dvui::icon.x.mark');
        Blade::component('dvui::icon.academiccap');
        Blade::component('dvui::icon.atsymbol');
        Blade::component('dvui::icon.backspace');
        Blade::component('dvui::icon.backward');
        Blade::component('dvui::icon.banknotes');
        Blade::component('dvui::icon.briefcase');
        Blade::component('dvui::icon.cake');
        Blade::component('dvui::icon.calculator');
        Blade::component('dvui::icon.clock');
        Blade::component('dvui::icon.film');
        Blade::component('dvui::icon.fire');
        Blade::component('dvui::icon.fireflag');
        Blade::component('dvui::icon.forward');
        Blade::component('dvui::icon.funnel');
        Blade::component('dvui::icon.gift');
        Blade::component('dvui::icon.hashtag');
        Blade::component('dvui::icon.heart');
        Blade::component('dvui::icon.home');
        Blade::component('dvui::icon.identification');
        Blade::component('dvui::icon.index');
        Blade::component('dvui::icon.instagram');
        Blade::component('dvui::icon.key');
        Blade::component('dvui::icon.language');
        Blade::component('dvui::icon.lifebuoy');
        Blade::component('dvui::icon.link');
        Blade::component('dvui::icon.megaphone');
        Blade::component('dvui::icon.microphone');
        Blade::component('dvui::icon.moon');
        Blade::component('dvui::icon.newspaper');
        Blade::component('dvui::icon.nosymbol');
        Blade::component('dvui::icon.photo');
        Blade::component('dvui::icon.power');
        Blade::component('dvui::icon.printer');
        Blade::component('dvui::icon.qrcode');
        Blade::component('dvui::icon.radio');
        Blade::component('dvui::icon.receiptpercent');
        Blade::component('dvui::icon.rss');
        Blade::component('dvui::icon.scale');
        Blade::component('dvui::icon.scissors');
        Blade::component('dvui::icon.share');
        Blade::component('dvui::icon.sparkles');
        Blade::component('dvui::icon.star');
        Blade::component('dvui::icon.sun');
        Blade::component('dvui::icon.tag');
        Blade::component('dvui::icon.ticket');
        Blade::component('dvui::icon.trash');
        Blade::component('dvui::icon.trophy');
        Blade::component('dvui::icon.truck');
        Blade::component('dvui::icon.tv');
        Blade::component('dvui::icon.wallet');
        Blade::component('dvui::icon.wifi');
        Blade::component('dvui::icon.window');
        Blade::component('dvui::list');
        Blade::component('dvui::group');
        Blade::component('dvui::group.item');
        Blade::component('dvui::group.link');
        Blade::component('dvui::offcanvas.button');
        Blade::component('dvui::pages.page_icons');
        Blade::component('dvui::stepper');
        Blade::component('dvui::stepper.item.item');
        Blade::component('dvui::stepper.item.content');
        Blade::component('dvui::stepper.item.head');
        Blade::component('dvui::tab');
        Blade::component('dvui::tab.item');
        Blade::component('dvui::tab.content');
        Blade::component('dvui::tab.content.item');
        Blade::component('dvui::timeline');
        Blade::component('dvui::timeline.item');
        Blade::component('dvui::timeline.item.content');
        Blade::component('dvui::timeline.item.header');
        Blade::component('dvui::badge');
        Blade::component('dvui::card');
        Blade::component('dvui::chips');
        Blade::component('dvui::link');
        Blade::component('dvui::modal');
        Blade::component('dvui::notification');
        Blade::component('dvui::range');
        Blade::component('dvui::spinner');
        Blade::component('dvui::test');
        Blade::component('dvui::toast');

        Blade::component('dvui::icon.button.group');
        Blade::component('dvui::icon.rating.star', Star::class);
        Blade::component('dvui::icon.rating.heart', Heart::class);
        Blade::component('dvui::icon.rating.face', Face::class);
//        \Blade::component('dvui::icon.folder.solid', Solid::class);
//        \Blade::component('dvui::icon.folder.outline', Outline::class);
    }
}
