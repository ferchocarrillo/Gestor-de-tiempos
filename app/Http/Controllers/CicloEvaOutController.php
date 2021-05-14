<?php

namespace App\Http\Controllers;

use App\CicloEvaOut;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloEvaOutController extends Controller
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
        $date4 = $request->input('evaluacion');
        $date3 = $request->input('evaluacionout');
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
            'evaluacionout'          => ['required|unique:ciclos,evaluacionout'],
        ]);
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->evaluacionout     = $hora;
        $ciclosos->timeeva           = $tiempo3;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloEvaOut  $cicloEvaOut
     * @return \Illuminate\Http\Response
     */
    public function show(CicloEvaOut $cicloEvaOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloEvaOut  $cicloEvaOut
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        $ciclosos = Ciclo::findOrFail($id);
        Carbon::now();
        $hoy = Carbon::now();
        $date1 = $request->input('ingreso');
        $date2 = $request->input('salida');
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

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->floatDiffInRealSeconds($date9);
        $tiempoJ = $carbon1->floatDiffInRealSeconds($date10);
        $timedaño = ($tiempoJ - $tiempoI)/60;

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaout;
        $tiempoK = $carbon1->floatDiffInRealSeconds($date11);
        $tiempoL = $carbon1->floatDiffInRealSeconds($date12);
        $timeeva = ($tiempoL - $tiempoK)/60;

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->floatDiffInRealSeconds($date13);
        $tiempoN = $carbon1->floatDiffInRealSeconds($date14);
        $timeretro = ($tiempoN - $tiempoM)/60;

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->floatDiffInRealSeconds($date15);
        $tiempoP = $carbon1->floatDiffInRealSeconds($date16);
        $timereunion = ($tiempoP - $tiempoO)/60;

        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;


        return view('cicloevaout.edit', compact('ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepau','timedaño','timeeva', 'timeretro','timereunion'));
        // return view('ciclo.index' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo2','tiempo3'));
        //return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloEvaOut  $cicloEvaOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        $ciclosos=Ciclo::findOrFail($id);
        Carbon::now();
        $hoy = Carbon::now();
        $date1 = $request->input('ingreso');
        $date2 = $request->input('salida');
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

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->floatDiffInRealSeconds($date9);
        $tiempoJ = $carbon1->floatDiffInRealSeconds($date10);
        $timedaño = ($tiempoJ - $tiempoI)/60;

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaout;
        $tiempoK = $carbon1->floatDiffInRealSeconds($date11);
        $tiempoL = $carbon1->floatDiffInRealSeconds($date12);
        $timeeva = ($tiempoL - $tiempoK)/60;

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->floatDiffInRealSeconds($date13);
        $tiempoN = $carbon1->floatDiffInRealSeconds($date14);
        $timeretro = ($tiempoN - $tiempoM)/60;

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->floatDiffInRealSeconds($date15);
        $tiempoP = $carbon1->floatDiffInRealSeconds($date16);
        $timereunion = ($tiempoP - $tiempoO)/60;


        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $datosCiclo =request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosCiclo);
     //return response()->json($ciclo);
     return view('ciclosalida.edit', compact('ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepau','timedaño','timeeva', 'timeretro','timereunion'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloEvaOut  $cicloEvaOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloEvaOut $cicloEvaOut)
    {
        //
    }
}
