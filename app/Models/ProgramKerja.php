<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;
    protected $table = "program_kerja";
    protected $primaryKey = 'id_program';
    protected $foreignKey = 'role_id';
    protected $fillable=[
        "role_id",
        "nama_program",
        "besar_anggaran",
        "pencapaian",
        "kendala"
    ];
}
