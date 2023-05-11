<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $timestamp = true;
    protected $table = 'tbl_slide';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
