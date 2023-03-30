<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_product';
    protected $fillable = [
        'brand_id', 'user_id', 'category_id', 'pro_name','pro_price', 'feature_image','feature_image_name' , 'pro_content', 'slug', 'pro_status', 'views_count','discount', 'pro_desc','qty', 'weight', 'Sku', 'tag'
    ];
    public function images(){
        return $this->hasMany(ProImage::class, 'product_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function proImages(){//1 product-nhiều hình ảnh chi tiết
        return $this->hasMany(proImage::class,'product_id');
    }
    public function attrs(){
        return $this->belongsToMany(Attribute::class, 'pro_attrs' , 'id_product', 'id_attr')->withTimestamps();
    }
}
