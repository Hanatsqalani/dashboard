<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class runningtext extends Model
{
    protected $table = "runningtexts";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'text',
    ];
}
