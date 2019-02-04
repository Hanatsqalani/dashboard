<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csr extends Model
{
     protected $table = "csrs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
