<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionController extends Controller
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
        return view('admin.permissions.index', ['permissions' =>$permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.permissions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Permission $permission)
    {
        //

        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $permission->create($validated);
        return redirect()->route('permissions.index')->with('success', 'Permission created successfully');
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
    public function edit(Permission $permission)
    {
        //
        $role = Role::all();
        return view('admin.permissions.edit', ['permission' => $permission, 'roles' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $permission->update($validated);
        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
        $permission->delete();    // delete the permission
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully');

    }
    public function assignRole(Request $request, Permission $permission){
        if($permission->hasRole($request->role)){
        return back()->with('error', 'Role already assigned');
        }
        $permission->assignRole($request->role);
        return redirect()->back()->with('success', 'Role assigned successfully');
    }

    public function revokeRole(Permission $permission, Role $role){
        if($permission->hasRole($role)){
            $permission->removeRole($role);
            return redirect()->back()->with('success', 'Role revoked successfully');
        }
        return back()->with('error', 'Role not assigned');
    }
}
