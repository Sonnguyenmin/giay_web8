<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'role_user';
    protected $primaryKey = 'id';
    protected $guarded = [];
}

