<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photokeuangan extends Model
{
    protected $table = "photokeuangans";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
