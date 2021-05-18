<?php

namespace App\Http\Controllers;

use App\PersonalActivo;
use App\Http\Requests\CicloRequest;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CicloExport;

class PersonalActivoController extends Controller
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
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::orderBy('fecha', 'desc')->paginate(10);


        //return back();
       return view ('personalgeneral.index',compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));

    }

    public function searchpersonalgeneral( Request $request)

    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();
        $searchpersonalgeneral = $request->get('searchpersonalgeneral');
        $ciclosos = Ciclo::firstOrNew()->where('cedula', 'like', '%'.$searchpersonalgeneral.'%')->paginate(30);
        return view('personalgeneral.index', ['personalgeneral' => $ciclosos],compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonalActivo  $personalActivo
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalActivo $personalActivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalActivo  $personalActivo
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalActivo $personalActivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalActivo  $personalActivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalActivo $personalActivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonalActivo  $personalActivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalActivo $personalActivo)
    {
        //
    }
    public function exportExcel()
    {

        return Excel::download(new CicloExport, 'ciclo-list.xlsx');
    }
}
