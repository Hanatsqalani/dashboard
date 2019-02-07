<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chartefor extends Model
{
    protected $table = "chartefors";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'tanggal', 'target', 'realisasi',
    ];
}
