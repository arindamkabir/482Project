<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_owners = DB::table('shop_owners')->get();

        return view('shop_owner.shop_owners', ['shop_owners' => $shop_owners]);
   
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
                    'user_id' => $request->user_id,
                    'med_stock' => $request->location,
                    'shop_name' => $request->shop_name
                ]
        );

        return redirect()->route('admin.shopowners');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
