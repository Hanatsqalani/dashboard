<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotasppjbservice extends Model
{
    protected $table = "anggotasppjbservices";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}
