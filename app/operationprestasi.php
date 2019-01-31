<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operationprestasi extends Model
{
    //
    protected $table = "operationprestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
       'nama_prestasi', 'tahun_prestasi',
    ];
}
