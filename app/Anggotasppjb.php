<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotasppjb extends Model
{
    protected $table = "anggotasppjbs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}
