<?php

namespace Modules\DvUi\Entities;

trait ComponentCheck
{
    public $classes_;
    public $color_classes_;
    public $text_sizes_;

    public function init()
    {
        $this->classes_ = str($this->attributes->get('class'));
        $color_classes_ = config('dvui.text-colors');
        $text_sizes_ = config('dvui.text-sizes');
    }
    public function somethingStartsWith($term): bool
    {
        $classes = str($this->attributes['class']);
        return $classes->explode(' ')
            ->filter(fn($class) => str_starts_with($class, $term))
            ->isNotEmpty();
    }
}
