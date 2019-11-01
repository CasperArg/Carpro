<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    protected $fillable = array('type', 'mt2', 'address', 'rooms', 'garage', 'price', 'photo');
}
