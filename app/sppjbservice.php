<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sppjbservice extends Model
{
    protected $table = "sppjbservices";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
