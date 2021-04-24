<?php

namespace App\Http\Controllers;

use App\Panel;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
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
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');
        return view('panel/create',compact('hoy','hora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Panel $paneles)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;

        $paneles = new Panel();

        $paneles->nombre            = $request->nombre;
        $paneles->cedula            = $request->cedula;
        $paneles->fecha             = $request->fecha;
        $paneles->ingreso           = $request->ingreso;
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

        $paneles->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function show(Panel $panel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function edit(Panel $panel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panel $panel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel $panel)
    {
        //
    }
}
