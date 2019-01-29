<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bakorsiroh extends Model
{
    protected $table = "bakorsirohs";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'filename',
    ];
}
