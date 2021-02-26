<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\RechazosController;



class Rechazos extends Model


{
protected $fillable = [

    'nombre del cliente','documento','causa de rechazo', 'tipo de proceso','fecha del rechazo','observaciones','agente'];
public function Rechazos()

{


    return $this->belongsTo(Rechazos::class);
}


}
