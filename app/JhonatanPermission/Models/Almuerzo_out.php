<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Almuerzo_outController;



class Almuerzo_out extends Model


{
protected $fillable = ['fecha','almuerzo_out', 'usuario'];
public function Almuerzo_out()

{


    return $this->belongsTo(Almuerzo_out::class);
}
}
