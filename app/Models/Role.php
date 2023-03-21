<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'roles';
    protected $fillable = [
        'role_name','display_name'
    ];

    public function permission(){
        return $this->belongsToMany(Permission::class, 'permission_role' , 'role_id' ,'permission_id');
    }
}
