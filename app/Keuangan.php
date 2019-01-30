<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "keuangans";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'foto_keuangan', 'id_karyawan', 'nama_karyawan', 'jabatan', 'nama_prestasi', 'tahun_prestasi'
    ];
}
