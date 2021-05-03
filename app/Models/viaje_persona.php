<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viaje_persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'c_email',
        'c_pais',
        'c_ciudad',
        'f_fecha'
    ];

}
