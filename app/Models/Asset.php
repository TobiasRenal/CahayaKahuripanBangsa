<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = "asset";
    protected $primaryKey = 'id_asset';
    protected $foreignKey = 'role_id';
    protected $fillable=[
        "role_id",
        "nama_asset",
        "tanggal_perolehan",
        "nilai_perolehan",
        "asal_asset",
        "keterangan"
    ];
}
