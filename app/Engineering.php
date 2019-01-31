<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engineering extends Model
{
     protected $table = "engineerings";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'id_karyawan', 'nama_karyawan', 'jabatan',
    ];
}
