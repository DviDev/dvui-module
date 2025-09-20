<?php

declare(strict_types=1);

namespace Modules\DvUi\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface MultiSelectSearchInterface
{
    public static function apply(Builder $builder, array $searchFields, string $searchTerm): Builder;
}
