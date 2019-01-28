<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
    protected $table = "charts";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'EAF', 'NPHR', 'EFOR', 'PS', 'biaya_pemeliharaan', 'biaya_investasi',
    ];
}
