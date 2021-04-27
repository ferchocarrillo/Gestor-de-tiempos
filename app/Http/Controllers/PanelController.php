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
        $user_nombre = Auth::user()->name;

        $paneles = Panel::orderBy('name', 'asc')->where('name','=', $user_nombre)->paginate(10);
        return view('panel.create',compact('paneles','user_nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');
        $llave = $user_cedula. $hoy;

        return view('panel.create',compact('hoy','hora','user_id','user_nombre','user_cedula','llave'));
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
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');

        $llave = $user_cedula. $hoy;

        $validatedData = $request->validate([
            'llave'          => ['required|unique:panels,llave'],
        ]);

        $paneles = new Panel();

        $paneles->nombre            = $user_nombre;
        $paneles->cedula            = $user_cedula;
        $paneles->fecha             = $hoy;
        $paneles->ingreso           = $hora;
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
        return view('panel2.create',compact('hoy','hora','llave','user_nombre','user_cedula'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panel  $panel2
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
