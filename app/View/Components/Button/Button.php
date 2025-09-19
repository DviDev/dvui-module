<?php

declare(strict_types=1);

namespace Modules\DvUi\View\Components\Button;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\DvUi\Enums\DvuiComponentAlias;

final class Button extends Component
{
    /**
     * Create a new component instance
     *
     * @return void
     */
    public function __construct(
        public bool $noColor = false,
        public bool $primary = false,
        public bool $secondary = false,
        public bool $success = false,
        public bool $danger = false,
        public bool $warning = false,
        public bool $attention = false,
        public bool $info = false,
        public bool $light = false,
        public bool $dark = false,
        public bool $link = false,
        public string $type = 'button',
        public ?string $title = null,
        public ?string $label = null,
        public bool $ripple = false,
        public bool $rounded = false,
        public bool $pill = false,
        public bool $shadow = false,
        public bool $border = false,
        public bool $xs = false,
        public bool $sm = false,
        public bool $md = false,
        public bool $lg = false,
        public bool $xlg = false,
        public bool $disabled = false,
        public bool $full = false,
        public ?string $id = null,
        public ?string $icon = null,
        public ?string $confirm = null,
        public ?string $action = null,
        public ?string $confirm_type = null,
        public ?string $popover = null,
        public ?string $pop_title = null,
    ) {
        $this->id = $id ?? 'btn_'.rand(1000, 2000);

        $this->pop_title = $this->pop_title ?: $this->label;
    }

    public function render(): View
    {
        return view('dvui::components.button.index');
    }

    public function borderColor()
    {
        $item = collect([
            ['color' => 'blue', 'value' => $this->primary],
            ['color' => 'purple', 'value' => $this->secondary],
            ['color' => 'green', 'value' => $this->success],
            ['color' => 'red', 'value' => $this->danger],
            ['color' => 'yellow', 'value' => $this->warning],
            ['color' => 'blue', 'value' => $this->info],
            ['color' => 'transparent', 'value' => $this->link],
            ['color' => 'light', 'value' => $this->light],
            ['color' => 'gray', 'value' => $this->dark],
        ])->reject(fn ($color) => ! $color || ! $color['value'])->last();

        return $item ? $item['color'] : null;
    }

    public function componentAlias(): DvuiComponentAlias
    {
        return DvuiComponentAlias::Button;
    }
}
