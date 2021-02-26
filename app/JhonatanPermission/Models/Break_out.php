<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Break_outController;



class Break_out extends Model


{
protected $fillable = ['fecha','break_out', 'usuario'];
public function Break_out()

{


    return $this->belongsTo(Break_out::class);
}
}
