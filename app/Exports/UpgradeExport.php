<?php

namespace App\Exports;

use App\Upgrade;
use Maatwebsite\Excel\Concerns\FromCollection;

class UpgradeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Upgrade::all();
    }
}
