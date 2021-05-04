<?php

namespace App\Http\Controllers;

use App\CicloCapa;
use Illuminate\Http\Request;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloCapaController extends Controller
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

        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->capacitacion      = $hora;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloCapa  $cicloCapa
     * @return \Illuminate\Http\Response
     */
    public function show(CicloCapa $cicloCapa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloCapa  $cicloCapa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        return view('ciclocapa.edit' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloCapa  $cicloCapa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        // $date4 = $request->input('breakin');
        // $date3 = $request->input('breakout');
        // $tiempoC = $hoy->floatDiffInRealDays($date3);
        // $tiempoD = $hoy->floatDiffInRealDays($date4);
        // $tiempo2 = $tiempoC - $tiempoD;
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $ciclosos=Ciclo::findOrFail($id);
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $datosBreakin = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosBreakin);
     //return response()->json($ciclo);
     return view('ciclocapa.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloCapa  $cicloCapa
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloCapa $cicloCapa)
    {
        //
    }
}
