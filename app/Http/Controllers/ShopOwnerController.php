<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use DB;

class ShopOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = DB::table('shop_owners')
        ->join('users', 'shop_owners.user_id', '=', 'users.id')
        ->select('shop_owners.shop_id','shop_owners.shop_name','shop_owners.location', 'shop_owners.user_id', 'shop_owners.location', 'shop_owners.shop_name','users.name','users.email', 'users.contact')
        ->where('users.id', \Auth::user()->id)
        ->first();
        $products = DB::table('shop_owners')
        ->join('products', 'products.shop_id', '=', 'shop_owners.shop_id')
        ->join('users', 'shop_owners.user_id', '=', 'users.id')
        ->select('products.product_id', 'products.price', 'products.stock','products.description', 'products.image', 'products.name', 'products.created_at', 'products.updated_at')
        ->where('users.id', \Auth::user()->id)
        ->get();

        return view('shopowner.home', ['products' => $products , 'shop' => $shop]);

    }

    public function create(){
        return view('admin.shopowners.create');

    }

    public function store(Request $request){
        DB::table('users')->insert([
            "name" => $request->owner_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "contact" => $request->contact,
            "role" => "2",
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $id = DB::getPdo()->lastInsertId();

        DB::table('shop_owners')->insert([
            "shop_name" => $request->shop_name,
            "location" => $request->location,
            "user_id" => $id,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('admin.shopowners');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $shop_owner = DB::table('shop_owners')->where('shop_id', $id)->first();
        return view('admin.shopowners.edit', ['shop_owner' => $shop_owner]);
    }

    public function update($id, Request $request){
        DB::table('shop_owners')
            ->where('shop_id', $id)
            ->update(
                [
                    'location' => $request->location,
                    'shop_name' => $request->shop_name
                ]
        );

        return redirect()->route('admin.shopowners');

    }

}