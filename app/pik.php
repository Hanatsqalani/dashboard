<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pik extends Model
{
    protected $table = "piks";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
