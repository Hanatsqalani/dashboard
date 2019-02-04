<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sppjb extends Model
{
    protected $table = "sppjbs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
