<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProImage extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_pro_image';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
