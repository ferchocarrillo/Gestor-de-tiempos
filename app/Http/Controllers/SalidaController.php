<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\JhonatanPermission\Models\Salida;
use App\Http\Controllers\Timestamp;
use DateTime;
use CreateSalidasTable;


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
        return view('salida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $myDateTime = DateTime::createFromFormat('America/Bogota','Y-m-d');
    /*$formattedweddingdate = $myDateTime->format('d-m-Y');*/

        $user_id =Auth::user()->id;
        $user_nombre =Auth::user()->name;
        $Salida = new Salida();
        $Salida->fecha = date('Y-m-d');
        $Salida->Salida = date('H:i:s');
        $Salida->usuario = $user_id.','.$user_nombre;


        echo $Salida;
        $Salida->save();
       //Registro::create($request->all());
        return (@getdate((int)$myDateTime));
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
        //
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
