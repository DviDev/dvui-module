<?php

namespace Modules\DvUi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
class DvUiTestModel extends BaseModel
{
    use DvUiTestProps;
    use HasFactory;

    public static function table($alias = null): string
    {
        return self::dbTable('dvui_tests', $alias);
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = DvUiTestModel::class;
        };
    }

    public function modelEntity(): string
    {
        return DvUiTestEntityModel::class;
    }
}
