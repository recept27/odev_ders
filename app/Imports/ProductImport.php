<?php

namespace App\Imports;

use App\;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new product([
            'product_name'     => $row[0],
           'pruduct_id'    => $row[1], 
           'product_by_at'     => $row[2],
           'price'    => $row[3], 
           'description' => Hash::make($row[4]),
        ]);
    }
}
