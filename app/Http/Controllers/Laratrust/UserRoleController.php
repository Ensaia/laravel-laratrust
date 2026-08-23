<?php

namespace App\Http\Controllers\Laratrust;

use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $user_roles = User::with('roles')->where('id', '=', $user->id)->paginate(20);
        return view('dashboard.user-role.index', ['user_roles' => $user_roles]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $roles = Role::all();
        $user_roles = User::with('roles')->where('id', '=', $user->id)->get();
        return view('dashboard.user-role.create',
            [
                'roles' => $roles,
                'user_roles' => $user_roles
            ]
        );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Request $request)
    {
        $rules = [
            'role_id' => 'required'
        ];
        $messages = [
            'role_id.required' => 'يرجى اختيار أحد الأدوار من القائمة'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('userRoleCreate', $user->id)
                ->withErrors($validator)->withInput();
        } else {
            try {
                $user->roles()->attach([
                    $request->role_id
                ]);
                if ($user) {
                    return redirect()->route('userRoleCreate', $user->id)->with('success', Config::get('constants.message.INSERT_SUCCESS'));
                } else {
                    return redirect()->route('userRoleCreate', $user->id)->with('error', Config::get('constants.message.INSERT_ERROR'));
                }
            }catch (QueryException $error){
                if($error->errorInfo[1] == 19){
                    return redirect()->route('userRoleCreate', $user->id)->withErrors(['error' => Config::get('constants.message.INSERT_ERROR')]);
                }
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, User $user, Role $role)
    {
        $user->roles()->detach([
            $role->id
        ]);
        if ($user) {
            return redirect()->route('userRolesIndex',$user->id)->with('success' , Config::get('constants.message.DELETE_SUCCESS'));
        } else {
            return redirect()->route('userRolesIndex',$user->id)->with('error' , Config::get('constants.message.DELETE_ERROR'));
        }
    }
}
