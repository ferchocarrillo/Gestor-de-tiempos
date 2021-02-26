<?php

namespace App\Exports;


use App\lineaNueva;
use Maatwebsite\Excel\Concerns\FromCollection;

class lineaNuevaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return lineaNueva::all();
    }
}
