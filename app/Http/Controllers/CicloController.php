<?php

namespace App\Http\Controllers;

use App\Ciclo;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();

        //return back();
        return view ('ciclo.index',compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ciclo $ciclosos)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');

        $llave = $user_cedula. $hoy;

        $validatedData = $request->validate([
            'llave'          => ['required|unique:ciclosos,llave'],
        ]);

        $ciclosos = new Ciclo();

        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->ingreso           = $hora;
        $ciclosos->salida            = $request->salida;
        $ciclosos->breakin           = $request->breakin;
        $ciclosos->breakout          = $request->breakout;
        $ciclosos->almuerzo          = $request->almuerzo;
        $ciclosos->almuerzoout       = $request->almuerzoout;
        $ciclosos->capacitacion      = $request->capacitacion;
        $ciclosos->pausas            = $request->pausas;
        $ciclosos->daño              = $request->daño;
        $ciclosos->evaluacion        = $request->evaluacion;
        $ciclosos->retro             = $request->retro;
        $ciclosos->reunion           = $request->reunion;
        $ciclosos->total             = $request->total;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function show(Ciclo $ciclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        return view('ciclo.edit' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciclo $ciclo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciclo $ciclo)
    {
        //
    }
}
