<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    

    //Datos que solo se pueden ingresar en la tabla!!!!!!!!!!!!
    protected $fillable = ['nombre', 'email', 'mensaje'];
}
