<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Break_inController;



class Break_in extends Model


{
protected $fillable = ['fecha','break_in', 'usuario'];
public function Break_in()

{


    return $this->belongsTo(Break_in::class);
}
}
