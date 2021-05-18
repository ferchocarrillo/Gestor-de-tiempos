<?php

namespace App\Http\Controllers;

use App\CicloRetro;
use Illuminate\Http\Request;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloRetroController extends Controller
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
    public function store(Request $request, Ciclo $ciclosos)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->retro             = $hora;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloRetro  $cicloRetro
     * @return \Illuminate\Http\Response
     */
    public function show(CicloRetro $cicloRetro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloRetro  $cicloRetro
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
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos = Ciclo::findOrFail($id);
        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        return view('cicloretro.edit' ,compact('timeretro','ciclosos','hoy','hora','llave','user_nombre','user_cedula'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloRetro  $cicloRetro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $ciclosos=Ciclo::findOrFail($id);

        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos = Ciclo::findOrFail($id);
        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');
        $datosRetro = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosRetro);
     //return response()->json($ciclo);
     return view('cicloretroout.edit', compact('timeretro','ciclosos','hoy','hora','llave','user_nombre','user_cedula'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloRetro  $cicloRetro
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloRetro $cicloRetro)
    {
        //
    }
}
