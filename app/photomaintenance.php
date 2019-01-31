<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photomaintenance extends Model
{
    protected $table = "photomaintenances";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
