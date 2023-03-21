<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Components\MenuRecursive;

class MenuController extends Controller
{
    private $menuRecursive;
    private $menu;
    public function __construct(MenuRecursive $menuRecursive, Menu $menu)
    {
        $this->menuRecursive = $menuRecursive;
        $this->menu = $menu;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::orderBy('id','DESC')->get();
        return view('Backend.pages.Menu.index_menu', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionSelect = $this->menuRecursive->menuRecursiveAdd();
        return view('Backend.pages.Menu.create_menu', compact('optionSelect'));
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
                'menu_name' => 'required|unique:tbl_menu|max:255',
            ],
            [
                'menu_name.unique' => 'Tên menu đã có, xin điền tên khác',
                'menu_name.required' => 'Tên menu là bắt buộc',
                'menu_name.max' => 'Tên menu không vượt quá 255 kí tự',
                'slug.unique' => 'Slug menu đã có, xin điền Slug khác',
                'slug.required' => 'Slug menu là bắt buộc',
                'slug.max' => 'Slug menu không vượt quá 255 kí tự',
            ]
        );
        $this->menu->create([
            'menu_name' => $request->menu_name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->slug
        ]);
        return redirect()->back()->with('success','Thêm thành công menu sản phẩm');
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
        $menu = Menu::find($id);//tìm đến cái id cần sửa
        $menuOption = $this->menuRecursive->menuRecursiveEdit($menu->parent_id);
        return view('Backend.pages.Menu.edit_menu',compact('menu','menuOption'));
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
        $data = $request->validate(
            [
                'menu_name' => 'required|unique:tbl_menu|max:255',
            ],
            [
                'menu_name.unique' => 'Tên menu đã có, xin điền tên khác',
                'menu_name.required' => 'Tên menu là bắt buộc',
                'menu_name.max' => 'Tên menu không vượt quá 255 kí tự',
                'slug.unique' => 'Slug menu đã có, xin điền Slug khác',
                'slug.required' => 'Slug menu là bắt buộc',
                'slug.max' => 'Slug menu không vượt quá 255 kí tự',
            ]
        );
        $this->menu->find($id)->update([
            'menu_name' => $request->menu_name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->slug
        ]);
        return redirect()->back()->with('success','Cập nhật thành công menu sản phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = $this->menu->all();
        // $recursive = new MenuRecursive($data);
        // $menuOption = $menuRecursive->menuRecursive($parent_id);

        // return $menuOption;
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->back();
    }
}
