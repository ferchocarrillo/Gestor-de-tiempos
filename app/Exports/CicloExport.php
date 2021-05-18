<?php

namespace App\Exports;

use App\Ciclo;
use Maatwebsite\Excel\Concerns\FromCollection;

class CicloExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ciclo::all();
    }
}
