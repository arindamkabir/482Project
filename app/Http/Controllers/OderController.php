<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $data = DB::table('orders')->insert(
            [ 
                'user_id' => \Auth::id(),
                'pay_method' =>  $request->pay_method,
                'total' => Cart::total(),
                'created_at' => date('Y-m-d H:i:s')
            ]
        );

        $id = DB::getPdo()->lastInsertId();;

        foreach(Cart::content() as $item){
            DB::table('order_products')->insert(
                [
                    'order_id' => $id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty
                ]);
        }; 

        $total = Cart::total();
        $order_id = $id;

        Cart::destroy();


        return redirect()->route('order.pending',
        [
            'order_id' => $order_id, 
            'total' => $total
        ]); 
    }


    public function pastOrders(){

        $orders = DB::table('orders')
        ->where('user_id', \Auth::id())
        ->get();    
        // dd($orders);

        $order_products = DB::table('orders')
        ->join('order_products', 'orders.order_id', '=', 'order_products.order_id')
        ->join('products', 'products.product_id', '=', 'order_products.product_id')
        ->select('products.price',  'products.name', 'products.product_id', 'order_product.quantity','orders.user_id', 'orders.total', 'orders.order_id')
        ->where('user_id' , \Auth::id())
        ->get();

        return view('order.past_orders', ['orders' => $orders, 'order_products' => $order_products]);
    }





}


