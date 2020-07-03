<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;
use App\Image_product;
use App\Banner;
use App\Size;
use Auth;
class AjaxController extends Controller
{
    public function select_category(Request $request){
        $category_id= $request->get('category_id');
        $list_product=DB::table('products')
        ->join('image_products','image_products.product_id','=','products.product_id')
        ->whereNull('products.deleted_at')
        ->where('category_id',$category_id)->get();
        $total_select= count($list_product);
        if($total_select>0){
           foreach($list_product as $ls_pr){
               ?>
               <div class="col-lg-4 col-sm-6">
               <div class="product-grid4">
               <div class="product-image4">
                                    <a href="<?php echo (route('product.show',['name'=>$ls_pr->product_name_slug])) ?>">
                                    <img src="<?php echo asset('images/products/'.$ls_pr->image_name) ?>">  
                                        <img class="pic-2" src="<?php echo asset('images/products/'.$ls_pr->image_name) ?>">
                                    </a>
                                    <ul class="social">
                                        <li><a href="<?php echo route('product.show',['name'=>$ls_pr->product_name_slug]) ?>" data-tip="<?php echo __('product detail') ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a data-tip="<?php echo __('add cart') ?>" data-product_id="<?php echo $ls_pr->product_id ?>" data-user="<?php echo Auth::check() ? '1' : '0' ?>" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <span class="product-discount-label"><?php echo -(round(100*($ls_pr->unit_price-$ls_pr->promo_price)/$ls_pr->unit_price)) ?>%</span>
                                   
                </div>
                <div class="product-content">
                                    <h3 class="title"><a href="<?php echo route('product.show',['name'=>$ls_pr->product_name_slug]) ?>"><?php echo $ls_pr->product_name ?></a></h3>
                                    <div class="price">
                                        <?php echo number_format($ls_pr->promo_price) ?><sup>đ</sup>
                                        <span><?php echo number_format($ls_pr->unit_price) ?><sup>đ</sup></span>
                                    </div>
                                    <a class="add-to-cart cart" data-product_id="<?php echo $ls_pr->product_id ?>" data-user="<?php echo Auth::check() ? '1' : '0' ?>"><?php echo __('add cart') ?></a>
                                </div>
                </div>   
                </div>
               <?php
           }
        }else{
            return 'There are no products for your selection';
        }

    }
    public function search(Request $request){
        $txttimkiem=$request->get('txt');
        $product_search=DB::table('products')->join('image_products','image_products.product_id','=','products.product_id')
                                             ->join('categories','products.category_id','=','categories.category_id')
                                             ->where('products.amount','>',0)
                                             ->whereNull('products.deleted_at')
                                             ->where('product_name','LIKE','%'.$txttimkiem.'%')->get();
      $total=count($product_search);
      if($total >0){
        echo "<li> Có ".$total." sản phẩm bạn cần tìm </li>"; 
        echo "<br/>";
        foreach($product_search as $p_search){
          ?>
       <li class="search" >
          <div class="d-flex">
          <img src="<?php echo asset('images/products/'.$p_search->image_name) ?>">
          <a href="<?php echo route('product.show',['name'=>$p_search->product_name_slug]) ?>"> <?php echo $p_search->product_name ?></a>
          </div>  
      </li>
          <?php
        }
      }else{
        ?>
        <div class="no-search"><?php echo __('product not found') ?></div>
        <?php
          }
    }
   
}
