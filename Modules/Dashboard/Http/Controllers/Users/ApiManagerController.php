<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;
use Cms\Modules\Auth\Datatables\ApiKeyManager;
use Modules\Dashboard\Traits\DataTableTrait;

class ApiManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new ApiKeyManager())->boot());
    }
}
