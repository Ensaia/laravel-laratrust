<?php

namespace App\Http\Controllers\Laratrust;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class UserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $user_permissions = User::with('permissions')->where('id' , '=' , $user->id)->paginate(20);
        return view('dashboard.user-permission.index',['user_permissions' => $user_permissions]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $permissions = Permission::all();
        $user_permissions = User::with('permissions')->where('id', '=', $user->id)->get();
        return view('dashboard.user-permission.create',['permissions' => $permissions, 'user_permissions' => $user_permissions]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user,Request $request)
    {

        $rules = [
            'permission_id' => 'required'
        ];
        $messages = [
            'permission_id.required' => 'يرجى اختيار أحد الأذونات من القائمة'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('userPermissionCreate', $user->id)
                ->withErrors($validator)->withInput();
        } else {
            try {
                $user->permissions()->attach([
                    $request->permission_id
                ]);
                if ($user) {
                    return redirect()->route('userPermissionCreate', $user->id)->with('success', Config::get('constants.message.INSERT_SUCCESS'));
                } else {
                    return redirect()->route('userPermissionCreate', $user->id)->with('error', Config::get('constants.message.INSERT_ERROR'));
                }
            }catch (QueryException $error){
                if($error->errorInfo[1] == 19){
                    return redirect()->route('userPermissionCreate', $user->id)->withErrors(['error' => Config::get('constants.message.INSERT_ERROR')]);
                }
            }
        }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Permission $permission)
    {
        $user->permissions()->detach([
            $permission->id
        ]);
        if ($user) {
            return redirect()->route('userPermissionsIndex', $user->id)->with('success' , Config::get ( 'constants.message.DELETE_SUCCESS' ));
        } else {
            return redirect()->route('userPermissionsIndex', $user->id)->with('error' , Config::get ( 'constants.message.DELETE_ERROR' ));
        }
    }
}
