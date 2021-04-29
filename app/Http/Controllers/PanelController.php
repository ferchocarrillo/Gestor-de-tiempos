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
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');
        $llave = $user_cedula. $hoy;
        $ciclos= Panel::orderBy('fecha', 'asc')->paginate(10);
        // $panels = Panel::orderBy('name', 'asc')->where('name','=', $user_nombre)->paginate(10);

        return view('panel.index',compact('hoy','hora','user_id','user_nombre','user_cedula','llave','ciclos'));
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
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $llave = $user_cedula. $hoy;
        $panels  = Panel::all();
       return view('panel.create',compact('hoy','hora','user_id','user_nombre','user_cedula','llave','panels'));
       // return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Panel $panels)
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

        $panels = new Panel();

        $panels->nombre            = $user_nombre;
        $panels->cedula            = $user_cedula;
        $panels->fecha             = $hoy;
        $panels->ingreso           = $hora;
        $panels->salida            = $request->salida;
        $panels->breakin           = $request->breakin;
        $panels->breakout          = $request->breakout;
        $panels->almuerzoin        = $request->almuerzoin;
        $panels->almuerzoout       = $request->almuerzoout;
        $panels->capacitacion      = $request->capacitacion;
        $panels->pausas            = $request->pausas;
        $panels->daño              = $request->daño;
        $panels->evaluacion        = $request->evaluacion;
        $panels->retro             = $request->retro;
        $panels->reunion           = $request->reunion;
        $panels->total             = $request->total;
        $panels->llave             = $llave;

        $panels->save();
        return back();

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
        $panels = Panel::findOrFail($id);

        return view('panel.edit' ,compact('panels','hoy','hora','llave','user_nombre','user_cedula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('h:m:i');
        $llave = $user_cedula. $hoy;
        $datosSalida=request()->except(['_token','_method']);
        Panel::where('id','=',$id)->update($datosSalida);
        $panels=Panel::findOrFail($id);
        return view('panel.edit',compact('panels', 'usuarios','revisadoses','hoy','hora','llave'));
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
