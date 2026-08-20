<?php

namespace App\Observers;

use App\Models\UserAction;

class UserActionObserver
{
    /**
     * Handle the UserAction "created" event.
     */
    public function created(UserAction $userAction): void
    {
        $this->logAction($userAction, 'created');
    }

    /**
     * Handle the UserAction "updated" event.
     */
    public function updated(UserAction $userAction): void
    {
        $this->logAction($userAction, 'updated');
    }

    /**
     * Handle the UserAction "deleted" event.
     */
    public function deleted(UserAction $userAction): void
    {
        $this->logAction($userAction, 'deleted');
    }

    /**
     * Handle the UserAction "restored" event.
     */
    public function restored(UserAction $userAction): void
    {
        $this->logAction($userAction, 'restored');
    }

    /**
     * Handle the UserAction "force deleted" event.
     */
    public function forceDeleted(UserAction $userAction): void
    {
        $this->logAction($userAction, 'forceDeleted');
    }
    /**
     *
     */
    protected function logAction($model, $action)
    {
        if (Auth::check()) {
            UserAction::create([
                'user_id' => Auth::id(),
                'action' => $action,
                'action_model' => get_class($model),
                'action_id' => $model->id,
                // You might also log specific changes here
            ]);
        }
    }
}
