<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistik extends Model
{
    protected $table = "logistiks";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'foto_logistik', 'id_karyawan', 'nama_karyawan', 'jabatan', 'nama_prestasi', 'tahun_prestasi'
    ];
}
