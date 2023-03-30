<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_category';
    protected $fillable = [
        'cate_name', 'slug', 'cate_status',
    ];

    // public function categoryChild()
    // {
    //     return $this->hasMany(Category::class, 'parent_id');
    // }

    public function products(){
        return $this->hasMany(Product::class, 'category_id');
    }
}
?>
