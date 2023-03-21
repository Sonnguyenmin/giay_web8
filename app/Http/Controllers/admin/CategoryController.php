<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;

class CategoryController extends Controller
{

    private $category;

    public function __construct(Category $category)//lớp-đối tượng
    {
        $this->category = $category;//gán biến = đối tượng
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::orderBy('id','DESC')->get();
        // $category = $this->category->latest()->paginate(5);
        return view('Backend.pages.Category.index_cate',compact('category'));
    }

    /**
     * Show the form for creating a new resource.

     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $htmlOption = $this->getCategory($parentId = "");
        return view('Backend.pages.Category.create_cate', compact('htmlOption'));
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
                'cate_name' => 'required|unique:tbl_category|max:255',
                'slug' =>'required|max:255',
                'cate_status' => 'required',
            ],
            [
                'cate_name.unique' => 'Tên danh mục đã có, xin điền tên khác',
                'cate_name.required' => 'Tên danh mục là bắt buộc',
                'cate_name.max' => 'Tên danh mục không vượt quá 255 kí tự',
                'slug.unique' => 'Slug danh mục đã có, xin điền Slug khác',
                'slug.required' => 'Slug danh mục là bắt buộc',
                'slug.max' => 'Slug danh mục không vượt quá 255 kí tự',
                'cate_status.required' => 'trạng thái là phải có nhé',
            ]
        );
        $this->category->create([
            'cate_name' => $request->cate_name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->slug,
            'cate_status' => $request->cate_status
        ]);
        return redirect()->back()->with('success','Thêm thành công danh mục sản phẩm');
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
        $category = Category::find($id);//tìm đến cái id cần sửa
        $htmlOption =$this->getCategory($category->parent_id);
        return view('Backend.pages.Category.edit_cate',compact('category','htmlOption'));
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
                'cate_name' => 'required|unique:tbl_category|max:255',
                'slug' =>'required|max:255',
                'cate_status' => 'required',
            ],
            [
                'cate_name.unique' => 'Tên danh mục đã có, xin điền tên khác',
                'cate_name.max' => 'Tên danh mục không vượt quá 255 kí tự',
                'slug.unique' => 'slug danh mục đã có, xin điền slug khác',
                'slug.max' => 'slug danh mục không vượt quá 255 kí tự',
                'cate_status.required' => 'trạng thái là phải có nhé',
            ]
        );
        $this->category->find($id)->update([
            'cate_name' => $request->cate_name,
            'parent_id'=> $request->parent_id,
            'slug' => $request->slug,
            'cate_status' => $request->cate_status
        ]);
        return redirect()->back()->with('success','Cập nhật thành công danh mục sản phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function getCategory($parentId){//function dùng chung
        $data = $this->category->all();
        $recusive = new Recursive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);

        return $htmlOption;
    }
}
