<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = "laporan_keuangan";
    protected $primaryKey = 'id_keuangan';
    protected $foreignKey = 'role_id';
    protected $fillable=[
        "role_id",
        "nama_Keuangan",
        "tanggal_laporan_keuangan",
        "jumlah",
        "keterangan"
    ];
}
