<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\EntradaController;



class Entrada extends Model


{
protected $fillable = ['fecha','entrada', 'usuario'];
public function Entrada()

{


    return $this->belongsTo(Entrada::class);
}
}
