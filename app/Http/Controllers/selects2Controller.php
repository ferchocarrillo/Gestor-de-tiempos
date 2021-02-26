<?php

namespace App\Http\Controllers;
use App\EstadoRevisado;
use Illuminate\Http\Request;

class selects2Controller extends Controller
{
    public function Revisados(Request $request){

        $revisadoses = EstadoRevisado::where('id_revision', $request->id)->get();
        $html='';
        foreach ($revisadoses as $key) {
            $html.="<option value='".$key['id_estadorevisado']."'>".$key['estado']."</option>";
        }


            return response()->json($revisadoses) ;

    }
}


