<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lk3 extends Model
{
    protected $table = "lk3s";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
