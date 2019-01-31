<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keuanganprestasi extends Model
{
    protected $table = "keuanganprestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'nama_prestasi', 'tahun_prestasi',
    ];
}
