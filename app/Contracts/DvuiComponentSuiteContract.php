<?php

declare(strict_types=1);

namespace Modules\DvUi\Contracts;

interface DvuiComponentSuiteContract
{
    public function getSuiteIdentifier(): string;

    public function getComponentMappings(): array;
}
