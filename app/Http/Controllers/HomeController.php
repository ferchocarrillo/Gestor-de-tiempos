<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panel;
use App\JhonatanPermission\Models\Registro;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use Carbon\Traits\IntervalStep;


//ventas//
class HomeController extends Controller

{
    /**

     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setlocale('co');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $registro = Registro::all();

        $hoy = Carbon::today()->format('d-m-Y');
        $hora = Carbon::now()->format('h:i:s');
        $ago = Carbon::now()->diffForHumans();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        // $horaRegistro['ingreso'] = Registro::where('fecha','=',$hoy);

        $paneles = Panel::orderBy('fecha', 'desc')->where('nombre','=', $user_nombre)->paginate(10);


        return view('panel.index', compact('hoy','hora','ago', 'registro', 'paneles'));


         }

             /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()

    {
        $hoy = Carbon::today()->format('d-m-Y');
        $hora = Carbon::now()->format('h:i:s');
        $ago = Carbon::now()->diffForHumans();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;

        return view('registro.create', compact('hoy','hora','ago'));


         }

         public function store(Request $request)
    {

        $hoy = Carbon::today();
        $hora = Carbon::now()->format('H:i:s');
        // $ago = Carbon::now()->diffForHumans('contenedor_reloj');
        $user_ced = Auth::user()->cedula;
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        // $request->validate([
        //      'llave' => 'required|unique:entrada,llave',
        //  ]);

       $registro = new Registro();
       $registro->id_user = $user_id;
       $registro->cedula = $user_ced;
       $registro->nombre = $user_nombre;
       $registro->fecha = $hoy;
       $registro->entrada = $hora;
       $registro->llave = $user_id.$hoy;

       $registro->save();
        return response()->json($registro);

      // return back();
    }










}
