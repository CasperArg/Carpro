<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $fillable = array('brand', 'model', 'color', 'year', 'kilometers', 'air', 'airbag','steering', 'abs', 'gps');
}
