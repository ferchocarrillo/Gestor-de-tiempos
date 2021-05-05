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



        $date4 = $request->input('breakin1')->format('h:i:s A');
        $date3 = $request->input('breakout2')->format('h:i:s A');

        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4);
        // $tiempoC = $hoy->floatDiffInRealDays($date3);
        // $tiempoD = $hoy->floatDiffInRealDays($date4);
        // $tiempo1 = $tiempoC - $tiempoD;
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
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
        $ciclosos->breakin           = $request->breakin;
        $ciclosos->llave             = $llave;

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
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();


        $date4 = $request->input('breakin1');
        $date3 = $request->input('breakout2');

        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600;

        // $tiempoC = $hoy->floatDiffInRealDays($date3);
        // $tiempoD = $hoy->floatDiffInRealDays($date4);
        // $tiempo1 = $tiempoC - $tiempoD;
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        return view('ciclobreakin.edit',compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date4','date3','tiempo1'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloBreakin  $cicloBreakin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        // $tiempoC = $hoy->floatDiffInRealDays($date3);
        // $tiempoD = $hoy->floatDiffInRealDays($date4);
        // $tiempo1 = $tiempoC - $tiempoD;
        // $tiempo3 = $hoy->diffInMinutes($date4)/60;
        $date4 = $request->input('breakin1');
        $date3 = $request->input('breakout2');

        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);
        $datosBreakin = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosBreakin);
     //return response()->json($ciclo);
     return view('ciclobreakin.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date4','date3','tiempo1'));
     //return back();
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
