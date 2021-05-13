<?php

namespace App\Http\Controllers;

use App\CicloBreakOut;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloBreakOutController extends Controller
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
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $tiempo3 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600*100;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $validatedData = $request->validate([
            'breakout'          => ['required|unique:ciclos,breakout'],
        ]);
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->breakout          = $hora;
        $ciclosos->timebreak         = $tiempo3;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloBreakOut  $cicloBreakOut
     * @return \Illuminate\Http\Response
     */
    public function show(CicloBreakOut $cicloBreakOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloBreakOut  $cicloBreakOut
     * @return \Illuminate\Http\Response
     */
   public function edit(Request $request, $id)
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
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $tiempo3 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600*100;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);
        return view('ciclobreakout.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date4','date3','tiempo2','tiempo3'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloBreakOut  $cicloBreakOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $tiempo3 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600*100;
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
     * @param  \App\CicloBreakOut  $cicloBreakOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloBreakOut $cicloBreakOut)
    {
        //
    }
}
