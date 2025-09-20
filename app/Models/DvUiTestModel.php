<?php

declare(strict_types=1);

namespace Modules\DvUi\Models;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\DvUi\Entities\DvUiTest\DvUiTestEntityModel;
use Modules\DvUi\Entities\DvUiTest\DvUiTestProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read DvUiTestModel $model
 *
 * @method DvUiTestEntityModel toEntity()
 */
final class DvUiTestModel extends BaseModel
{
    use DvUiTestProps;

    public static function table($alias = null): string
    {
        return self::dbTable('dvui_tests', $alias);
    }

    public function modelEntity(): string
    {
        return DvUiTestEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = DvUiTestModel::class;
        };
    }
}
