<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\AlmuerzoController;



class Almuerzo extends Model


{
protected $fillable = ['fecha','almuerzo', 'usuario'];
public function Almuerzo()

{


    return $this->belongsTo(Almuerzo::class);
}
}
