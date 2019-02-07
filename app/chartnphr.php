<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartnphr extends Model
{
    protected $table = "chartnphrs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
