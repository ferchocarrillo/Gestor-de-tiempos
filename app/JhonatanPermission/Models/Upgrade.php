<?php

namespace App\JhonatanPermission\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\UpgradeController;



class Upgrade extends Model


{
protected $fillable = [

    'nombres','documento','fventa', 'numero','corte','planhistorico','planventa','activacion','numero de gravacion', 'observacion','agente','revisado','obs2','backoffice'];
public function Upgrade()

{


    return $this->belongsTo(Upgrade::class);
}
}
