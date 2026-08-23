<?php

namespace App\Http\Controllers\Laratrust;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Role $role)
    {
        $role = Role::with('permissions')->where('id','=', $role->id)->paginate(20);
        return view('dashboard.role-permission.index',['role' => $role]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create(Role $role)
    {
        $permissions = Permission::all();
        $role_permissions = Role::with('Permissions')->where('id','=',$role->id)->get();
        return view('dashboard.role-permission.create',
            [
                'role' => $role,
                'permissions' => $permissions,
                'role_permissions' => $role_permissions,
            ]
        );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Role $role,Request $request)
    {
        $rules = [
            'permission_id' => 'required'
        ];
        $messages = [
            'permission_id.required' => 'يرجى اختيار أحد الأذونات من القائمة'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('rolePermissionCreate',$role->id)
                ->withErrors($validator)->withInput();
        } else {
          try{
              $role->permissions()->attach([
                  $request->permission_id
              ]);
              if ($role) {
                  return redirect()->route('rolePermissionCreate',$role->id)->with('success' , Config::get('constants.message.INSERT_SUCCESS'));
              } else {
                  return redirect()->route('rolePermissionCreate',$role->id)->with('error' , Config::get('constants.message.INSERT_ERROR'));
              }
          }catch (QueryException $error){
            if($error->errorInfo[1] === 19){
                return redirect()->route('rolePermissionCreate',$role->id)->withErrors(['error' => Config::get('constants.message.INSERT_ERROR')]);
            }
          }
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Role $role,Permission $permission)
    {

        $role->permissions()->detach([
            $permission->id
        ]);

        if ($role) {
            return redirect()->route('rolePermissionsIndex',$role->id)->with('success' , Config::get('constants.message.DELETE_SUCCESS'));
        } else {
            return redirect()->route('rolePermissionsIndex',$role->id)->with('success' , Config::get('constants.message.DELETE_ERROR'));
        }
    }
}
