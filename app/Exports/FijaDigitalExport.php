<?php

namespace App\Exports;


use App\fijaDigital;
use Maatwebsite\Excel\Concerns\FromCollection;

class FijaDigitalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return fijaDigital::all();
    }
}
