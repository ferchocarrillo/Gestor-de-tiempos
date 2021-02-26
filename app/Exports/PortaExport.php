<?php

namespace App\Exports;

use App\Porta;
use Maatwebsite\Excel\Concerns\FromCollection;

class PortaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Porta::all();
    }
}
