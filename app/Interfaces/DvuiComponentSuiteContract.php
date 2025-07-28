<?php

namespace Modules\DvUi\Interfaces;

interface DvuiComponentSuiteContract
{
    public function getSuiteIdentifier(): string;

    public function getComponentMappings(): array;
}
