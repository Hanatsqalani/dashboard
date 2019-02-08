<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sdm extends Model
{
    protected $table = "sdms";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'bidang', 'jabatan', 'pendidikan', 'extension',
    ];
}
