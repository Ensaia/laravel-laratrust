<?php

namespace App\Observers;

use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        Log::info('إضافة بيانات', ['user_email' => $user->email]);
        Helper::logAction($user, 'إضافة بيانات');
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        Log::info('تحديث البيانات', ['user_id' => $user->id , 'changes' => $user->getChanges()]);
        Helper::logAction($user, 'تحديث البيانات');
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        Log::info('حذف البيانات', ['user_id' => $user->id]);
        Helper::logAction($user, 'حذف البيانات');
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
