<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class CarController extends Controller
{
    function mostraralgo(Request $request) {


    
        if (empty($request->busqueda)) {

            $autos = \App\Auto::all();
            $botonvolver = false;

        } else {
            $autos = \App\Auto::where($request->que, 'LIKE', '%'.$request->busqueda.'%')->get();
            $botonvolver = true;
        }

        

        return view('autos.index', ['autos' => $autos, 'botonvolver' => $botonvolver]);

        //return 'holakease';
    }

    


    function mostrardetalle(Request $request) {
        
        $auto = \App\Auto::find($request->id);

        
        $vista = 'detail';


        return view('autos.general', ['auto' => $auto, 'vista' => $vista]);

        //return 'holakease';
        
    }

    function actualizarauto($id, Request $request){


        $auto = \App\Auto::find($id);

        
        $request->air = (isset($request->air)) ? 1 : 0;
        $request->airbag = (isset($request->airbag)) ? 1 : 0;
        $request->steering = (isset($request->steering)) ? 1 : 0;
        $request->abs = (isset($request->abs)) ? 1 : 0;
        $request->gps = (isset($request->gps)) ? 1 : 0;
        

        $auto->color = $request->color;
        $auto->year = $request->year;
        $auto->kilometers = $request->kilometers;
        $auto->air = $request->air;
        $auto->airbag = $request->airbag;
        $auto->steering = $request->steering;
        $auto->abs = $request->abs;
        $auto->gps = $request->gps;
         

         $auto->save();

         $request->session()->flash('alert-info', 'Datos actualizados');

         return redirect('/autos/detail/'.$auto->id);

    }

    function eliminarauto(Request $request) {

      $auto = \App\Auto::where('id', $request->id)->delete();


      $request->session()->flash('alert-info', 'Auto eliminado');

      return redirect('/autos');


    }


    function formularioalta() {
         $vista = 'create';

         $auto = new Auto;
         return view('autos.general', ['auto' => $auto, 'vista' => $vista]);
    }

    function altadeauto(Request $request) {
       
      $request->air = (isset($request->air)) ? 1 : 0;
      $request->airbag = (isset($request->airbag)) ? 1 : 0;
      $request->steering = (isset($request->steering)) ? 1 : 0;
      $request->abs = (isset($request->abs)) ? 1 : 0;
      $request->gps = (isset($request->gps)) ? 1 : 0;
            

        Auto::create($request->all());

        flash('Welcome Aboard!');
        return redirect('/autos');

    }
}
