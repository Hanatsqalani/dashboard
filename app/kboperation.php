<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kboperation extends Model
{
    protected $table = "kboperations";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'keterangan', 'fotooperation',
    ];
}
