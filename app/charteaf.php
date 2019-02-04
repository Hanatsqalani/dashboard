<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charteaf extends Model
{
    protected $table = "charteafs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
