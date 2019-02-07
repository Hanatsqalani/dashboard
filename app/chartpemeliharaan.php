<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartpemeliharaan extends Model
{
   protected $table = "chartpemeliharaans";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
