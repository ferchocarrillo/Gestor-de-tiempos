<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\PortabilidadController;



class Portabilidad extends Model


{
protected $fillable = [

    'numero','documento','nombres', 'apellidos','correo','departamento','ciudad','barrio','direccion', 'nip','tipocliente','planadquiere','ncontacto','imei','fvc','fentrega','fexpedicion','fnacimiento','origen','ngrabacion','observacion','agente','revisado','obs2','backoffice'];
public function Portabilidad()

{


    return $this->belongsTo(Portabilidad::class);
}
}
