<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable=['nombres','apellidos','correo','telefono','direccion'];
}
