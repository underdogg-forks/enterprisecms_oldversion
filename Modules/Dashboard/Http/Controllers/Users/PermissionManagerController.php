<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;
use Cms\Modules\Auth\Datatables\PermissionManager;
use Modules\Dashboard\Traits\DataTableTrait;

class PermissionManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function permissionManager()
    {
        return $this->renderDataTable(with(new PermissionManager())->boot());
    }
}
