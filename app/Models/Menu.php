<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_menu';
    protected $fillable = [
        'menu_name', 'parent_id' , 'slug'
    ];
}
?>
