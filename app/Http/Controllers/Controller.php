<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class UsersController extends Controller 
{
    public function import() 
    {
        Excel::import(new UsersImport, 'Product.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}