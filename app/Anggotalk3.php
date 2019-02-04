<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotalk3 extends Model
{
    protected $table = "anggotalk3s";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}
