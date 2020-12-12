<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\Vie
     */
    public function index()
    {
        //$products = product::all();
        $products = product::with(['user'])->get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *ürün ekleme;
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *ürünlerin veritabanına göndermek;
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $price = $request->get('price');
        $created_by = User::find(1);
      //  dd($request->all());
        product::create([
            'name' => $name,
            'price' => $price,
            'created_by' => $created_by->id
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function export(){
        return Excel::download(new ProductExport, 'Product.xlsx');
    }


    public function import() 
    {
        Excel::import(new ProductImport, 'Product.xlsx');
        
        return redirect('/upload-product')->with('success', 'All good!');
    }

}
