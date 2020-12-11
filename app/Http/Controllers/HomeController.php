<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class HomeController extends Controller
{
    function ShowView(){
       // $users=DB::table('users')->get();
       $users=User::all();
        return view('hakkimda',compact('users',));
    }
    function ShowView1(){
        $urunler=DB::table('products')->get();
        return view('urunler',compact('urunler'));
    }
    function ShowView2(){

        return view('alinanurun');
    }
}

