<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_order';
    // protected $fillable = ['user_id',
    //     'first_name', 'last_name', 'company_name', 'country', 'street_address',  'zip' , 'town' , 'email', 'phone', 'payment_type','status'
    // ];

    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function orderDetails() {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

    public function users() {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
