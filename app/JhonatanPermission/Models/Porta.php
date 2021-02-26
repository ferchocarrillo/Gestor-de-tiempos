<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\PortaController;



class Porta extends Model


{
    protected $fillable = [

        'departamento','tipocliente','planadquiere','origen','revisados'];
    public function Porta()

    {


    return $this->belongsTo(Porta::class);
}
}
