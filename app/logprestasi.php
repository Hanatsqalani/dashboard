<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logprestasi extends Model
{
    protected $table = "logprestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'nama_prestasi', 'tahun_prestasi',
    ];

}
