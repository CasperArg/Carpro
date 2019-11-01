<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Jugador;

class PlayerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (empty($request->busqueda)) {

            $jugadores = \App\Jugador::all();  //Para traer paginado de a n registros

            $botonvolver = false;

        } else {
            $jugadores = \App\Jugador::where($request->que, 'LIKE', '%'.$request->busqueda.'%')->get();
            $botonvolver = true;
        }

        

        return Response::json(['jugadores' => $jugadores, 'botonvolver' => $botonvolver]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        if ($request->firstname != null && $request->lastname != null && $request->age != null && $request->position != null && $request->leg != null) {
            Jugador::create($request->all());
            return Response::json('Jugador agregado', 200);
        } else {
            return Response::json("El jugador no fue agregado porque alguno(s) de los campos no fue completado", 400);
        }



        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $jugador = \App\Jugador::find($id);
        
        
        if ($jugador !== null){
            return Response::json($jugador, 200);

        } else {
            return Response::json('El registro solicitado no existe', 404);
        }

        
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


        //dd($request->all());
        $jugador = \App\Jugador::find($id);

        

        $jugador->firstname = $request->firstname;
        $jugador->lastname = $request->lastname;
        $jugador->age = $request->age;
        $jugador->position = $request->position;
        $jugador->leg = $request->leg;
        
        
         $jugador->save();

        

         return Response::json('Datos actualizados', 200);
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
  
  
        return Response::json('Jugador nismaneado', 200);
    }
}
