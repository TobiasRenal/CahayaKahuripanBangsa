<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = "inventaris";
    protected $primaryKey = 'id_inventaris';
    protected $foreignKey = 'role_id';
    protected $fillable=[
        "role_id",
        "nama_inventaris",
        "tanggal_perolehan",
        "nilai_perolehan",
        "asal_inventaris",
        "keterangan"
    ];
}
