<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    //protected $table = "refer1";
    protected $guarded = [];

    protected $casts = [
        'FUEN' => 'datetime',
        'FUSA' => 'datetime',
    ];
}
