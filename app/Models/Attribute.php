<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_attr';
    protected $fillable = [
        'attr_name','attr_value'
    ];
}
