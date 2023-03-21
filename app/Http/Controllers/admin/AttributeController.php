<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attr = Attribute::latest()->get();
        return view('Backend.pages.Attribute.index_attr', compact('attr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.Attribute.create_attr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Attribute::create($request->all());
        return redirect()->back()->with('success','Thêm thành công thuộc tính sản phẩm');
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
        $attr = Attribute::find($id);
        return view('Backend.pages.Attribute.edit_attr', compact('attr'));
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
        //         'attr_name' => 'required|unique:tbl_attr|max:255',
        //         'attr_value' => 'required',
        //     ],
        //     [
        //         'attr_name.unique' => 'Tên thương hiệu đã có, xin điền tên khác',
        //         'attr_name.max' => 'Tên thương hiệu không vượt quá 255 kí tự',
        //         'attr_value.required' => 'trạng thái là phải có nhé',
        //     ]
        // );
        // $attr = Attribute::find($id);
        // $attr->attr_name = $data['attr_name'];
        // $attr->attr_value = $data['attr_value'];
        // $attr->save();
        // return redirect()->back()->with('success','cập nhật thành công thuộc tính sản phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attr = Attribute::find($id);
        $attr->delete();
        return redirect()->back();
    }
}
