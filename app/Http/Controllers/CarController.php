<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    function mostraralgo() {
        
        $autos = \App\Auto::all();


        return view('autos', ['autos' => $autos]);

        //return 'holakease';
        
    }

    function mostrardetalle($id) {
        
        $auto = \App\Auto::find($id);


        return view('detail', ['auto' => $auto]);

        //return 'holakease';
        
    }
}
