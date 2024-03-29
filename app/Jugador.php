<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';

    protected $fillable = array('firstname', 'lastname', 'age', 'leg', 'position');
}
