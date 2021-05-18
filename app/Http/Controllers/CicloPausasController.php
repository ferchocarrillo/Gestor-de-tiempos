<?php

namespace App\Http\Controllers;

use App\CicloPausa;
use Illuminate\Http\Request;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;
use Illuminate\Auth\Events\Validated;

class CicloPausasController extends Controller
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
        $date4 = $request->input('pausas')->format('H:i:s A');
        $date3 = $request->input('pausasout')->format('H:i:s A');
        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4);
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
        $ciclosos->pausas            = $hora;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloPausas  $cicloPausas
     * @return \Illuminate\Http\Response
     */
    public function show(CicloPausa $cicloPausa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloPausa  $cicloPausa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $date4 = $request->input('pausas');
        $date3 = $request->input('pausasout');
        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600;
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);
        $date5 = $ciclosos->pausas;
        $date6 = $ciclosos->pausasout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timepausas = ($tiempoF - $tiempoE);
        $timepausas = number_format($timepausas,1,'.',',');
        $ciclosos = Ciclo::findOrFail($id);

        return view('ciclopausas.edit' ,compact('timepausas','ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo1'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloPausa  $cicloPausa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $date4 = $request->input('pausas');
        $date3 = $request->input('pausasout');
        $tiempo1 = Carbon::parse($date3)->floatDiffInMinutes($date4)/3600;
        $ciclosos=Ciclo::findOrFail($id);
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);
        $date5 = $ciclosos->pausas;
        $date6 = $ciclosos->pausasout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timepausas = ($tiempoF - $tiempoE);
        $timepausas = number_format($timepausas,1,'.',',');

        $datosBreakin = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosBreakin);
     //return response()->json($ciclo);
     return view('ciclopausasout.edit', compact('timepausas','ciclosos','hoy','hora','llave','user_nombre','user_cedula','tiempo1'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloPausas  $cicloPausas
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloPausa $cicloPausa)
    {
        //
    }
}
