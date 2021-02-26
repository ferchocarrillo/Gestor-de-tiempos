<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PhpParser\Node\Stmt\Break_;
use App\Porta;
use App\Upgrade;
use App\Fija;
use App\fijaDigital;
use App\JhonatanPermission\Models\Registro;
use Illuminate\Support\Facades\Auth;
use App\PortaDigital;
use App\Prepost;
use App\prepostDigital;
use App\upgradeDigital;
use App\lineaNueva;
use App\phoenix;
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
        Carbon::setlocale('es');
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




        return view('registro.create', compact('hoy','hora','ago', 'registro'));


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
