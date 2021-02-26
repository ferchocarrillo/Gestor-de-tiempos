<?php

namespace App\Exports;

use App\Fija;
use Maatwebsite\Excel\Concerns\FromCollection;

class FijaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fija::all();
    }
}
