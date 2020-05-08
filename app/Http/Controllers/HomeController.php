<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Image_product;
use App\Banner;
use App\Size;
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
        $list_banner= Banner::where('status','=',1)->get();
             return view('home.home',['product_new'=>$product_new,'product_sell'=>$product_sell,'list_post'=>$list_post,'list_banner'=>$list_banner]);
    }
    public function show($id){
        $product_detail= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_id','=',$id)->first();
                          DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_id','=',$id)->update(array('products.view_count'=>$product_detail->view_count+1));
        $list_comment=DB::table('feedback_products')->join('feedback','feedback_products.feedback_id','=','feedback.feedback_id')
                                                    ->join('users','feedback.id','=','users.id')
                                                    ->orderByDesc('feedback.created_at')
                                                    ->where('feedback_products.product_id',$product_detail->product_id)->get();
        $product_relate= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.category_id','=',$product_detail->category_id)->get();
        return view('home.product.product-detail',['p_detail'=>$product_detail,'p_relate'=>$product_relate,'list_comment'=>$list_comment]);
    }
    public function all(){
        $product_all=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.product_id')
                      ->whereNull('products.deleted_at')
                      ->get();
        $category_all= Category::all();
        $size_all=Size::all();
        return view('home.product.product-all',['product_all'=>$product_all,'category_all'=>$category_all,'size_all'=>$size_all]);
    }
}
