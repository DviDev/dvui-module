<?php

declare(strict_types=1);

namespace Modules\DvUi\Services;

use Illuminate\View\ComponentSlot;

trait ComponentCheck
{
    public $classes_;

    public $color_classes_;

    public $text_sizes_;

    public static function classesStartWith($string, ?ComponentSlot $target = null, $classes = [])
    {
        $classes = $target ? $target->attributes->get('class') : $classes;

        return str($classes)
            ->explode(' ')
            ->filter(fn ($c) => str_starts_with($c, $string))
            ->implode(' ');
    }

    public function init()
    {
        $this->classes_ = str($this->attributes->get('class'));
        $color_classes_ = config('dvui.text-colors');
        $text_sizes_ = config('dvui.text-sizes');
    }

    public function classesContainColor(?ComponentSlot $target = null)
    {
        $classes = $target ? $target->attributes->get('class') : $this->attributes['class'];

        return str($classes)->contains(config('dvui.text-colors'));
    }

    public function onlyClassesStartWith($string, ?ComponentSlot $target = null)
    {
        return static::classesStartWith($string, $target, $this->attributes['class']);
    }

    public function classesContain($class, ?ComponentSlot $target = null)
    {
        $classes = $target ? $target->attributes->get('class') : $this->attributes['class'];

        return str($classes)
            ->explode(' ')
            ->contains($class);
    }

    public function somethingStartsWith($term, ?ComponentSlot $target = null): bool
    {
        $classes = $target ? $target->attributes->get('class') : $this->attributes['class'];

        return str($classes)
            ->explode(' ')
            ->filter(fn ($class) => str_starts_with($class, $term))
            ->isNotEmpty();
    }
}
