<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\SalidaController;



class Salida extends Model


{
protected $fillable = ['fecha','Salida', 'usuario'];
public function Salida()

{


    return $this->belongsTo(Salida::class);
}
}
