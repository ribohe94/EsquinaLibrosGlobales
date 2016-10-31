<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['libNombre'];
//Mapea la base de datos la tabla libros con este modelo
}
