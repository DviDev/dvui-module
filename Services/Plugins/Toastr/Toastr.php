<?php

namespace Modules\DvUi\Services\Plugins\Toastr;

use Livewire\Component;

class Toastr
{
    protected Component $component;
    protected string $msg;
    protected string $type;
    protected Position $positionClass;
    protected bool $closeButton;
    protected bool $newestOnTop;
    protected bool $debug;
    protected bool $progressBar;
    protected bool $preventDuplicates;
    protected $onclick;
    protected int $showDuration;
    protected int $hideDuration;
    protected int $timeOut;
    protected int $extendedTimeOut;
    protected string $showEasing;
    protected string $hideEasing;
    protected string $showMethod;
    protected string $hideMethod;

    public static function instance(Component $component): self
    {
        $obj = new self;
        $obj->component = $component;
        return $obj;
    }

    public function success(string $msg): self
    {
        $this->msg = $msg;
        $this->type = 'success';
        return $this;
    }

    public function info(string $msg): self
    {
        $this->msg = $msg;
        $this->type = 'info';
        return $this;
    }

    public function warning(string $msg): self
    {
        $this->msg = $msg;
        $this->type = 'warning';
        return $this;
    }

    public function error(string $msg): self
    {
        $this->msg = $msg;
        $this->type = 'error';
        return $this;
    }

    public function position(Position $position): self
    {
        $this->positionClass = $position;
        return $this;
    }

    public function dismissible(): self
    {
        $this->closeButton = true;
        return $this;
    }

    public function newestOnTop(): self
    {
        $this->newestOnTop = true;
        return $this;
    }

    public function debug(): self
    {
        $this->debug = true;
        return $this;
    }

    public function progressBar(): self
    {
        $this->progressBar = true;
        return $this;
    }

    public function preventDuplicates(): self
    {
        $this->preventDuplicates = true;
        return $this;
    }

    public function onclick($action): self
    {
        $this->onclick = $action;
        return $this;
    }

    public function showDuration(int $milliseconds): self
    {
        $this->showDuration = $milliseconds;
        return $this;
    }

    public function hideDuration(int $milliseconds): self
    {
        $this->hideDuration = $milliseconds;
        return $this;
    }

    public function timeOut(int $milliseconds): self
    {
        $this->timeOut = $milliseconds;
        return $this;
    }

    public function extendedTimeOut(int $milliseconds): self
    {
        $this->extendedTimeOut = $milliseconds;
        return $this;
    }

    public function showEasing(string $method): self
    {
        $this->showEasing = $method;
        return $this;
    }

    public function hideEasing(string $method): self
    {
        $this->hideEasing = $method;
        return $this;
    }

    public function showMethod(string $method): self
    {
        $this->showMethod = $method;
        return $this;
    }

    public function hideMethod(string $method): self
    {
        $this->hideMethod = $method;
        return $this;
    }

    public function dispatch()
    {
        $this->component->dispatchBrowserEvent('toastr', [
            'type' => $this->type,
            'msg' => $this->msg,
            'closeButton' => $this->closeButton ?? true,
            'debug' => $this->debug ?? false,
            'newestOnTop' => $this->newestOnTop ?? false,
            'progressBar' => $this->progressBar ?? true,
            'positionClass' => $this->positionClass ?? Position::topRight->value,
            'preventDuplicates' => $this->preventDuplicates ?? false,
            'onclick' => $this->onclick,
            'showDuration' => $this->showDuration ?? 300,
            'hideDuration' => $this->hideDuration ?? 1000,
            'timeOut' => $this->timeOut ?? 5000,
            'extendedTimeOut' => $this->extendedTimeOut ?? 1000,
            'showEasing' => $this->showEasing ?? 'swing',
            'hideEasing' => $this->hideEasing ?? 'linear',
            'showMethod' => $this->showMethod ?? 'fadeIn',
            'hideMethod' => $this->hideMethod ?? 'fadeOut',
        ]);
    }
}
