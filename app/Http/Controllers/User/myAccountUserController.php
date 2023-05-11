<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\Permission;
use App\Traits\StorageImageTraits;
use App\Models\PermissionRole;
use App\Service\User\UserServiceInterface;
use App\Service\Category\CategoryServiceInterface;
use App\Service\Brand\BrandServiceInterface;

class myAccountUserController extends Controller
{
    use StorageImageTraits;
    private $UserService;
    private $roles;

    public function __construct(UserServiceInterface $UserService,
                                CategoryServiceInterface $CategoryService,
                                BrandServiceInterface $BrandService,Role $roles){
        $this->CategoryService = $CategoryService;
        $this->BrandService = $BrandService;
        $this->UserService = $UserService;
        $this->roles = $roles;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        $user = User::orderBy('id','DESC')->get();
        return view('Frontend.user_Page.Customers.MyUser.myAccount', compact('brands','categories','user'));
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
        $user = $this->UserService->find($id);
        $roleOfUser = $user->roles;
        $brands = $this->BrandService->all();
        $categories = $this->CategoryService->all();
        return view('Frontend.user_Page.Customers.MyUser.PostMyAccount', compact('brands','categories','roles', 'user','roleOfUser'));
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
        try {
            DB::beginTransaction();
            $dataUpdateUser =[
                'name' => $request->name,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company_name' => $request->company_name,
                'country' => $request->country,
                'street_address' => $request->street_address,
                'zip' => $request->zip,
                'town' =>$request->town,
                'phone' => $request->phone,
            ];
            $dataImageUser = $this->storageTraitUpload($request,'avatar_path','user');
            if(!empty($dataImageUser)){
                $dataUpdateUser['avatar_name'] = $dataImageUser['file_name'];
                $dataUpdateUser['avatar_path'] = $dataImageUser['file_path'];
            }
            $this->UserService->find($id)->update($dataUpdateUser);
            $user = $this->UserService->find($id);

            DB::commit();
            return redirect()->back();
        }
        catch(\Exception $exception) {
            DB::rollBack();
            Log::error("Lỗi :"  . $exception->getMessage() . '---Line :' . $exception->getLine());
        }
    }
}
