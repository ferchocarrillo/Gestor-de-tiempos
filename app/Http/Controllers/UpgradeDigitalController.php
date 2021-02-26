<?php

namespace App\Http\Controllers;

use App\upgradeDigital;
use App\Departamentos;
use App\TipoCliente;
use App\Origen;
use App\Revisados;
use App\Corte;
use App\Planadquiere;
use App\Planhistorico;
use App\Planventa;
use App\Activacion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UpgradeDigitalExport;


class UpgradeDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upgrades = upgradeDigital::orderBy('revisados', 'asc')->paginate(10);
            return view('upgradedigital.index',compact('upgrades'));
    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamentos::all();
        $tipoCliente = TipoCliente::all();
        $planadquiere = Planadquiere::all();
        $origen = Origen::all();
        $planhistorico = Planhistorico::all();
        $planventa = Planadquiere::all();
        $activacion = Activacion::all();
        $corte = Corte::all();
        $upgrade = upgradeDigital::all();

        $usuarios = User::all();
        return view('upgradedigital.create',compact('departamentos','corte','planhistorico','planadquiere','activacion','tipoCliente','origen', 'usuarios'));
    }


    public function searchdigitalupgrade( Request $request)
    {
        $upgrades = upgradeDigital::all();
        $searchupgrade = $request->get('searchdigitalupgrade');
        $upgrades= upgradeDigital::firstOrNew()->where('numero', 'like', '%'.$searchupgrade.'%')->paginate(5);
        return view('upgradedigital.index', ['upgrades' => $upgrades]);
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

        $upgrade = new upgradeDigital();
        $upgrade->nombres             = $request ->nombres;
        $upgrade->documento           = $request ->documento;
        $upgrade->correo              = $request ->correo;
        $upgrade->fventa              = $request ->fventa;
        $upgrade->numero              = $request ->numero;
        $upgrade->corte               = $request ->corte;
        $upgrade->planhistorico       = $request->planhistorico;
        $upgrade->planventa           = $request->planadquiere;
        $upgrade->activacion          = $request ->activacion;
        $upgrade->ngrabacion          = $request ->ngrabacion;
        $upgrade->observacion         = $request ->observacion;
        $upgrade->agente              = $user_id.','.$user_nombre;
        $upgrade->revisados           = $request ->revisados;
        $upgrade->estadorevisado      = $request ->estadorevisado;
        $upgrade->obs2                = $request ->obs2;
        $upgrade->backoffice          = $user_id.','.$user_nombre;
        $upgrade->save();
        return back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\upgradeDigital  $upgradeDigital
     * @return \Illuminate\Http\Response
     */
    public function show(upgradeDigital $upgradeDigital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\upgradeDigital  $upgradeDigital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upgrade = upgradeDigital::all();
        $depto = Departamentos::all();
        $tipoCliente = TipoCliente::all();
        $planadquiere = Planadquiere::all();
        $origen = Origen::all();
        $revisadoses = Revisados::all();
        $usuarios = User::all();


        $this->authorize('haveaccess','upgradedigital.edit');



       $upgrade=upgradeDigital::findOrFail($id);
        return view('upgradedigital.edit',compact('upgrade','depto','revisadoses','tipoCliente','origen','planadquiere', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\upgradeDigital  $upgradeDigital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $usuarios = User::all();
        $user_id = Auth::user()->id;
        $user_nombre = Auth::user()->name;
        $revisadoses = Revisados::all();
        $datosUpgrade=request()->except(['_token','_method']);
        upgradeDigital::where('id','=',$id)->update($datosUpgrade);
        $upgrade=upgradeDigital::findOrFail($id);
        return view('upgradedigital.edit',compact('upgrade', 'usuarios','revisadoses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\upgradeDigital  $upgradeDigital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('haveaccess','upgradedigital.destroy');
        upgradeDigital::destroy($id);

        return redirect()->route('upgradedigital.index')
            ->with('status_success','registro successfully removed');
    }

    public function exportExcel()
    {
    return Excel::download(new UpgradeDigitalExport, 'upgradeDigital-list.xlsx');


    
    }
}
