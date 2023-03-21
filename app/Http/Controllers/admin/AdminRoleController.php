<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class AdminRoleController extends Controller
{
    private $role;

    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::orderBy('id', 'DESC')->get();
        return view('Backend.pages.Roles.index_role', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissionParent = $this->permission->where('parent_id', 0)->get();
        return view('Backend.pages.Roles.create_role',compact('permissionParent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = $this->role->create([
            'role_name' => $request->role_name,
            'display_name' => $request->display_name
        ]);

        $role->permission()->attach($request->permission_id);
        return redirect()->back()->with('success','Thêm thành công vai trò');
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
    public function edit($id)
    {
        $permissionParent = $this->permission->where('parent_id', 0)->get();
        $role = $this->role->find($id);
        $permissionCheck = $role->permission;
        return view('Backend.pages.Roles.edit_role',compact('permissionParent','role','permissionCheck'));
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
         $this->role->find($id)->update([
            'role_name' => $request->role_name,
            'display_name' => $request->display_name
        ]);
        $role = $this->role->find($id);
        $role->permission()->sync($request->permission_id);
        return redirect()->back()->with('success','Sửa thành công vai trò');
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
    }
}
