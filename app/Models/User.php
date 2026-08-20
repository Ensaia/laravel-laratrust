<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use App\Observers\UserActionObserver;

class User extends Authenticatable implements MustVerifyEmail,LaratrustUser
{
    use HasApiTokens, HasFactory, Notifiable,HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin():bool {
        return $this->hasRole('admin');
    }
    public function UserRoles() {
         return $this->roles()->select('id','name')->get();
    }
    public function UserPermissions() {
        return $this->permissions()->select('id','name')->get();
    }
    public function isEmailVerified():bool{
        $email_verified_at = User::select('email_verified_at')->where('email_verified_at','<>', '')->get();
        if($email_verified_at = ''){
            return false;
        }else{
            return true;
        }
    }
}
