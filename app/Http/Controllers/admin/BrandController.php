<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::orderBy('id','DESC')->get();
        return view('Backend.pages.Brand.index_brand', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.Brand.create_brand');
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
                'brand_name' => 'required|unique:tbl_brand|max:255',
                'slug' =>'required|max:255',
                'brand_status' => 'required',
            ],
            [
                'brand_name.unique' => 'Tên thương hiệu đã có, xin điền tên khác',
                'brand_name.required' => 'Tên thương hiệu là bắt buộc',
                'brand_name.max' => 'Tên thương hiệu không vượt quá 255 kí tự',
                'slug.unique' => 'slug thương hiệu đã có, xin điền slug khác',
                'slug.required' => 'slug thương hiệu là bắt buộc',
                'slug.max' => 'slug thương hiệu không vượt quá 255 kí tự',
                'brand_status.required' => 'trạng thái là phải có nhé',
            ]
        );
        $brand = new Brand();
        $brand->brand_name = $data['brand_name'];
        $brand->slug = $data['slug'];
        $brand->brand_status = $data['brand_status'];
        $brand->save();
        return redirect()->back()->with('success','Thêm thành công thương hiệu sản phẩm');
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
        $brand = Brand::find($id);
        return view('Backend.pages.Brand.edit_brand',compact('brand'));
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
                'brand_name' => 'required|unique:tbl_brand|max:255',
                'slug' =>'required|max:255',
                'brand_status' => 'required',
            ],
            [
                'brand_name.unique' => 'Tên thương hiệu đã có, xin điền tên khác',
                'brand_name.max' => 'Tên thương hiệu không vượt quá 255 kí tự',
                'slug.unique' => 'slug thương hiệu đã có, xin điền slug khác',
                'slug.max' => 'slug thương hiệu không vượt quá 255 kí tự',
                'brand_status.required' => 'trạng thái là phải có nhé',
            ]
        );
       $brand = Brand::find($id);
       $brand->brand_name = $data['brand_name'];
       $brand->slug = $data['slug'];
       $brand->brand_status = $data['brand_status'];
       $brand->save();
        return redirect()->back()->with('success','Cập nhật thành công thương hiệu sản phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->back();
    }
}
