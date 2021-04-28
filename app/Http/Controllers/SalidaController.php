<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Panel;

class SalidaController extends Controller
{
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
    public function store(Request $request, $id)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');
        $this->authorize('haveaccess','panel2.edit');
        $paneles = Panel::findOrFail($id);



        $llave = $user_cedula. $hoy;

        $validatedData = $request->validate([
            'llave'          => ['required|unique:panels,llave'],
        ]);

        $paneles = new Panel();

        $paneles->nombre            = $user_nombre;
        $paneles->cedula            = $user_cedula;
        $paneles->fecha             = $hoy;
        $paneles->ingreso           = $request->turnoin;
        $paneles->salida            = $request->$hora;
        $paneles->breakin           = $request->breakin;
        $paneles->breakout          = $request->breakout;
        $paneles->almuerzoin        = $request->almuerzoin;
        $paneles->almuerzoout       = $request->almuerzoout;
        $paneles->capacitacion      = $request->capacitacion;
        $paneles->pausas            = $request->pausas;
        $paneles->daño              = $request->daño;
        $paneles->evaluacion        = $request->evaluacion;
        $paneles->retro             = $request->retro;
        $paneles->reunion           = $request->reunion;
        $paneles->total             = $request->total;
        $paneles->llave             = $llave;

        $paneles->save();
        return view('panel2.edit',compact('hoy','hora','llave','user_nombre','user_cedula','paneles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');
        $llave = $user_cedula. $hoy;
        $paneles = Panel::findOrFail($id);

        return view('panel.edit' ,compact('paneles','hoy','hora','llave','user_nombre','user_cedula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
