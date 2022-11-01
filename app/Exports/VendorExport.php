<?php

namespace App\Exports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class VendorExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vendor::all();
    }

    public function headings(): array{
        return ["ID","PHONE","EMAIL","WEBSITE","ADDRESS","CREATE_AT","UPDATE_AT"];
    }
}
