<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Traits\StorageImageTraits;


class SlideController extends Controller
{
    use StorageImageTraits;
    private $slide;

    public function __construct(Slide $slide){
        $this->slide = $slide;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::latest()->get();
        return view('Backend.pages.Slides.index_slide' ,compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Backend.pages.Slides.create_slide');
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
                'slide_name' => 'required|unique:tbl_slide|max:255',
                'slide_desc' =>'required|max:1000',
                'image_path' => 'required',
            ],
            [
                'slide_name.unique' => 'Tên slide đã có, xin điền tên khác',
                'slide_name.required' => 'Tên slide là bắt buộc',
                'slide_name.max' => 'Tên slide không vượt quá 255 kí tự',
                'slide_desc.unique' => 'nội dung slide đã có, xin điền nội dung khác',
                'slide_desc.required' => 'nội dung slide là bắt buộc',
                'slide_desc.max' => 'nội dung slide không vượt quá 1000 kí tự',
                'image_path.required' => 'Hình ảnh là phải có nhé',
            ]
        );

        try{
            DB::beginTransaction();
            $dataSlide =[
                'slide_name' => $request->slide_name,
                'slide_desc' => $request->slide_desc
            ];

            $dataImageSlide =  $this->storageTraitUpload($request,'image_path','slide');
            if(!empty($dataImageSlide)){
                $dataSlide['image_name'] = $dataImageSlide['file_name'];
                $dataSlide['image_path'] = $dataImageSlide['file_path'];
            }
            $this->slide->create($dataSlide);
            DB::commit();
            return redirect()->back()->with('success','Thêm thành công slide sản phẩm');
        }
        catch(\Exception $exception) {
            DB::rollBack();
            Log::error("Lỗi :"  . $exception->getMessage() . '---Line :' . $exception->getLine());
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
        $slide = $this->slide->find($id);
        return view('Backend.pages.Slides.edit_slide',compact('slide'));
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
        //         'slide_name' => 'required|unique:tbl_slide|max:255',
        //         'slide_desc' =>'required|max:1000',
        //         'image_path' => 'required',
        //     ],
        //     [
        //         'slide_name.unique' => 'Tên slide đã có, xin điền tên khác',
        //         'slide_name.max' => 'Tên slide không vượt quá 255 kí tự',
        //         'slide_desc.unique' => 'nội dung slide đã có, xin điền nội dung khác',
        //         'slide_desc.max' => 'nội dung slide không vượt quá 1000 kí tự',
        //         'image_path.required' => 'Hình ảnh là phải có nhé',
        //     ]
        // );

        try{
            DB::beginTransaction();
            $dataUpdate =[
                'slide_name' => $request->slide_name,
                'slide_desc' => $request->slide_desc
            ];

            $dataImageSlide =  $this->storageTraitUpload($request,'image_path','slide');
            if(!empty($dataImageSlide)){
                $dataUpdate['image_name'] = $dataImageSlide['file_name'];
                $dataUpdate['image_path'] = $dataImageSlide['file_path'];
            }
            $this->slide->find($id)->update($dataUpdate);
            $slide = $this->slide->find($id);
            DB::commit();
            return redirect()->back()->with('success','Sửa thành công slide sản phẩm');
        }
        catch(\Exception $exception) {
            DB::rollBack();
            Log::error("Lỗi :"  . $exception->getMessage() . '---Line :' . $exception->getLine());
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
        $slide = Slide::find($id);
        $slide->delete($id);
        return redirect()->back();
    }
}
