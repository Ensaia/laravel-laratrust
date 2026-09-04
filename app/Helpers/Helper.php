<?php


namespace App\Helpers;

use App\Models\User;
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

    public static function getUsername(string $id){
        return User::Where('id','=',$id)->value('name');
    }
    public static function getUserEmail(string $id){
        return User::Where('id','=',$id)->value('email');
    }
}
