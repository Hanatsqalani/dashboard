<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainprestasi extends Model
{
     protected $table = "mainprestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'nama_prestasi', 'tahun_prestasi',
    ];
}
