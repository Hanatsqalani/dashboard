<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bpp extends Model
{
    protected $table = "bpp";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'keterangan', 'fotobpp'
    ];
}
