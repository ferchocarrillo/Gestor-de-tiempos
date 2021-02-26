<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\PrepostController;



class Prepost extends Model


{
protected $fillable = [

    'numero de celular','nombres','documento','fexpedicion','tipocliente','correo','departamento','ciudad','barrio','direccion','corte','planventa','activacion','token','observaciones','agente','revisado','obs2','backoffice'];
public function Prepost()

{


    return $this->belongsTo(Prepost::class);
}


}
