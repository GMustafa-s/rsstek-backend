<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Spatie\Permission\models\Role;
use Spatie\Permission\models\Permission;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        // $users = Auth()->user()->get();

        // dd($user->getRoleName('Hacker'));

        $users = User::all();
        return view('admin.users.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:4',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles = Role::all();
        // $user = Auth()->user();
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // dd($user->getRoleName());
        if($request->role == "Select Roles")
        {
            $user->update();

        }
        else{

            $user->assignRole($request->role);
        }
        $user->update();
        return redirect()->back()->with('success', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    // Assigning and revoking Role to user functionality
    public function assignRole(Request $request, User $user){
        if($user->hasRole($request->role)){
        return back()->with('error', 'Role already assigned');
        }
        $user->assignRole($request->role);
        return redirect()->back()->with('success', 'Role assigned successfully');
    }

    public function revokeRole(Request $request){
        // dd($request->all());

        $user = User::findOrFail($request->user_id);
        $role = Role::findOrFail($request->role_id);
        if($user->hasRole($role)){
            $user->removeRole($role);
            return response()->json(['success'=>'Role revoked successfully', 'role'=>$role->name]);
        }
        return response()->json(['error'=>'Role not assigned',400]);
    }

    //Assigning and revoking Permission to user functionality
    // public function assignPermission(Request $request, User $user){
    //     if($user->hasPermissionTo($request->permission)){
    //         return back()->with('error', 'Role already has this permission');
    //     }
    //     $user->givePermissionTo($request->permission);
    //     return redirect()->back()->with('success', 'Permission assigned successfully');
    // }

    // public function revokePermission(User $user, Permission $permission){
    //     if($user->hasPermissionTo($permission)){

    //         $user->revokePermissionTo($permission);
    //         return redirect()->back()->with('success', 'Permission revoked successfully');
    //     }
    //     return back()->with('error', 'Role does not have this permission');
    // }

}
