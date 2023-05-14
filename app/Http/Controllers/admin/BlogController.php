<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Traits\StorageImageTraits;
use App\Service\Blog\BlogServiceInterface;
use App\Models\Blog;

class BlogController extends Controller
{
    use StorageImageTraits;
    private $BlogService;



    public function __construct(BlogServiceInterface $BlogService)
    {
        $this->BlogService = $BlogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->BlogService->all();
        return view('Backend.pages.Blog.index_blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.pages.Blog.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataBlog =[
                'user_id' => auth()->id(),
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'blog_name'=>$request->blog_name,
                'category'=>$request->category,
                'content'=>$request->content,
            ];
            $dataImageBlog = $this->storageTraitUpload($request,'blog_path','blog');
            if(!empty($dataImageBlog)){
                $dataBlog['blog_name'] = $dataImageBlog['file_name'];
                $dataBlog['blog_path'] = $dataImageBlog['file_path'];
            }
            $blogs = $this->BlogService->create($dataBlog);


            DB::commit();
            return redirect()->back()->with('success','Thêm thành công tin tức');

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
        $blogs = $this->BlogService->find($id);
        return view('Backend.pages.Blog.edit_blog',compact('blogs'));
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
        try{
            DB::beginTransaction();
            $dataUpdate =[
                'user_id' => auth()->id(),
                'title'=>$request->title,
                'subtitle'=>$request->subtitle,
                'blog_name'=>$request->blog_name,
                'category'=>$request->category,
                'content'=>$request->content,
            ];

            $dataUpdateBlog =  $this->storageTraitUpload($request,'blog_path','blog');
            if(!empty($dataUpdateBlog)){
                $dataUpdate['blog_name'] = $dataUpdateBlog['file_name'];
                $dataUpdate['blog_path'] = $dataUpdateBlog['file_path'];
            }
            $this->BlogService->find($id)->update($dataUpdate);
            $blogs = $this->BlogService->find($id);
            DB::commit();
            return redirect()->back()->with('success','Sửa thành công tin tức');
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
        $blogs = $this->BlogService::find($id);
        $blogs->delete($id);
        return redirect()->back();
    }
}
