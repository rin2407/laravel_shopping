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
        DB::table('carts')->insert(
            ['id' =>$user_id]
        );
        $cart_id = DB::getPDO()->lastInsertId();
        DB::table('cart_items')->insert(
            ['product_id' =>$product_id,'cart_id'=>$cart_id,'quantity'=>1]
        );
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id=Auth::User()->id;
        $cart_detail=DB::table('carts')->join('cart_items','cart_items.cart_id','=','carts.cart_id')
                                      ->join('products','cart_items.product_id','=','products.product_id')
                                      ->join('image_products','image_products.product_id','=','products.product_id')
                                      ->whereNull('products.deleted_at')
                                      ->where('carts.id',$user_id)->get();
        return view('home.cart.cart-detail',['cart_detail'=>$cart_detail]);
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
    public function update(Request $request)
    {
        $user_id = Auth::User()->id;
        $quantity = $request->get('data_quantity');
        $product_id = $request->get('data_product_id');
         DB::table('cart_items')->join('carts', 'cart_items.cart_id', '=', 'carts.cart_id')
                                                       ->join('products', 'cart_items.product_id', '=', 'products.product_id')
                                                       ->where('carts.id', $user_id)
                                                       ->where('cart_items.product_id', $product_id)
                                                       ->update(array('quantity' => $quantity));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cart_id=$request->cart_id;
        $user_id= Auth::User()->id;
        DB::table('cart_items')->join('products', 'cart_items.product_id', '=', 'products.product_id')
                                                    ->where('cart_items.cart_id',$cart_id)
                                                    ->delete();
        DB::table('carts')->where('cart_id', $cart_id)->delete();
        return redirect()->route('cart.show');
    }
}
