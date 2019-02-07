<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartps extends Model
{
    protected $table = "chartps";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
