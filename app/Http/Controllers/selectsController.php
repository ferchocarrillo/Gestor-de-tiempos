<?php

namespace App\Http\Controllers;
use App\Ciudades;
use Illuminate\Http\Request;

class selectsController extends Controller
{
    public function Ciudad(Request $request){

        $ciudades = Ciudades::where('id_departamento', $request->id)->get();
        $html='';
        foreach ($ciudades as $key) {
            $html.="<option value='".$key['Id_ciudad']."'>".$key['Municipio']."</option>";
        }


            return response()->json($ciudades) ;

    }
}
