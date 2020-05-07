<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Image_product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product_new=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.product_id')
                      ->whereNull('products.deleted_at')
                      ->get();
        $product_sell=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.view_count')
                      ->whereNull('products.deleted_at')
                      ->paginate(8);
        $list_post=DB::table('posts')
                      ->join('post_details','post_details.post_id','posts.post_id')
                      ->whereNull('posts.deleted_at')
                      ->get();
             return view('home.home',['product_new'=>$product_new,'product_sell'=>$product_sell,'list_post'=>$list_post]);
    }
    public function show($id){
        $product_detail= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_id','=',$id)->first();
        $product_relate= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.category_id','=',$product_detail->category_id)->get();
        return view('home.product.product-detail',['p_detail'=>$product_detail,'p_relate'=>$product_relate]);
    }
}
