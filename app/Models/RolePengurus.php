<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePengurus extends Model
{
    use HasFactory;
    protected $table = "role_pengurus";
    protected $primaryKey = 'role_id';
    protected $fillable=[
        "role_id",
        "role_name"
    ];
}
