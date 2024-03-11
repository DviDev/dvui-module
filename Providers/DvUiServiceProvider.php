<?php

namespace Modules\DvUi\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\DvUi\View\Components;
use Modules\DvUi\View\Components\Alert;
use Modules\DvUi\View\Components\Badge;
use Modules\DvUi\View\Components\Button\Button;
use Modules\DvUi\View\Components\Button\Group;
use Modules\DvUi\View\Components\Card;
use Modules\DvUi\View\Components\Carousel\Carousel;
use Modules\DvUi\View\Components\Carousel\Item;
use Modules\DvUi\View\Components\Chips;
use Modules\DvUi\View\Components\Dropdown\Dropdown;
use Modules\DvUi\View\Components\Dropdown\Item as DropdownItem;
use Modules\DvUi\View\Components\Icon;
use Modules\DvUi\View\Components\Icon\Adjustment\Horizontal;
use Modules\DvUi\View\Components\Icon\Adjustment\Vertical;
use Modules\DvUi\View\Components\Icon\ArquiveBox\ArrowDown;
use Modules\DvUi\View\Components\Icon\ArquiveBox\Box;
use Modules\DvUi\View\Components\Icon\ArquiveBox\XMark;
use Modules\DvUi\View\Components\Icon\Arrow;
use Modules\DvUi\View\Components\Icon\Arrow\Down;
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
            $this->loadJsonTranslationsFrom($langPath);
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
        Blade::component('dvui::badge', Badge::class);
        Blade::component('dvui::button', Button::class);
        Blade::component('dvui::button.group', Group::class);
        Blade::component('dvui::carousel', Carousel::class);
        Blade::component('dvui::carousel.item', Item::class);
        Blade::component('dvui::card', Card::class);
        Blade::component('dvui::chips', Chips::class);
        Blade::component('dvui::dropdown', Dropdown::class);
        Blade::component('dvui::dropdown.item', DropdownItem::class);
        #region[icons]
        Blade::component('dvui::icon', Icon\Icon::class);
        Blade::component('dvui::icon.adjustment.horizontal', Horizontal::class);
        Blade::component('dvui::icon.adjustment.vertical', Vertical::class);
        Blade::component('dvui::icon.arquivebox', Box::class);
        Blade::component('dvui::icon.arquivebox.arrowdown', ArrowDown::class);
        Blade::component('dvui::icon.arquivebox.xmark', XMark::class);
        Blade::component('dvui::icon.arrow.down', Down::class);
        Blade::component('dvui::icon.arrow.down.circle', Down\Circle::class);
        Blade::component('dvui::icon.arrow.down.left', Down\Left::class);
        Blade::component('dvui::icon.arrow.down.long', Down\Long::class);
        Blade::component('dvui::icon.arrow.down.onsquare', Down\OnSquare::class);
        Blade::component('dvui::icon.arrow.down.onsquarestack', Down\OnSquareStack::class);
        Blade::component('dvui::icon.arrow.down.right', Down\Right::class);
        Blade::component('dvui::icon.arrow.down.small', Down\Small::class);
        Blade::component('dvui::icon.arrow.down.tray', Down\Tray::class);
        Blade::component('dvui::icon.arrow.down.trending', Down\Trending::class);
        Blade::component('dvui::icon.arrow.down.uturn', Down\Uturn::class);
        Blade::component('dvui::icon.arrow.left.circle', Arrow\Left\Circle::class);
        Blade::component('dvui::icon.arrow.left.index', Arrow\Left\Left::class);
        Blade::component('dvui::icon.arrow.left.long', Arrow\Left\Long::class);
        Blade::component('dvui::icon.arrow.left.onrectangle', Arrow\Left\OnRectangle::class);
        Blade::component('dvui::icon.arrow.left.start-on-rectangle', Arrow\Left\StartOnRectangle::class);
        Blade::component('dvui::icon.arrow.left.small', Arrow\Left\Small::class);
        Blade::component('dvui::icon.arrow.left.uturn', Arrow\Left\Uturn::class);
        Blade::component('dvui::icon.arrow.path', Icon\Arrow\Path\Path::class);
        Blade::component('dvui::icon.arrow.path.roundedsquare', Arrow\Path\RoundedSquare::class);
        Blade::component('dvui::icon.arrow.poiting.in', Arrow\Pointing\In::class);
        Blade::component('dvui::icon.arrow.poiting.out', Arrow\Pointing\Out::class);
        Blade::component('dvui::icon.arrow.right', Arrow\Right\Right::class);
        Blade::component('dvui::icon.arrow.right.circle', Arrow\Right\Circle::class);
        Blade::component('dvui::icon.arrow.right.long', Arrow\Right\Long::class);
        Blade::component('dvui::icon.arrow.right.onretangle', Arrow\Right\OnRectangle::class);
        Blade::component('dvui::icon.arrow.right.small', Arrow\Right\Small::class);
        Blade::component('dvui::icon.arrow.right.uturn', Arrow\Right\Uturn::class);
        Blade::component('dvui::icon.arrow.right.uturn', Arrow\Right\Uturn::class);
        Blade::component('dvui::icon.arrow.top.rightonsquare', Arrow\Top\RightOnSquare::class);
        Blade::component('dvui::icon.arrow.up', Arrow\Up\Up::class);
        Blade::component('dvui::icon.arrow.up.circle', Arrow\Up\Circle::class);
        Blade::component('dvui::icon.arrow.up.left', Arrow\Up\Left::class);
        Blade::component('dvui::icon.arrow.up.long', Arrow\Up\Long::class);
        Blade::component('dvui::icon.arrow.up.onsquare', Arrow\Up\OnSquare::class);
        Blade::component('dvui::icon.arrow.up.onsquarestack', Arrow\Up\OnSquare::class);
        Blade::component('dvui::icon.arrow.up.right', Arrow\Up\Right::class);
        Blade::component('dvui::icon.arrow.up.small', Arrow\Up\Small::class);
        Blade::component('dvui::icon.arrow.up.tray', Arrow\Up\Tray::class);
        Blade::component('dvui::icon.arrow.up.trending', Arrow\Up\Trending::class);
        Blade::component('dvui::icon.arrow.up.uturn', Arrow\Up\Uturn::class);
        Blade::component('dvui::icon.arrow.down', Arrow\Down::class);
        Blade::component('dvui::icon.arrow.rightleft', Arrow\RigthLeft::class);
        Blade::component('dvui::icon.arrow.updown', Arrow\UpDown::class);
        Blade::component('dvui::icon.backspace.path', Icon\Backspace\Path::class);
        Blade::component('dvui::icon.bars.arrow.down', Icon\Bars\Arrow\Down::class);
        Blade::component('dvui::icon.bars.arrow.up', Icon\Bars\Arrow\Up::class);
        Blade::component('dvui::icon.bars.battery.complete', Icon\Bars\Battery\Complete::class);
        Blade::component('dvui::icon.bars.battery.half', Icon\Bars\Battery\Half::class);
        Blade::component('dvui::icon.bars.battery.zero', Icon\Bars\Battery\Zero::class);
        Blade::component('dvui::icon.bars.bottom.left', Icon\Bars\Bottom\Left::class);
        Blade::component('dvui::icon.bars.bottom.right', Icon\Bars\Bottom\Right::class);
        Blade::component('dvui::icon.bars.center.left', Icon\Bars\Center\Left::class);
        Blade::component('dvui::icon.bars.bars2', Icon\Bars\Bars2::class);
        Blade::component('dvui::icon.bars.bars3', Icon\Bars\Bars3::class);
        Blade::component('dvui::icon.bars.bars4', Icon\Bars\Bars4::class);
        Blade::component('dvui::icon.bars.beaker', Icon\Bars\Beaker::class);
        Blade::component('dvui::icon.bell', Icon\Bell\Bell::class);
        Blade::component('dvui::icon.bell.alert', Icon\Bell\Alert::class);
        Blade::component('dvui::icon.bell.slash', Icon\Bell\Slash::class);
        Blade::component('dvui::icon.bell.snooze', Icon\Bell\Snooze::class);
        Blade::component('dvui::icon.bolt', Icon\Bolt\Bolt::class);
        Blade::component('dvui::icon.bolt.slash', Icon\Bolt\Slash::class);
        Blade::component('dvui::icon.book.open', Icon\Book\Open::class);
        Blade::component('dvui::icon.bookmark', Icon\Bookmark\Bookmark::class);
        Blade::component('dvui::icon.bookmark.slash', Icon\Bookmark\Slash::class);
        Blade::component('dvui::icon.bookmark.square', Icon\Bookmark\Square::class);
        Blade::component('dvui::icon.bug.ant', Icon\Bug\Ant::class);
        Blade::component('dvui::icon.building.library', Icon\Building\Library::class);
        Blade::component('dvui::icon.building.office', Icon\Building\Office::class);
        Blade::component('dvui::icon.building.office2', Icon\Building\Office2::class);
        Blade::component('dvui::icon.building.storefront', Icon\Building\Storefront::class);
        Blade::component('dvui::icon.calendar', Icon\Calendar\Calendar::class);
        Blade::component('dvui::icon.calendar.days', Icon\Calendar\Days::class);
        Blade::component('dvui::icon.camera', Icon\Camera\Camera::class);
        Blade::component('dvui::icon.chart.bar', Icon\Chart\Bar\Bar::class);
        Blade::component('dvui::icon.chart.bar.square', Icon\Chart\Bar\Square::class);
        Blade::component('dvui::icon.chart.pie', Icon\Chart\Pie\Pie::class);
        Blade::component('dvui::icon.chat.bubble.bottom.center', Icon\Chat\Bubble\Bottom\Center::class);
        Blade::component('dvui::icon.chat.bubble.bottom.text.center', Icon\Chat\Bubble\Bottom\Text\Center::class);
        Blade::component('dvui::icon.chat.bubble.left', Icon\Chat\Bubble\Left\Left::class);
        Blade::component('dvui::icon.chat.bubble.left.oval', Icon\Chat\Bubble\Left\Oval\Oval::class);
        Blade::component('dvui::icon.chat.bubble.left.oval.ellipsis', Icon\Chat\Bubble\Left\Oval\Ellipsis::class);
        Blade::component('dvui::icon.chat.bubble.left.right', Icon\Chat\Bubble\Left\Right::class);
        Blade::component('dvui::icon.check', Icon\Check\Check::class);
        Blade::component('dvui::icon.check.badge', Icon\Check\Badge::class);
        Blade::component('dvui::icon.check.circle', Icon\Check\Circle::class);
        Blade::component('dvui::icon.chevron.double.down', Icon\Chevron\Double\Down::class);
        Blade::component('dvui::icon.chevron.double.left', Icon\Chevron\Double\Left::class);
        Blade::component('dvui::icon.chevron.double.right', Icon\Chevron\Double\Right::class);
        Blade::component('dvui::icon.chevron.double.up', Icon\Chevron\Double\Up::class);
        Blade::component('dvui::icon.chevron.down', Icon\Chevron\Down\Down::class);
        Blade::component('dvui::icon.chevron.down.double', Icon\Chevron\Down\Double::class);
        Blade::component('dvui::icon.chevron.left', Icon\Chevron\Left\Left::class);
        Blade::component('dvui::icon.chevron.right', Icon\Chevron\Right\Right::class);
        Blade::component('dvui::icon.chevron.up', Icon\Chevron\Up::class);
        Blade::component('dvui::icon.circle.stack', Icon\Circle\Stack::class);
        Blade::component('dvui::icon.clipboard', Icon\Clipboard\Clipboard::class);
        Blade::component('dvui::icon.clipboard.document', Icon\Clipboard\Document\Document::class);
        Blade::component('dvui::icon.clipboard.document.check', Icon\Clipboard\Document\Check::class);
        Blade::component('dvui::icon.clipboard.document.list', Icon\Clipboard\Document\DocumentList::class);
        Blade::component('dvui::icon.cloud', Icon\Cloud\Cloud::class);
        Blade::component('dvui::icon.cloud.arrow.down', Icon\Cloud\Arrow\Down::class);
        Blade::component('dvui::icon.cloud.arrow.up', Icon\Cloud\Arrow\Up::class);
        Blade::component('dvui::icon.code.bracelet', Icon\Code\Bracket\Bracket::class);
        Blade::component('dvui::icon.code.bracelet.square', Icon\Code\Bracket\Square::class);
        Blade::component('dvui::icon.cog.eight.tooth', Icon\Cog\Eight\Tooth::class);
        Blade::component('dvui::icon.cog.six.tooth', Icon\Cog\Six\Tooth::class);
        Blade::component('dvui::icon.cog.cog', Icon\Cog\Cog::class);
        Blade::component('dvui::icon.command.line', Icon\Command\Line::class);
        Blade::component('dvui::icon.computer.desktop', Icon\Computer\Desktop::class);
        Blade::component('dvui::icon.cpu.chip', Icon\Cpu\Chip::class);
        Blade::component('dvui::icon.credit.card', Icon\Credit\Card::class);
        Blade::component('dvui::icon.cube', Icon\Cube\Cube::class);
        Blade::component('dvui::icon.cube.transparent', Icon\Cube\Transparent::class);
        Blade::component('dvui::icon.currency.bangladeshi', Icon\Currency\Bangladeshi::class);
        Blade::component('dvui::icon.currency.dollar', Icon\Currency\Dollar::class);
        Blade::component('dvui::icon.currency.euro', Icon\Currency\Euro::class);
        Blade::component('dvui::icon.currency.pound', Icon\Currency\Pound::class);
        Blade::component('dvui::icon.currency.rupee', Icon\Currency\Rupee::class);
        Blade::component('dvui::icon.currency.yen', Icon\Currency\Yen::class);
        Blade::component('dvui::icon.cursor.arrow.rays', Icon\Cursor\Arrow\Rays::class);
        Blade::component('dvui::icon.cursor.arrow.ripple', Icon\Cursor\Arrow\Ripple::class);
        Blade::component('dvui::icon.device.phone.mobile', Icon\Device\Phone\Mobile::class);
        Blade::component('dvui::icon.device.tablet', Icon\Device\Tablet::class);
        Blade::component('dvui::icon.document', Icon\Document\Document::class);
        Blade::component('dvui::icon.document.arrow.down', Icon\Document\Arrow\Down::class);
        Blade::component('dvui::icon.document.arrow.up', Icon\Document\Arrow\Up::class);
        Blade::component('dvui::icon.document.chart.bar', Icon\Document\Chart\Bar::class);
        Blade::component('dvui::icon.document.check', Icon\Document\Check::class);
        Blade::component('dvui::icon.document.duplicate', Icon\Document\Duplicate::class);
        Blade::component('dvui::icon.document.magnify', Icon\Document\Magnify::class);
        Blade::component('dvui::icon.document.minus', Icon\Document\Minus::class);
        Blade::component('dvui::icon.document.plus', Icon\Document\Plus::class);
        Blade::component('dvui::icon.document.text', Icon\Document\Text::class);
        Blade::component('dvui::icon.dropdown', Icon\Dropdown\Index::class);
        Blade::component('dvui::icon.ellipsis.envelope', Icon\Ellipsis\Envelope\Envelope::class);
        Blade::component('dvui::icon.ellipsis.envelope.open', Icon\Ellipsis\Envelope\Open::class);
        Blade::component('dvui::icon.ellipsis.exclamation.circle', Icon\Ellipsis\Exclamation\Circle::class);
        Blade::component('dvui::icon.ellipsis.horizontal', Icon\Ellipsis\Horizontal\Horizontal::class);
        Blade::component('dvui::icon.ellipsis.horizontal.circle', Icon\Ellipsis\Horizontal\Circle::class);
        Blade::component('dvui::icon.ellipsis.vertical', Icon\Ellipsis\Vertical\Vertical::class);
        Blade::component('dvui::icon.envelope', Icon\Envelope\Envelope::class);
        Blade::component('dvui::icon.envelope.open', Icon\Envelope\Open::class);
        Blade::component('dvui::icon.exclamation', Icon\Exclamation\Exclamation::class);
        Blade::component('dvui::icon.exclamation.circle', Icon\Exclamation\Circle::class);
        Blade::component('dvui::icon.exclamation.triangle', Icon\Exclamation\Triangle::class);
        Blade::component('dvui::icon.eye', Icon\Eye\Eye::class);
        Blade::component('dvui::icon.eye.dropper', Icon\Eye\Dropper::class);
        Blade::component('dvui::icon.eye.slash', Icon\Eye\Slash::class);
        Blade::component('dvui::icon.face.frown', Icon\Face\Frown::class);
        Blade::component('dvui::icon.face.smile', Icon\Face\Smile::class);
        Blade::component('dvui::icon.finger.print', Icon\Finger\FingerPrint::class);
        Blade::component('dvui::icon.folder', Icon\Folder\Folder::class);
        Blade::component('dvui::icon.folder.arrow.down', Icon\Folder\Arrow\Down::class);
        Blade::component('dvui::icon.folder.minus', Icon\Folder\Minus::class);
        Blade::component('dvui::icon.folder.open', Icon\Folder\Open::class);
        Blade::component('dvui::icon.folder.plus', Icon\Folder\Plus::class);
        Blade::component('dvui::icon.git', Icon\Gift\Gift::class);
        Blade::component('dvui::icon.git.top', Icon\Gift\Top::class);
        Blade::component('dvui::icon.globe.asia.australia', Icon\Globe\Asia\Australia::class);
        Blade::component('dvui::icon.globe.europe.africca', Icon\Globe\Europe\Africa::class);
        Blade::component('dvui::icon.globe.hand.raised', Icon\Globe\Hand\Raised::class);
        Blade::component('dvui::icon.globe.alt', Icon\Globe\Alt::class);
        Blade::component('dvui::icon.globe.americas', Icon\Globe\Americas::class);
        Blade::component('dvui::icon.hand.thumb.down', Icon\Hand\Thumb\Down::class);
        Blade::component('dvui::icon.hand.thumb.up', Icon\Hand\Thumb\Up::class);
        Blade::component('dvui::icon.hand.hashtag', Icon\Hand\Hashtag::class);
        Blade::component('dvui::icon.hand.raised', Icon\Hand\Raised::class);
        Blade::component('dvui::icon.home', Icon\Home\Home::class);
        Blade::component('dvui::icon.home.modern', Icon\Home\Modern::class);
        Blade::component('dvui::icon.inbox', Icon\Inbox\Inbox::class);
        Blade::component('dvui::icon.inbox.arrow.down', Icon\Inbox\Arrow\Down::class);
        Blade::component('dvui::icon.inbox.stack', Icon\Inbox\Stack::class);
        Blade::component('dvui::icon.information.circle', Icon\Information\Circle::class);
        Blade::component('dvui::icon.light.bulb', Icon\Light\Bulb::class);
        Blade::component('dvui::icon.list.bullet', Icon\List\Bullet::class);
        Blade::component('dvui::icon.lock.closed', Icon\Lock\Closed::class);
        Blade::component('dvui::icon.lock.open', Icon\Lock\Open::class);
        Blade::component('dvui::icon.magnifying', Icon\Magnifying\Magnifying::class);
        Blade::component('dvui::icon.magnifying.glass', Icon\Magnifying\Glass::class);
        Blade::component('dvui::icon.magnifying.glass.circle', Icon\Magnifying\Glass\Circle::class);
        Blade::component('dvui::icon.magnifying.glass.minus', Icon\Magnifying\Glass\Minus::class);
        Blade::component('dvui::icon.magnifying.glass.plus', Icon\Magnifying\Glass\Plus::class);
        Blade::component('dvui::icon.map', Icon\Map\Map::class);
        Blade::component('dvui::icon.map.in', Icon\Map\In::class);
        Blade::component('dvui::icon.menu.menu', Icon\Menu\Menu::class);
        Blade::component('dvui::icon.minus', Icon\Minus\Minus::class);
        Blade::component('dvui::icon.minus.circle', Icon\Minus\Circle::class);
        Blade::component('dvui::icon.minus.small', Icon\Minus\Small::class);
        Blade::component('dvui::icon.musical.note', Icon\Musical\Note::class);
        Blade::component('dvui::icon.paint.brush', Icon\Paint\Brush::class);
        Blade::component('dvui::icon.paper.airplane', Icon\Paper\Airplane::class);
        Blade::component('dvui::icon.paper.clip', Icon\Paper\Clip::class);
        Blade::component('dvui::icon.pause', Icon\Pause\Pause::class);
        Blade::component('dvui::icon.pause.circle', Icon\Pause\Circle::class);
        Blade::component('dvui::icon.pencil', Icon\Pencil\Pencil::class);
        Blade::component('dvui::icon.pencil', Icon\Pencil\Square::class);
        Blade::component('dvui::icon.phone', Icon\Phone\Phone::class);
        Blade::component('dvui::icon.phone.arrow.down.left', Icon\Phone\Arrow\Down\Left::class);
        Blade::component('dvui::icon.phone.arrow.up.right', Icon\Phone\Arrow\Up\Right::class);
        Blade::component('dvui::icon.phone.xmark', Icon\Phone\XMark::class);
        Blade::component('dvui::icon.play', Icon\Play\Play::class);
        Blade::component('dvui::icon.play.circle', Icon\Play\Circle::class);
        Blade::component('dvui::icon.play.pause', Icon\Play\Pause::class);
        Blade::component('dvui::icon.plus', Icon\Plus\Plus::class);
        Blade::component('dvui::icon.plus.circle', Icon\Plus\Circle::class);
        Blade::component('dvui::icon.plus.small', Icon\Plus\Small::class);
        Blade::component('dvui::icon.presentation.chart.bar', Icon\Presentation\Chart\Bar::class);
        Blade::component('dvui::icon.presentation.chart.line', Icon\Presentation\Chart\Line::class);
        Blade::component('dvui::icon.puzzle.piece', Icon\Puzzle\Piece::class);
        Blade::component('dvui::icon.question.mark.circle', Icon\Question\Mark\Circle::class);
        Blade::component('dvui::icon.queue.list', Icon\Queue\QueueList::class);
        Blade::component('dvui::icon.rating.face', Icon\Rating\Face::class);
        Blade::component('dvui::icon.rating.heart', Icon\Rating\Heart::class);
        Blade::component('dvui::icon.rating.star', Icon\Rating\Star::class);
        Blade::component('dvui::icon.receipt.percent', Icon\Receipt\Percent::class);
        Blade::component('dvui::icon.receipt.refound', Icon\Receipt\Refund::class);
        Blade::component('dvui::icon.retangle.group', Icon\Retangle\Group::class);
        Blade::component('dvui::icon.retangle.stack', Icon\Retangle\Stack::class);
        Blade::component('dvui::icon.rocket.lauch', Icon\Rocket\Launch::class);
        Blade::component('dvui::icon.server', Icon\Server\Server::class);
        Blade::component('dvui::icon.server.stack', Icon\Server\Stack::class);
        Blade::component('dvui::icon.shield.check', Icon\Shield\Check::class);
        Blade::component('dvui::icon.shield.exclamation', Icon\Shield\Exclamation::class);
        Blade::component('dvui::icon.shopping.bag', Icon\Shopping\Bag::class);
        Blade::component('dvui::icon.shopping.cart', Icon\Shopping\Cart::class);
        Blade::component('dvui::icon.signal', Icon\Signal\Signal::class);
        Blade::component('dvui::icon.signal.slach', Icon\Signal\Slach::class);
        Blade::component('dvui::icon.social.behance', Icon\Social\Behance::class);
        Blade::component('dvui::icon.social.discord', Icon\Social\Discord::class);
        Blade::component('dvui::icon.social.dribble', Icon\Social\Dribble::class);
        Blade::component('dvui::icon.social.facebook', Icon\Social\Facebook::class);
        Blade::component('dvui::icon.social.github', Icon\Social\Github::class);
        Blade::component('dvui::icon.social.google', Icon\Social\Google::class);
        Blade::component('dvui::icon.social.instagran', Icon\Social\Instagram::class);
        Blade::component('dvui::icon.social.linkedin', Icon\Social\Linkedin::class);
        Blade::component('dvui::icon.social.messenger', Icon\Social\Messenger::class);
        Blade::component('dvui::icon.social.pinterest', Icon\Social\Pinterest::class);
        Blade::component('dvui::icon.social.reddit', Icon\Social\Reddit::class);
        Blade::component('dvui::icon.social.slack', Icon\Social\Slack::class);
        Blade::component('dvui::icon.social.snapchat', Icon\Social\Snapchat::class);
        Blade::component('dvui::icon.social.stackoverflow', Icon\Social\Stackoverflow::class);
        Blade::component('dvui::icon.social.telegram', Icon\Social\Telegram::class);
        Blade::component('dvui::icon.social.tiktok', Icon\Social\Tiktok::class);
        Blade::component('dvui::icon.social.twitch', Icon\Social\Twitch::class);
        Blade::component('dvui::icon.social.twiter', Icon\Social\Twiter::class);
        Blade::component('dvui::icon.social.vkontakte', Icon\Social\Vkontakte::class);
        Blade::component('dvui::icon.social.whatsapp', Icon\Social\Whatsapp::class);
        Blade::component('dvui::icon.social.youtube', Icon\Social\Youtube::class);
        Blade::component('dvui::icon.speaker.wave', Icon\Speaker\Wave::class);
        Blade::component('dvui::icon.speaker.xmark', Icon\Speaker\Xmark::class);
        Blade::component('dvui::icon.square.2stack', Icon\Square\Stack2::class);
        Blade::component('dvui::icon.square.3stack3d', Icon\Square\Stack33d::class);
        Blade::component('dvui::icon.square.plus', Icon\Square\Plus::class);
        Blade::component('dvui::icon.square.square2x2', Icon\Square\Square2x2::class);
        Blade::component('dvui::icon.stop', Icon\Stop\Stop::class);
        Blade::component('dvui::icon.stop.circle', Icon\Stop\Circle::class);
        Blade::component('dvui::icon.table.cells', Icon\Table\Cells::class);
        Blade::component('dvui::icon.trash', Icon\Trash\Trash::class);
        Blade::component('dvui::icon.up.left', Icon\Up\Left::class);
        Blade::component('dvui::icon.user', Icon\User\User::class);
        Blade::component('dvui::icon.user.circle', Icon\User\Circle::class);
        Blade::component('dvui::icon.user.group', Icon\User\Group::class);
        Blade::component('dvui::icon.user.minus', Icon\User\Minus::class);
        Blade::component('dvui::icon.user.users', Icon\User\Users::class);
        Blade::component('dvui::icon.user.variable', Icon\User\Variable::class);
        Blade::component('dvui::icon.video.camera', Icon\Video\Camera\Camera::class);
        Blade::component('dvui::icon.video.camera.slash', Icon\Video\Camera\Slash::class);
        Blade::component('dvui::icon.view.finder.circle', Icon\View\Finder\Circle::class);
        Blade::component('dvui::icon.view.columns', Icon\View\Columns::class);
        Blade::component('dvui::icon.wrench', Icon\Wrench\Wrench::class);
        Blade::component('dvui::icon.wrench.screwdriver', Icon\Wrench\Screwdriver::class);
        Blade::component('dvui::icon.x.circle', Icon\X\Circle::class);
        Blade::component('dvui::icon.x.mark', Icon\X\Mark::class);
        Blade::component('dvui::icon.academiccap', Icon\AcademicCap\AcademicCap::class);
        Blade::component('dvui::icon.atsymbol', Icon\Atsymbol\AtSymbol::class);
        Blade::component('dvui::icon.backspace', Icon\Backspace\Backspace::class);
        Blade::component('dvui::icon.backward', Icon\Backward\Backward::class);
        Blade::component('dvui::icon.banknotes', Icon\Banknotes\Banknotes::class);
        Blade::component('dvui::icon.briefcase', Icon\Briefcase\Briefcase::class);
        Blade::component('dvui::icon.cake', Icon\Cake\Cake::class);
        Blade::component('dvui::icon.calculator', Icon\Calculator\Calculator::class);
        Blade::component('dvui::icon.clock', Icon\Clock::class);
        Blade::component('dvui::icon.film', Icon\Film\Film::class);
        Blade::component('dvui::icon.fire', Icon\Fire\Fire::class);
        Blade::component('dvui::icon.flag', Icon\Flag\Flag::class);
        Blade::component('dvui::icon.forward', Icon\Forward\Forward::class);
        Blade::component('dvui::icon.funnel', Icon\Funnel\Funnel::class);
        Blade::component('dvui::icon.gift', Icon\Gif\Gif::class);
        Blade::component('dvui::icon.hashtag', Icon\Hashtag\Hashtag::class);
        Blade::component('dvui::icon.heart', Icon\Heart\Heart::class);
        Blade::component('dvui::icon.home', Icon\Home::class);
        Blade::component('dvui::icon.identification', Icon\Identification\Identification::class);
        Blade::component('dvui::icon.index', Icon\Icon::class);
        Blade::component('dvui::icon.instagram', Icon\Instagram\Instagram::class);
        Blade::component('dvui::icon.key', Icon\Key\Key::class);
        Blade::component('dvui::icon.language', Icon\Language\Language::class);
        Blade::component('dvui::icon.lifebuoy', Icon\Lifebuoy\Lifebuoy::class);
        Blade::component('dvui::icon.link', Icon\Link\Link::class);
        Blade::component('dvui::icon.megaphone', Icon\Megaphone\Megaphone::class);
        Blade::component('dvui::icon.microphone', Icon\Microphone\Microphone::class);
        Blade::component('dvui::icon.moon', Icon\Moon\Moon::class);
        Blade::component('dvui::icon.newspaper', Icon\Newspaper\Newspaper::class);
        Blade::component('dvui::icon.nosymbol', Icon\NoSymbol\NoSymbol::class);
        Blade::component('dvui::icon.photo', Icon\Photo\Photo::class);
        Blade::component('dvui::icon.power', Icon\Power\Power::class);
        Blade::component('dvui::icon.printer', Icon\Printer\Printer::class);
        Blade::component('dvui::icon.qrcode', Icon\Qrcode\Qrcode::class);
        Blade::component('dvui::icon.radio', Icon\Radio\Radio::class);
        Blade::component('dvui::icon.receiptpercent', Icon\ReceiptPercent\ReceiptPercent::class);
        Blade::component('dvui::icon.rss', Icon\Rss\Rss::class);
        Blade::component('dvui::icon.scale', Icon\Scale\Scale::class);
        Blade::component('dvui::icon.scissors', Icon\Scissors\Scissors::class);
        Blade::component('dvui::icon.share', Icon\Share\Share::class);
        Blade::component('dvui::icon.sparkles', Icon\Sparkles\Sparkles::class);
        Blade::component('dvui::icon.star', Icon\Star\Star::class);
        Blade::component('dvui::icon.sun', Icon\Sun\Sun::class);
        Blade::component('dvui::icon.tag', Icon\Tag\Tag::class);
        Blade::component('dvui::icon.ticket', Icon\Ticket\Ticket::class);
        Blade::component('dvui::icon.trash', Icon\Trash\Trash::class);
        Blade::component('dvui::icon.trophy', Icon\Trophy\Trophy::class);
        Blade::component('dvui::icon.truck', Icon\Truck\Truck::class);
        Blade::component('dvui::icon.tv', Icon\Tv\Tv::class);
        Blade::component('dvui::icon.wallet', Icon\Wallet\Wallet::class);
        Blade::component('dvui::icon.wifi', Icon\Wifi\Wifi::class);
        Blade::component('dvui::icon.window', Icon\Window\Window::class);
        #endregion
        Blade::component('dvui::form.fileinput', Components\Form\FileInput::class);
        Blade::component('dvui::form.input', Components\Form\Input::class);
        Blade::component('dvui::form.textarea', Components\Form\Textarea::class);
        Blade::component('dvui::list.group', Components\List\Group\Group::class);
        Blade::component('dvui::list.group.item', Components\List\Group\Item::class);
        Blade::component('dvui::list.group.link', Components\List\Group\Link::class);
        Blade::component('dvui::offcanvas.button', Components\Offcanvas\Button::class);
        Blade::component('dvui::form.select', Components\Form\Select::class);
        Blade::component('dvui::form.select.item', Components\Form\Select\Item::class);
        Blade::component('dvui::stepper', Components\Stepper\Stepper::class);
        Blade::component('dvui::stepper.item', Components\Stepper\Item::class);
        Blade::component('dvui::stepper.item.content', Components\Stepper\Item\Content::class);
        Blade::component('dvui::stepper.item.head', Components\Stepper\Item\Head::class);
        Blade::component('dvui::tab', Components\Tab\Tab::class);
        Blade::component('dvui::tab.item', Components\Tab\Item::class);
        Blade::component('dvui::tab.content', Components\Tab\Content\Content::class);
        Blade::component('dvui::tab.content.item', Components\Tab\Content\Item::class);
        Blade::component('dvui::timeline', Components\Timeline\Timelie::class);
        Blade::component('dvui::timeline.item', Components\Timeline\Item\Item::class);
        Blade::component('dvui::timeline.item.content', Components\Timeline\Item\Content::class);
        Blade::component('dvui::timeline.item.header', Components\Timeline\Item\Header::class);
        Blade::component('dvui::link', Link::class);
        Blade::component('dvui::modal', Components\Modal::class);
        Blade::component('dvui::notification', Components\Notification::class);
        Blade::component('dvui::range', Components\Range::class);
        Blade::component('dvui::spinner', Components\Spinner::class);
        Blade::component('dvui::test', Components\Test::class);
        Blade::component('dvui::toast', Components\Toast::class);
    }
}
