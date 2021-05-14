<?php

namespace App\Http\Controllers;

use App\CicloPausaOut;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloPausaOutController extends Controller
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
        $date4 = $request->input('pausas');
        $date3 = $request->input('pausaout');
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
            'pausas'          => ['required|unique:ciclos,pausas'],
        ]);
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->pausasout         = $hora;
        $ciclosos->timepausas        = $tiempo3;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloPausaOut  $cicloPausaOut
     * @return \Illuminate\Http\Response
     */
    public function show(CicloPausaOut $cicloPausaOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloPausaOut  $cicloPausaOut
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        $ciclosos=Ciclo::findOrFail($id);
        Carbon::now();
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->floatDiffInRealSeconds($date1);
        $tiempoB = $carbon1->floatDiffInRealSeconds($date2);
        $timebreak = ($tiempoB - $tiempoA)/60;

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInRealSeconds($date3);
        $tiempoD = $carbon1->floatDiffInRealSeconds($date4);
        $timelunch = ($tiempoD - $tiempoC)/60;

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->floatDiffInRealSeconds($date5);
        $tiempoF = $carbon1->floatDiffInRealSeconds($date6);
        $timecapa = ($tiempoF - $tiempoE)/60;

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->floatDiffInRealSeconds($date7);
        $tiempoH = $carbon1->floatDiffInRealSeconds($date8);
        $timepau = ($tiempoH - $tiempoG)/60;


        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;


        return view('ciclopausasout.edit', compact('ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepau'));
        // return view('ciclo.index' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo2','tiempo3'));
        //return back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloPausaOut  $cicloPausaOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        $ciclosos=Ciclo::findOrFail($id);
        Carbon::now();
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->floatDiffInRealSeconds($date1);
        $tiempoB = $carbon1->floatDiffInRealSeconds($date2);
        $timebreak = ($tiempoB - $tiempoA)/60;

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInRealSeconds($date3);
        $tiempoD = $carbon1->floatDiffInRealSeconds($date4);
        $timelunch = ($tiempoD - $tiempoC)/60;

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->floatDiffInRealSeconds($date5);
        $tiempoF = $carbon1->floatDiffInRealSeconds($date6);
        $timecapa = ($tiempoF - $tiempoE)/60;

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->floatDiffInRealSeconds($date7);
        $tiempoH = $carbon1->floatDiffInRealSeconds($date8);
        $timepau = ($tiempoH - $tiempoG)/60;

        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $datosCiclo =request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosCiclo);
     //return response()->json($ciclo);
     return view('ciclosalida.edit', compact('ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepau'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloPausaOut  $cicloPausaOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloPausaOut $cicloPausaOut)
    {
        //
    }
}
