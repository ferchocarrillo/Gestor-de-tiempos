<?php

namespace App\Http\Controllers;

use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloSalidaController extends Controller
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
        $date2 = $request->input('ingreso');
        $date1 = Carbon::now()->format('h:i:s');
        $tiempoA = $hoy->floatDiffInRealDays($date1);
        $tiempoB = $hoy->floatDiffInRealDays($date2);
        $tiempo1 = $tiempoA - $tiempoB;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;

        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $request->fecha;
        $ciclosos->ingreso           = $request->entrada;
        $ciclosos->salida            = $hora;
        $ciclosos->llave             = $llave;
        $ciclosos->total             = $tiempo1;

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
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');

        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $date2 = $request->input('ingreso');
        $date1 = $request->input('salida');
        $tiempoA = $hoy->diffInMinutes($date1);
        $tiempoB = $hoy->diffInMinutes($date2);
        $tiempo1 = $tiempoA - $tiempoB;
        $tiempo3 = $hoy->diffInMinutes($date2)/60;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        return view('ciclosalida.edit' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo1','tiempo3'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloSalida  $cicloSalida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   date_default_timezone_set('America/Bogota');

        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $date2 = $request->input('ingreso');
        $date1 = $request->input('salida');

        $tiempoA = $hoy->diffInMinutes($date1);
        $tiempoB = $hoy->diffInMinutes($date2);
        $tiempo1 = $tiempoA - $tiempoB;

        $tiempo3 = $hoy->diffInMinutes($date2)/60;

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
     return view('ciclosalida.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo1','tiempo3'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloSalida  $cicloSalida
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloSalida $cicloSalida)
    {
        //
    }
}
