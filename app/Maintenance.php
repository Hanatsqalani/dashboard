<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
     protected $table = "maintenances";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}

