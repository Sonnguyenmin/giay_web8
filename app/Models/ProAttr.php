<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProAttr extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'pro_attrs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function product() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function attr() {
        return $this->belongsTo(Attribute::class, 'id_attr', 'id');
    }
}

