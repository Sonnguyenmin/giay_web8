<?php
namespace App\Repositories\ProductComment;

use App\Models\ProductComment;

use App\Repositories\BaseRepository;

class ProductCommentRepository extends BaseRepository implements ProductCommentRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return ProductComment::class;
    }

}
