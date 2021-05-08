<?php

namespace App\Http\Controllers;

use App\CicloAveria;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloAveriaController extends Controller
{        /**

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
        $date3 = $request->input('daño');
        $date4 = $request->input('dañoout');
        $tiempo1 =($date4)->diffInMinutes($date3);

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
        $ciclosos->daño              = $hora;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloAveria  $cicloAveria
     * @return \Illuminate\Http\Response
     */
    public function show(CicloAveria $cicloAveria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloAveria  $cicloAveria
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $date3 = $request->input('daño');
        $date4 = $request->input('dañoout');
        $tiempo1 =($date4)->diffInMinutes($date3);
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);

        return view('cicloaveria.edit' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','date3','date4','tiempo1'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloAveria  $cicloAveria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();

        $date3 = $request->input('daño');
        $date4 = $request->input('dañoout');

        $tiempo1 =($date4)->diffInMinutes($date3);
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
        $datosAveria = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosAveria);
     //return response()->json($ciclo);
     return view('cicloaveria.edit', compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloAveria  $cicloAveria
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloAveria $cicloAveria)
    {
        //
    }
}
