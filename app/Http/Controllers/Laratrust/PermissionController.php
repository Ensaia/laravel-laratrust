<?php

namespace App\Http\Controllers\Laratrust;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::paginate(20);
        return view('dashboard.permission.index', ['permissions' => $permissions]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.permission.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        Permission::create($request->validated());
        return redirect()->route('permissionCreate')->with('success', Config::get('constants.message.INSERT_SUCCESS'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $permission = Permission::findOrFail($permission->id);
        return view('dashboard.permission.edit', ['permission' => $permission]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->update($request->validated());
        return redirect()->route('permissionEdit', $permission->id)->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissionsIndex')->with('success', Config::get('constants.message.DELETE_SUCCESS'));
    }
}
