<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photooperation extends Model
{
    protected $table = "photooperations";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
