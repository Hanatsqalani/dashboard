<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotacsr extends Model
{
    protected $table = "anggotacsrs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}
