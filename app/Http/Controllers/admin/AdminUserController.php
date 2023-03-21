<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\Permission;
use App\Models\PermissionRole;

class AdminUserController extends Controller
{
    private $user;
    private $roles;

    public function __construct(User $user ,Role $roles){
        $this->user = $user;
        $this->roles = $roles;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id','DESC')->get();
        return view('Backend.pages.User.index_user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roles->all();
        return view('Backend.pages.User.create_user', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|unique:User|max:255',
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'name.unique' => 'Tên thành viên đã có, xin điền tên khác',
                'name.required' => 'Tên thành viên là bắt buộc',
                'name.max' => 'Tên thành viên không vượt quá 255 kí tự',
                'email' => 'email thành viên là bắt buộc',
                'email.unique' => 'email thành viên đã có, xin điền email khác',
                'email.required' => 'email thành viên là bắt buộc',
                'password' => 'password thành viên là bắt buộc',

            ]
        );
        try{
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->back()->with('success','Thêm thành công thành viên');
        }
        catch(\Exception $exception) {
            DB::rollBack();
            Log::error("Message:" . $exception->getMessage() . 'Line :' . $exception->getLine());
        }
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
        $roles = $this->roles->all();
        $user = $this->user->find($id);
        $roleOfUser = $user->roles;
        return view('Backend.pages.User.edit_user', compact('roles', 'user','roleOfUser'));
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
        // $data = $request->validate(
        //     [
        //         'name' => 'required|unique:User|max:255',
        //         'email' => 'required',
        //         'password' => 'required',
        //     ],
        //     [
        //         'name.unique' => 'Tên thành viên đã có, xin điền tên khác',
        //         'email.unique' => 'email thành viên đã có, xin điền email khác',
        //         'password.required' => 'password thành viên là bắt buộc',

        //     ]
        // );
        try
        {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->back()->with('success','Sửa thành công thành viên');
        }
        catch(\Exception $exception) {
            DB::rollBack();
            Log::error("Message:" . $exception->getMessage() . 'Line :' . $exception->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
