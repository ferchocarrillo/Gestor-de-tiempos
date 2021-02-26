<?php

namespace App\Exports;


use App\prepostDigital;
use Maatwebsite\Excel\Concerns\FromCollection;

class PrepostDigitalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return prepostDigital::all();
    }
}