<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    use HasFactory;

    //protected $table = "refer1";
    protected $guarded = [];

    protected $casts = [
        'FUEN' => 'datetime',
        'FUSA' => 'datetime',
    ];


}
