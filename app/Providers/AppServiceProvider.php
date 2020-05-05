<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
use Auth;
use App\User;
use App\Cart;
use App\Cart_item;
use App\Product;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home.layouts.header',function($view){
            $category=Category::all();
            if(Auth::check()){
                $user_id=Auth::User()->id;
                $total_cart=DB::table('carts')->join('cart_items','cart_items.cart_id','=','carts.cart_id')
                                              ->join('products','cart_items.product_id','=','products.product_id')
                                              ->where('carts.id',$user_id)->get();
                $total_product=count($total_cart);
                $view->with(['total_cart_product'=>$total_product]);
            }else{
             $view->with(['total_cart_product'=>0]);
            }
         });
    }
}
