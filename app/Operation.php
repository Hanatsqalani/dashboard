<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = "operations";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'foto_operation', 'id_karyawan', 'nama_karyawan', 'jabatan', 'nama_prestasi', 'tahun_prestasi'
    ];
}
