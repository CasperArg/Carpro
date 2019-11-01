<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casa;

class HouseController extends Controller
{
    function mostraralgo(Request $request) {

        if (empty($request->busqueda)) {

            //$casas = \App\Casa::all();  //Para traer todo en una sola lista larga

            $casas = \App\Casa::paginate(10);  //Para traer paginado de a n registros

            $botonvolver = false;

        } else {
            $casas = \App\Casa::where($request->que, 'LIKE', '%'.$request->busqueda.'%')->paginate(10);
            $botonvolver = true;
        }

        

        return view('casas.index', ['casas' => $casas, 'botonvolver' => $botonvolver]);

        //return 'holakease';
    }




    function mostrardetalle(Request $request) {
        
        $casa = \App\Casa::find($request->id);

        $vista = 'detail';


        return view('casas.detail', ['casa' => $casa, 'vista' => $vista]);

        //return 'holakease';
        
    }

    function formularioalta() {
        $vista = 'create';

        $casa = new Casa;
        return view('casas.detail', ['casa' => $casa, 'vista' => $vista]);
   }

    function altadecasa(Request $request) {
        
     $request->garage = (isset($request->garage)) ? 1 : 0;
     
           

       Casa::create($request->all());

       $request->session()->flash('alert-info', 'Casa Agregada');

       
       return redirect('/casas');

    }

    function actualizarcasa($id, Request $request){


        $casa = \App\Casa::find($id);

        
        $request->garage = (isset($request->garage)) ? 1 : 0;
        
        

        $casa->type = $request->type;
        $casa->mt2 = $request->mt2;
        $casa->address = $request->address;
        $casa->rooms = $request->rooms;
        $casa->price = $request->price;
        $casa->photo = $request->photo;
        $casa->garage = $request->garage;
        
         

         $casa->save();

         $request->session()->flash('alert-info', 'Datos actualizados');

         return redirect('/casas/detail/'.$casa->id);

    }

    function eliminarcasa(Request $request) {

        $casa = \App\Casa::where('id', $request->id)->delete();
  
  
        $request->session()->flash('alert-info', 'Casa eliminada');
  
        return redirect('/casas');
  
  
    }

}


