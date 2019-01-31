<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photologistik extends Model
{
     protected $table = "photologistiks";
    protected $primaryKey = "id";

    protected $guarded = [
        'created_at', 'update_at',
    ];

     protected $fillable = [
        'namefile',
    ];
}
