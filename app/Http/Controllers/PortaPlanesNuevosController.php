<?php

namespace App\Http\Controllers;

use App\Planadquiere;
use App\PortaDigital;
use App\PortaPlanesNuevos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\User;

class PortaPlanesNuevosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $portaPLNs =  Planadquiere::orderBy('id','ASC')->paginate(15);

        return view('portaplnew.index',compact('portaPLNs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portaPLN =  Planadquiere::all();

        return view('portaplnew.create',compact('portaPLN'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , PortaPlanesNuevos $PortaPlanesNuevoss)
    {

        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;

        $PortaPlanesNuevoss = new PortaPlanesNuevos();
        $PortaPlanesNuevoss->planadquiere          = $request ->nuevo;
        $PortaPlanesNuevoss->usuario               = $user_id.','.$user_nombre;
        $PortaPlanesNuevoss->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortaPlanesNuevos  $portaPlanesNuevos
     * @return \Illuminate\Http\Response
     */
    public function show(PortaPlanesNuevos $portaPlanesNuevos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortaPlanesNuevos  $portaPlanesNuevos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portaPLN=PortaPlanesNuevos::findOrFail($id);
        return view('portaplnew.edit',compact('portaPLN'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortaPlanesNuevos  $portaPlanesNuevos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $datosPortaPLN=request()->except(['_token','_method']);
        PortaPlanesNuevos::where('id','=',$id)->update($datosPortaPLN);
        $portaPLN=PortaPlanesNuevos::findOrFail($id);
        $portadigitals=PortaDigital::all();
        return view('portaplnew.edit',compact('portaPLN','portadigitals'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortaPlanesNuevos  $portaPlanesNuevos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','portaplnew.destroy');
        PortaPlanesNuevos::destroy($id);

        return redirect('portaplnew')->with('status_success','Plan removido exitosamente');
    }
}
