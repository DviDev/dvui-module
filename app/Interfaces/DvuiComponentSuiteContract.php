<?php

declare(strict_types=1);

namespace Modules\DvUi\Interfaces;

interface DvuiComponentSuiteContract
{
    public function getSuiteIdentifier(): string;

    public function getComponentMappings(): array;
}
