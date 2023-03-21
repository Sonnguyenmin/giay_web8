<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProImage extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_pro_image';
    protected $fillable = [
      'image_path','image_name','product_id'
    ];
}
