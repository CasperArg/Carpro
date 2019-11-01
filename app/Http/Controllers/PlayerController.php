<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        if (empty($request->busqueda)) {

            $jugadores = \App\Jugador::paginate(10);  //Para traer paginado de a n registros

            $botonvolver = false;

        } else {
            $jugadores = \App\Jugador::where($request->que, 'LIKE', '%'.$request->busqueda.'%')->paginate(10);
            $botonvolver = true;
        }

        

        return view('jugadores.index', ['jugadores' => $jugadores, 'botonvolver' => $botonvolver]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugador = new Jugador;
        return view('jugadores.detail', ['jugador' => $jugador]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jugador::create($request->all());

        $request->session()->flash('alert-info', 'Jugador Agregado');

       
        return redirect('/jugadores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //dd($id);
        $jugador = \App\Jugador::find($id);
        

        return view('jugadores.detail', ['jugador' => $jugador]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jugador = \App\Jugador::find($id);

        

        $jugador->firstname = $request->firstname;
        $jugador->lastname = $request->lastname;
        $jugador->age = $request->age;
        $jugador->position = $request->position;
        $jugador->leg = $request->leg;
        
        
         $jugador->save();

         $request->session()->flash('alert-info', 'Datos actualizados');

         return redirect('/jugadores/'.$jugador->id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = \App\Jugador::where('id', $id)->delete();
  
  
        return redirect('/jugadores/')->with('alert-info', 'Jugador nismaneado');
    }
}
