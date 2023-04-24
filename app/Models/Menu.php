<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'tbl_menu';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function menuChild()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
?>
