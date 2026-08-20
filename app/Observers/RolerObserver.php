<?php

namespace App\Observers;

use App\Helpers\Helper;
use App\Models\Role;
use Illuminate\Support\Facades\Log;

class RolerObserver
{
    /**
     * Handle the Role "created" event.
     */
    public function created(Role $role): void
    {
        Log::info('إضافة بيانات', ['role_id' => $role->id]);
        Helper::logAction($role, 'إضافة بيانات');
    }

    /**
     * Handle the Role "updated" event.
     */
    public function updated(Role $role): void
    {
        Log::info('تحديث البيانات', ['role_id' => $role->id , 'changes' => $role->getChanges()]);
        Helper::logAction($role, 'تحديث البيانات');
    }

    /**
     * Handle the Role "deleted" event.
     */
    public function deleted(Role $role): void
    {
        Log::info('حذف البيانات', ['role_id' => $role->id]);
        Helper::logAction($role, 'حذف البيانات');
    }

    /**
     * Handle the Role "restored" event.
     */
    public function restored(Role $role): void
    {
        //
    }

    /**
     * Handle the Role "force deleted" event.
     */
    public function forceDeleted(Role $role): void
    {
        //
    }
}
