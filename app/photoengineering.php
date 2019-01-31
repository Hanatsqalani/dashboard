<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photoengineering extends Model
{
    protected $table = "photoengineerings";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
