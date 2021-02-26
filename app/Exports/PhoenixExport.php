<?php

namespace App\Exports;

use App\phoenix;

use Maatwebsite\Excel\Concerns\FromCollection;

class PhoenixExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return phoenix::all();
    }
}
