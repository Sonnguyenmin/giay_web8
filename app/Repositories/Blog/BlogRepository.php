<?php
namespace App\Repositories\Blog;

use App\Models\Blog;

use App\Repositories\BaseRepository;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Blog::class;
    }

    public function getLatestBlog() {
        return $this->model->orderBy('id', 'desc')->get();
    }

}
