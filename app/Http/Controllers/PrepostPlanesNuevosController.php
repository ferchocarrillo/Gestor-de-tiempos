<?php

namespace App\Http\Controllers;

use App\Planes_prepost;
use App\PrepostPlanesNuevos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\User;
class PrepostPlanesNuevosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $prepostPLNs =  Planes_prepost::orderBy('id','ASC')->paginate(15);

        return view('prepostplnew.index',compact('prepostPLNs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prepostPLN =  Planes_prepost::all();

        return view('prepostplnew.create',compact('prepostPLN'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Planes_prepost $Planes_preposts)
    {

        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;

        $Planes_preposts = new Planes_prepost();
        $Planes_preposts->planes          = $request ->nuevo;
        $Planes_preposts->usuario               = $user_id.','.$user_nombre;
        $Planes_preposts->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planes_prepost  $Planes_prepost
     * @return \Illuminate\Http\Response
     */
    public function show(Planes_prepost $Planes_prepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planes_prepost  $Planes_prepost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prepostPLN=Planes_prepost::findOrFail($id);
        return view('prepostplnew.edit',compact('prepostPLN'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planes_prepost  $Planes_prepost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $datosPrepostPLN=request()->except(['_token','_method']);
        Planes_prepost::where('id','=',$id)->update($datosPrepostPLN);
        $prepostPLN=Planes_prepost::findOrFail($id);

        return view('prepostplnew.edit',compact('prepostPLN'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planes_prepost  $Planes_prepost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','Prepostplnew.destroy');
        Planes_prepost::destroy($id);

        return redirect('prepostplnew')->with('status_success','Plan removido exitosamente');
    }
}
