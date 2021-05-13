<?php

namespace App\Http\Controllers;

use App\CicloAveriaOut;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloAveriaOutController extends Controller
{
            /**

     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setlocale('co');
    }

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
        $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $validatedData = $request->validate([
            'dañoout'          => ['required|unique:ciclos,dañoout'],
        ]);
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->dañoout           = $hora;
        $ciclosos->timedaño          = $tiempo3;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloAveriaOut  $cicloAveriaOut
     * @return \Illuminate\Http\Response
     */
    public function show(CicloAveriaOut $cicloAveriaOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloAveriaOut  $cicloAveriaOut
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $date4 = $request->input('daño');
        $date3 = $request->input('dañoout');
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

        return view('cicloaveriaout.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date4','date3','tiempo2','tiempo3'));
        // return view('ciclo.index' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo2','tiempo3'));
        //return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloAveriaOut  $cicloAveriaOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $date4 = $request->input('daño');
        $date3 = $request->input('dañoout');
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
     return view('ciclosalida.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date4','date3','tiempo2','tiempo3'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloAveriaOut  $cicloAveriaOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloAveriaOut $cicloAveriaOut)
    {
        //
    }
}
