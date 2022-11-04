<?php

namespace App\Imports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VendorImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vendor([
            "name" => $row['name'],
            "phone" => $row["phone"],
            "email" => $row["email"],
            "website"=> $row["website"],
            "address"=>$row["address"]
        ]);
    }
}
