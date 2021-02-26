<?php

namespace App\Http\Controllers;

use App\prepostDigital;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Departamentos;
use App\TipoCliente;
use App\Origen;
use App\Revisados;
use App\Velocidad;
use App\Planes_prepost;
use App\Estrato;
use App\Activacion;
use App\Tecnologia;
use App\Adicionales;
use App\Producto;
use App\Planadquiere;
use App\Revisiones;
use App\Corte;
use App\User;
use stdClass;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PrepostDigitalExport;


class PrepostDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
        $corte = Corte::all();
        $estrato = Estrato::all();
        $velocidad = Velocidad::all();
        $tecnologia = Tecnologia::all();
        $producto = Producto::all();
        $adicionales = Adicionales::all();
        $activacion = Activacion::all();
        $tipoCliente = Tipocliente::all();
        $plan = Planes_prepost::all();
        $usuarios = User::all();
        $user_id = Auth::user()->id;

        $preposts = prepostDigital::orderBy('revisados', 'asc')->paginate(10);
        return view('prepostdigital.index',compact('preposts','corte','estrato','tipoCliente','velocidad','producto','adicionales', 'activacion','plan', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depto = Departamentos::all();
        $corte = Corte::all();
        $estrato = Estrato::all();
        $velocidad = Velocidad::all();
        $tecnologia = Tecnologia::all();
        $producto = Producto::all();
        $adicionales = Adicionales::all();
        $activacion = Activacion::all();
        $tipocliente = Tipocliente::all();
        $plan = Planes_prepost::all();
        $usuarios = User::all();
        $user_id = Auth::user()->id;
        return view('prepostdigital.create',compact('depto','plan','activacion','estrato','velocidad','tipocliente','tecnologia','producto', 'corte','adicionales','usuarios'));

    }

    public function searchprepost( Request $request)
    {
        $preposts = prepostDigital::all();

        $searchprepost = $request->get('searchprepost');
        $preposts= prepostDigital::firstOrNew()->where('numero', 'like', '%'.$searchprepost.'%')->paginate(5);
        return view('prepostdigital.index', ['preposts' => $preposts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $prepost = new prepostDigital();
        $prepost->numero             = $request ->numero;
        $prepost->nombres              = $request ->nombres;
        $prepost->documento            = $request ->documento;
        $prepost->fexpedicion          = $request ->fexpedicion;
        $prepost->tipocliente          = $request ->tipocliente;
        $prepost->correo               = $request ->correo;
        $prepost->departamento         = $request ->departamento;
        $prepost->ciudad               = $request ->id_ciudad;
        $prepost->barrio               = $request ->barrio;
        $prepost->direccion            = $request ->direccion;
        $prepost->corte                = $request ->corte;
        $prepost->planventa            = $request ->plan;
        $prepost->activacion           = $request ->activacion;
        $prepost->token                = $request ->token;
        $prepost->observaciones        = $request ->observaciones;
        $prepost->agente               = $user_id.','.$user_nombre;
        $prepost->revisados            = $request ->revisados;
        $prepost->estadorevisado       = $request ->estadorevisado;
        $prepost->obs2                 = $request ->obs2;
        $prepost->backoffice           = $user_id.','.$user_nombre;

        $prepost->save();
        return back() ;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prepost  $prepost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prepost = prepostDigital::all();
        $depto = Departamentos::all();
        $tipoCliente = TipoCliente::all();
        $planadquiere = Planadquiere::all();
        $origen = Origen::all();
        $revisadoses = Revisados::all();
        $usuarios = User::all();
        $this->authorize('haveaccess','prepostdigital.edit');
        $prepost = prepostDigital::findOrFail($id);
        return view('prepostdigital.edit',compact('prepost','depto','revisado','tipoCliente','origen','planadquiere', 'usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prepost  $prepost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)


    {

        $prepost = prepostDigital::all();
        $depto = Departamentos::all();
        $tipoCliente = TipoCliente::all();
        $planadquiere = Planadquiere::all();
        $origen = Origen::all();
        $revisadoses = Revisados::all();
        $usuarios = User::all();


        $this->authorize('haveaccess','prepostdigital.edit');



       $prepost=prepostDigital::findOrFail($id);
        return view('prepostdigital.edit',compact('prepost','depto','revisadoses','tipoCliente','origen','planadquiere', 'usuarios'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prepost  $prepost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuarios = User::all();
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $revisadoses = Revisados::all();
        $datosPrepost=request()->except(['_token','_method']);
        prepostDigital::where('id','=',$id)->update($datosPrepost);
        $prepost=prepostDigital::findOrFail($id);
        return view('prepostdigital.edit',compact('prepost', 'usuarios','revisadoses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prepost  $prepost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','prepostdigital.destroy');
        prepostDigital::destroy($id);

        return redirect()->route('prepost.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
{
return Excel::download(new PrepostDigitalExport, 'prepostDigital-list.xlsx');

}
}
