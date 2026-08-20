<?php

namespace App\Http\Controllers\Laratrust;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Config;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->paginate(20);
        return view('dashboard.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->validated());
        return redirect()->route('roleCreate')->with('success', Config::get('constants.message.INSERT_SUCCESS'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $role = Role::findOrFail($role->id);
        return view('dashboard.role.edit', ['role' => $role]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        return redirect()->route('roleEdit', $role->id)->with('success', Config::get('constants.message.UPDATE_SUCCESS'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('rolesIndex')->with('success', Config::get('constants.message.DELETE_SUCCESS'));
    }
}
