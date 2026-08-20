<?php


namespace App\Http\Controllers\Api\JsChart;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Models\LoginHistory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JsChartController extends Controller
{

    public function usersCount(){
        $data = [];
        $users_count = User::count();
        $roles_count = Role::count();
        $permissions_count = Permission::count();
        $user_with_roles_count = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->count();
        $user_with_permissions_count =  DB::table('users')
            ->join('permission_user', 'users.id', '=', 'permission_user.user_id')
            ->join('permissions', 'permission_user.permission_id', '=', 'permissions.id')
            ->count();
        $user_with_admin_role_count = User::whereHasRole('admin')->count();
        $user_with_user_permission_count = User::whereHasRole('user')->count();

        $data['data'][] = 'المستخدمون';
        $data['data'][] = 'الأدوار';
        $data['data'][] = 'الأذونات';
        $data['data'][] = 'مستخدمون بأدوار';
        $data['data'][] = 'مستخدمون بأذونات';
        $data['data'][] = 'admin مستخدم';
        $data['data'][] = 'user مستخدم';
        $data['count'][] = $users_count;
        $data['count'][] = $roles_count;
        $data['count'][] = $permissions_count;
        $data['count'][] = $user_with_roles_count;
        $data['count'][] = $user_with_permissions_count;
        $data['count'][] = $user_with_admin_role_count;
        $data['count'][] = $user_with_user_permission_count;

        return response()->json($data);
    }

    public function userLoginPlatform(){
        $platform = LoginHistory::select('platform', DB::raw('count(*) as count'))
            ->groupBy('platform')
            ->get();

        $data = [];
        $data['platform'] = $platform->pluck('platform');
        $data['count'] = $platform->pluck('count');

        return response()->json($data);
    }
    public function userLoginBrowser(){
        $browser = LoginHistory::select('browser', DB::raw('count(*) as count'))
            ->groupBy('browser')
            ->get();

        $data = [];
        $data['browser'] = $browser->pluck('browser');
        $data['count'] = $browser->pluck('count');

        return response()->json($data);
    }

}
