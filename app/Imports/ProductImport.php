<?php

namespace App\Imports;


use App\ProductImport1;


use Illuminate\Support\Facades\product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductImport implements FromCollection
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function collection(array $row)
    {
        return new product([
            'name'     => $row[1],
           'price'    => $row[2], 
             'product_ty_id'    => $row[5], 
              'created_by'    => $row[8], 

           

        ]);
    }
}
