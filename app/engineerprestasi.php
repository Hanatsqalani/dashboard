<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class engineerprestasi extends Model
{
    protected $table = "engineerprestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'nama_prestasi', 'tahun_prestasi'
    ];
}
