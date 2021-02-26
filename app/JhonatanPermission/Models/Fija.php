<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\FijaController;



class Fija extends Model


{
protected $fillable = [

    'nombres','documento','fexpedicion','departamento','ciudad','barrio','direccion','estrato','ngrabacion','ncontacto','producto','adicionales','velocidad','tecnologia','observaciones','agente','revisado','obs2','backoffice'];
public function Fija()

{


    return $this->belongsTo(Fija::class);
}


}
