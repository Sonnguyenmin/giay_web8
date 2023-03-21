<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    private $setting;

    public function __construct(Setting $setting)//lớp-đối tượng
    {
        $this->setting = $setting;//gán biến = đối tượng
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::orderBy('id','DESC')->get();
        return view('Backend.pages.Setting.index_setting', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.Setting.create_setting');
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
                'config_key' => 'required|unique:tbl_setting|max:255',
                'config_value' =>'required|max:255',
            ],
            [
                'config_key.unique' => 'Tên setting đã có, xin điền tên khác',
                'config_key.required' => 'Tên setting là bắt buộc',
                'config_key.max' => 'Tên setting không vượt quá 255 kí tự',
                'config_value.unique' => 'Giá trị setting đã có, xin điền slug khác',
                'config_value.required' => 'Giá trị setting là bắt buộc',
            ]
        );
        $this->setting->create([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
            'type' => $request->type
        ]);
        return redirect()->back()->with('success','Thêm thành công setting ');
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
        $setting = $this->setting->find($id);
        return view('Backend.pages.Setting.edit_setting', compact('setting'));
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
                'config_key' => 'required|unique:tbl_setting|max:255',
                'config_value' =>'required|max:255',
            ],
            [
                'config_key.unique' => 'Tên setting đã có, xin điền tên khác',
                'config_key.max' => 'Tên setting không vượt quá 255 kí tự',
                'config_value.unique' => 'Giá trị setting đã có, xin điền slug khác',
            ]
        );
        $this->setting->find($id)->update([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value
        ]);
        return redirect()->back()->with('success','Sửa thành công setting ', compact('setting'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete($id);
        return redirect()->back();
    }
}
