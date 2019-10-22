<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;

class CarController extends Controller
{
    function mostraralgo(Request $request) {


    
        if (empty($request->busqueda)) {

            $autos = \App\Auto::all();

        } else {
            $autos = \App\Auto::where($request->que, 'LIKE', '%'.$request->busqueda.'%')->get();
        }


        return view('autos.index', ['autos' => $autos]);

        //return 'holakease';
    }

    


    function mostrardetalle(Request $request) {
        
        $auto = \App\Auto::find($request->id);


        return view('autos.detail', ['auto' => $auto]);

        //return 'holakease';
        
    }

    function actualizarauto($id, Request $request){


        $auto = \App\Auto::find($id);

        if (isset($request->air)) {
            
         $request->air = 1;
      } else {
         $request->air = 0;
      }

      if (isset($request->airbag)) {
         
         $request->airbag = 1;
      } else {
         $request->airbag = 0;
      }

      if (isset($request->steering)) {
         
         $request->steering = 1;
      } else {
         $request->steering = 0;
      }

      if (isset($request->abs)) {
         
         $request->abs = 1;
      } else {
         $request->abs = 0;
      }

      if (isset($request->gps)) {
         
         $request->gps = 1;
      } else {
         $request->gps = 0;
      }

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
        return view('autos.create');
    }

    function altadeauto(Request $request) {
       
        if (isset($request->air)) {
            
            $request->air = 1;
         } else {
            $request->air = 0;
         }

         if (isset($request->airbag)) {
            
            $request->airbag = 1;
         } else {
            $request->airbag = 0;
         }

         if (isset($request->steering)) {
            
            $request->steering = 1;
         } else {
            $request->steering = 0;
         }

         if (isset($request->abs)) {
            
            $request->abs = 1;
         } else {
            $request->abs = 0;
         }

         if (isset($request->gps)) {
            
            $request->gps = 1;
         } else {
            $request->gps = 0;
         }

            

        Auto::create($request->all());

        flash('Welcome Aboard!');
        return redirect('/autos');

    }
}
