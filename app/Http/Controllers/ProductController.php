<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //show all product
    public function index(){

        $medicines = DB::table('products')->get();

        return view('product.products', ['products' => $products]);
    }


    //show the add product form

    public function create(){
    
        return view('admin.products.create');

    }

    //store a row into the database

    public function store(Request $request){

        DB::table('products')->insert(
            [ 
                'name' => $request->name,
                'stock' => $request->stock,
                'price' => $request->price
            ]
        );

        return redirect()->route('admin.products');

    }

    public function edit($id){
        $medicine = DB::table('products')->where('product_id', $id)->first();
        return view('admin.products.edit', ['product' => $product]);
    }

    public function update($id, Request $request){
        DB::table('products')
            ->where('product_id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'stock' => $request->stock,
                    'price' => $request->price
                ]
        );

        return redirect()->route('admin.products');

    }
    public function destroy($id){

        DB::table('products')->where('product_id', $id)->delete();
        
    }


    //show a specific product
    public function show($id){
        $medicine = DB::table('products')->where('product_id', $id)->first();
        return view('product.product', ['product' => $product]);
    }

    //show all product (admin panel)


   
}
