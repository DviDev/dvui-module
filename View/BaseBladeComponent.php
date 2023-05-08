<?php

namespace Modules\DvUi\View;

use Illuminate\View\Component;

abstract class BaseBladeComponent extends Component
{
    public function __construct(public ?array $attr)
    {
    }
}
