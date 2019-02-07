<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartinvestasi extends Model
{
    protected $table = "chartinvestasis";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
