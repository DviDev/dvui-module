<?php

namespace Modules\DvUi\Entities\DvUiTest;

use Modules\Base\Entities\BaseEntityModel;
use Modules\DvUi\Models\DvUiTestModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read DvUiTestModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class DvUiTestEntityModel extends BaseEntityModel
{
    use DvUiTestProps;
}
