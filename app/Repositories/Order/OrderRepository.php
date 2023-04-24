<?php
namespace App\Repositories\Order;

use App\Models\Order;

use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Order::class;
    }

    public function getOrderByUserId($userId) {
        return $this->model->where('user_id', $userId)->get();
    }

}
