<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Product;
use App\Category;
use App\Image_product;
use App\Banner;
use App\Size;
use Session;
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
    public function changeLanguage($language)
    {
        \Session::put('lang', $language);
    
        return redirect()->back();
    }
    public function index()
    {

        $product_new=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.product_id')
                      ->whereNull('products.deleted_at')
                      ->where('products.amount','>',0)
                      ->get();
        $product_sell=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.view_count')
                      ->where('products.amount','>',0)
                      ->whereNull('products.deleted_at')
                      ->paginate(8);
        $list_post=DB::table('posts')
                      ->join('post_details','post_details.post_id','posts.post_id')
                      ->whereNull('posts.deleted_at')
                      ->get();
        $list_banner= Banner::where('status','=',1)->get();
             return view('home.home',['product_new'=>$product_new,'product_sell'=>$product_sell,'list_post'=>$list_post,'list_banner'=>$list_banner]);
    }
    public function show($name){
        $product_detail= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_name_slug','=',$name)->first();
                          DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_name_slug','=',$name)->update(array('products.view_count'=>$product_detail->view_count+1));
        $list_comment=DB::table('feedback')->join('users','feedback.id','=','users.id')
                                            ->join('products','feedback.product_id','=','products.product_id')
                                            ->orderByDesc('feedback.created_at')
                                            ->where('products.product_name_slug',$product_detail->product_name_slug)->get();
        $product_relate= DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->whereNull('products.deleted_at')
                          ->where('products.category_id','=',$product_detail->category_id)->get();
        return view('home.product.product-detail',['p_detail'=>$product_detail,'p_relate'=>$product_relate,'list_comment'=>$list_comment]);
    }
    public function all(){
        $product_all=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->orderByDesc('products.product_id')
                      ->where('products.amount','>',0)
                      ->whereNull('products.deleted_at')
                      ->get();
        $category_all= Category::all();
        $size_all=Size::all();
        return view('home.product.product-all',['product_all'=>$product_all,'category_all'=>$category_all,'size_all'=>$size_all]);
    }
    public function product_search(){
      $txt = ($_GET['search']);
      $product_search=DB::table('products')->join('image_products','image_products.product_id','=','products.product_id')
                                             ->join('categories','products.category_id','=','categories.category_id')
                                             ->where('product_name','LIKE','%'.$txt.'%')->get();
      return view('home.product.product-search',['product_search'=>$product_search]);

    }
    
}
