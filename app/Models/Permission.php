<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamp = true;
    protected $table = 'permissions';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function permissionChildren(){
        return $this->hasMany(Permission::class ,'parent_id');
    }
}
