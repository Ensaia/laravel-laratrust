<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    //
    public function index(){
        $data['users_count'] = User::count();
        $data['roles_count'] = Role::count();
        $data['permissions_count'] = Permission::count();
        $data['posts_count'] = Post::count();
        return view('dashboard.home.index',$data);
    }
}
