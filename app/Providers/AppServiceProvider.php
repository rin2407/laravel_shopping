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
use Validator;
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
        Validator::extend('phone',function($attribute, $value, $parameters, $valaliidator){
            return preg_match('/^(0[578]|09|03)[0-9]{8}$/',$value);
        });
        view()->composer('home.layouts.header',function($view){
            $category=Category::all();
            if(Auth::check()){
                $user_id=Auth::User()->id;
                $total_cart=DB::table('carts')->join('cart_items','cart_items.cart_id','=','carts.cart_id')
                                              ->join('products','cart_items.product_id','=','products.product_id')
                                              ->whereNull('products.deleted_at')
                                              ->where('carts.id',$user_id)->get();
                $total_product=count($total_cart);
                $view->with(['total_cart_product'=>$total_product]);
            }else{
             $view->with(['total_cart_product'=>0]);
            }
         });

         view()->composer('admin.home-admin.dashboard',function($view){
            $total_feedback=DB::table('feedback')->get();
            $total_product=DB::table('products')->get();
            $total_order=DB::table('orders')->get();
            $view->with(['total_feedback'=>$total_feedback,'total_product'=>$total_product,'total_order'=>$total_order]);
         });
    }
}
