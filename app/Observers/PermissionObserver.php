<?php

namespace App\Observers;

use App\Helpers\Helper;
use App\Models\Permission;
use Illuminate\Support\Facades\Log;

class PermissionObserver
{
    /**
     * Handle the Permission "created" event.
     */
    public function created(Permission $permission): void
    {
        Log::info('إضافة بيانات', ['permission_id' => $permission->id]);
        Helper::logAction($permission, 'إضافة بيانات');
    }

    /**
     * Handle the Permission "updated" event.
     */
    public function updated(Permission $permission): void
    {
        Log::info('تحديث البيانات', ['permission_id' => $permission->id , 'changes' => $permission->getChanges()]);
        Helper::logAction($permission, 'تحديث البيانات');
    }

    /**
     * Handle the Permission "deleted" event.
     */
    public function deleted(Permission $permission): void
    {
        Log::info('حذف البيانات', ['permission_id' => $permission->id]);
        Helper::logAction($permission, 'حذف البيانات');
    }

    /**
     * Handle the Permission "restored" event.
     */
    public function restored(Permission $permission): void
    {
        //
    }

    /**
     * Handle the Permission "force deleted" event.
     */
    public function forceDeleted(Permission $permission): void
    {
        //
    }
}
