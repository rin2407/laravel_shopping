<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
class UserCheckoutController extends Controller
{
    public function edit($id){
        $user= User::findOrFail($id);
        $list_cart=DB::table('carts')->join('cart_items','cart_items.cart_id','=','carts.cart_id')
                                      ->join('products','cart_items.product_id','=','products.product_id')
                                      ->where('carts.id',$id)->get();
        return view('user.checkout',['user'=>$user,'list_cart'=>$list_cart]);
    }
    public function update($id,Request $request){

    }
}
