<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\JhonatanPermission\Models\Registro;
use App\Http\Controllers\Timestamp;
use DateTime;
use CreateEntradaTable;
use PhpParser\Node\Expr\Print_;
use Carbon\Carbon;
use App\Http\Requests\EntradaStoreRequest;
use App\Http\Requests\EntradaUpdateRequest;

class RegistroController extends Controller



{

    public function __construct()
    {
        Carbon::setLocale('co');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro =  Registro::orderBy('fecha','Desc')->paginate(30);
        return view('registro.index',compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $registro = Registro::all();
        $hoy = Carbon::today()->format('d-m-Y');
        $hora = Carbon::now()->format('h:i:s');
        $ago = Carbon::now()->diffForHumans();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $horaRegistros['ingreso'] = Registro::where('fecha','=',$hoy);




        return view('registro.create', compact('hoy','hora','ago','horaRegistros', 'registro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntradaStoreRequest $request)
    {

        $hoy = Carbon::today();
        $hora = Carbon::now()->format('H:i:s');
        // $ago = Carbon::now()->diffForHumans('contenedor_reloj');
        $user_ced = Auth::user()->cedula;
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;

       $registro = new Registro();
       $registro->id_user = $user_id;
       $registro->cedula = $user_ced;
       $registro->nombre = $user_nombre;
       $registro->fecha = $hoy;
       $registro->entrada = $hora;
       $registro->llave = $user_ced."|".$hoy;

       $registro->save();
        return response()->json($registro);

      // return back();
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
    public function update(EntradaUpdateRequest $request, $id)
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
