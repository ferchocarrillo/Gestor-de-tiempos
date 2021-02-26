<?php

namespace App\Exports;


use App\upgradeDigital;
use Maatwebsite\Excel\Concerns\FromCollection;

class UpgradeDigitalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return upgradeDigital::all();
    }
}