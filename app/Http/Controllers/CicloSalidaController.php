<?php

namespace App\Http\Controllers;

use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;
use App\Http\Requests\CicloRequest; #importar request
use Illuminate\Support\Carbon as SupportCarbon;


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
    public function store(CicloRequest $request, Ciclo $ciclosos)
    {


        Carbon::setLocale('co');
        Carbon::now();

        //convertimos la fecha 1 a objeto Carbon
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInMinutes($date3);
        $tiempoD = $carbon1->floatDiffInMinutes($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,1,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepau = ($tiempoH - $tiempoG);
        $timepau = number_format($timepau,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timeluch = $ciclosos->timelunch;
        $ingresoA = $carbon1->floatDiffInHours($ingreso);
        $salidaB = $carbon1->floatDiffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timeluch;
        $total = number_format($total,1,'.',',');
        $request->validate([
            'llave'          => ['required|unique:ciclos,llave'],
        ]);

        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $request->fecha;
        $ciclosos->ingreso           = $ingreso;
        $ciclosos->salida            = $salida;
        $ciclosos->llave             = $llave;
        $ciclosos->total             = $request->total;

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

        //convertimos la fecha 1 a objeto Carbon
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInMinutes($date3);
        $tiempoD = $carbon1->floatDiffInMinutes($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,1,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepau = ($tiempoH - $tiempoG);
        $timepau = number_format($timepau,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timelunch2 = $ciclosos->timelunch;
        $ingresoA = $carbon1->floatDiffInHours($ingreso);
        $salidaB = $carbon1->floatDiffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timelunch2;
        $total = number_format($total,1,'.',',');


        return view('ciclosalida.edit' ,compact('total','ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timelunch2','timecapa','timepau','timedaño','timeeva', 'timeretro','timereunion'));
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

        //convertimos la fecha 1 a objeto Carbon
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInMinutes($date3);
        $tiempoD = $carbon1->floatDiffInMinutes($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,1,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepau = ($tiempoH - $tiempoG);
        $timepau = number_format($timepau,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timelunch2 = $ciclosos->timelunch;
        $ingresoA = $carbon1->floatDiffInHours($ingreso);
        $salidaB = $carbon1->floatDiffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timelunch2;
        $total = number_format($total,1,'.',',');

        $datosCiclo =request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosCiclo);
     //return response()->json($ciclo);
     return view('ciclosalida.edit', compact('total','ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','ciclosos','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timelunch2','timecapa','timepau','timedaño','timeeva', 'timeretro','timereunion'));
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
