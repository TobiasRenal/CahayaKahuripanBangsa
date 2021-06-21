<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = "pengurus";
    protected $primaryKey = 'id_pengurus';
    protected $fillable=[
        "nama_pengurus",
        "tempat_lahir",
        "tanggal_lahir",
        "alamat",
        "no_telepon",
        "role_id"
    ];
}
