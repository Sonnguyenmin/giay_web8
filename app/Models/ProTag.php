<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProTag extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'pro_tags';
    protected $fillable = [
        'product_id','tag_id'
    ];
}
