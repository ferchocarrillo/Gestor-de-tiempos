<?php

namespace App\Exports;

use App\PortaDigital;
use Maatwebsite\Excel\Concerns\FromCollection;

class PortaDigitalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PortaDigital::all();
    }
}
