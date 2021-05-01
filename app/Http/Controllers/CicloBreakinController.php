<?php

namespace App\Http\Controllers;

use App\CicloBreakin;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloBreakinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {


        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $date4 = $request->input('breakin');
        $date3 = $request->input('breakout');
        $tiempoC = $hoy->floatDiffInRealDays($date3);
        $tiempoD = $hoy->floatDiffInRealDays($date4);
        $tiempo2 = $tiempoC - $tiempoD;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;


        // $validatedData = $request->validate([
        //     'salida'          => ['required|unique:ciclosos,salida'],
        // ]);

        $ciclosos = new Ciclo();

        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->breakin           = $hora;
        $ciclosos->llave             = $llave;
        $ciclosos->timebreak         = $tiempo2;

        $ciclosos->save();
        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\CicloBreakin  $cicloBreakin
     * @return \Illuminate\Http\Response
     */
    public function show(CicloBreakin $cicloBreakin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloBreakin  $cicloBreakin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');

        Carbon::setLocale('es');
        Carbon::now();
        $hoy = Carbon::now();

        $date4 = $request->input('breakin');
        $date3 = $request->input('breakout');
        $tiempoC = $hoy->floatDiffInRealDays($date3);
        $tiempoD = $hoy->floatDiffInRealDays($date4);
        $tiempo2 = $tiempoC - $tiempoD;
        $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        // return view('ciclo.index' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo2','tiempo3'));
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloBreakin  $cicloBreakin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   date_default_timezone_set('America/Bogota');

        Carbon::setLocale('es');
        Carbon::now();
        $hoy = Carbon::now();

        $date4 = $request->input('breakin');
        $date3 = $request->input('breakout');
        $tiempoC = $hoy->floatDiffInRealDays($date3);
        $tiempoD = $hoy->floatDiffInRealDays($date4);
        $tiempo2 = $tiempoC - $tiempoD;

        $tiempo3 = $hoy->diffInMinutes($date4)/60;

        $ciclosos=Ciclo::findOrFail($id);
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $datosCiclo =request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosCiclo);
     //return response()->json($ciclo);
    //  return view('ciclo.index', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo2','tiempo3'));
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloBreakin  $cicloBreakin
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloBreakin $cicloBreakin)
    {
        //
    }
}
