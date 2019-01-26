<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photointro extends Model
{
    protected $table = "photointros";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
