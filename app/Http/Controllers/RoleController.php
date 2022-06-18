<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionServiceProvider;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = Permission::all();
        $roles = Role::whereNotIn('name', ['admin'])->get();
        // dd($roles);
        return view('admin.roles.index', ['roles' =>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Role $role)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $role->create($validated);
        // $role->givePermissionTo($request->permission);
        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role, Permission $permission)
    {
        //
        $permissions = Permission::all();
        return view('admin.roles.edit', ['role' => $role, 'permissions' => $permissions]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $role->update($validated);
        return redirect()->route('roles.index')->with('success', 'Role updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //

        $role->delete();    // delete the role
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');

    }
    public function assignPermission(Request $request, Role $role){
        if($role->hasPermissionTo($request->permission)){
            return back()->with('error', 'Role already has this permission');
        }
        $role->givePermissionTo($request->permission);
        return redirect()->back()->with('success', 'Permission assigned successfully');
    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){

            $role->revokePermissionTo($permission);
            return redirect()->back()->with('success', 'Permission revoked successfully');
        }
        return back()->with('error', 'Role does not have this permission');
    }
}
