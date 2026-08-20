<?php


namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Models\UserAction;

class Helper
{
    public static function logAction($model, $action)
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
