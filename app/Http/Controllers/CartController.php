<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Product;
use App\Cart;
use App\Cart_item;
class CartController extends Controller
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
        $product_id=$request->get('data_product_id');
        $user_id = Auth::User()->id;
        $check_cart = DB::table('cart_items')->join('carts', 'cart_items.cart_id', '=', 'carts.cart_id')
                     ->where('carts.id', $user_id)
                      ->where('cart_items.product_id', $product_id)->get();
    if (count($check_cart) == 1) {
        echo "yes";
    } else {
        // $cart = new cart();
        // $cart_item = new Cart_item();
        // // add cart
        // $cart->id = $user_id;
        // $cart->save();
        // // add cart_detail
        // $cart_id = $cart->cart_id;
        //     $cart_item->product_id = $product_id;
        //     $cart_item->cart_id = $cart_id;
        //     $cart_item->save();
            echo "Thêm vào giỏ hàng thành công";
    }


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
