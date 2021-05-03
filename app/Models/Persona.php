<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'c_nombre',
        'c_apellido',
        'c_telefono',
        'c_email',
        'c_direccion',
        'c_foto'
    ];
 
}
