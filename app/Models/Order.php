<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_order';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function orderDetails() {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

    public function users() {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
