<?php

namespace App\Http\Controllers;

use App\Panel;
use App\Panel2;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;

class Panel2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                // $user_id = Auth::user()->cedula;
                $user_nombre = Auth::user()->name;
                // $user_cedula = Auth::user()->cedula;
                // $hoy = Carbon::now()->format('d-m-Y');
                // $hora = Carbon::now()->format('h:m:i A');
                // $llave = $user_cedula. $hoy;
                $panels = Panel::orderBy('name', 'asc')->where('name','=', $user_nombre)->paginate(10);

                return view('panel.create',compact('panels'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create($id)
    {


    //     $user_id = Auth::user()->cedula;
    //     $user_nombre = Auth::user()->name;
    //     $user_cedula = Auth::user()->cedula;
    //     $hoy = Carbon::now()->format('d-m-Y');
    //     $hora = Carbon::now()->format('h:m:i A');
    //     $llave = $user_cedula. $hoy;
    //     $panel  = Panel::all();

     $paneles = Panel::findOrFail($id);


         return view('panel.edit',compact('paneles'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function show(Panel2 $panel2)
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

        $panels = Panel::all();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('h:m:i A');
        $llave = $user_cedula. $hoy;
        $this->authorize('haveaccess','panel2.edit');
        // $paneles  = Panel::where('name','=', $user_nombre)->where('fecha','=', $hoy)->first();
        $panels = Panel::findOrFail($id);




        return view('panel2.edit',compact('hoy','hora','user_id','user_nombre','user_cedula','llave','panel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panel2 $panel2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panel2  $panel2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel2 $panel2)
    {
        //
    }
}
