<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\add_ProductRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Product;
use App\Category;
use App\Image_product;
use DB;
use Illuminate\Support\Str;
class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product=DB::table('products')
                      ->join('categories','products.category_id','categories.category_id')
                      ->join('image_products','image_products.product_id','products.product_id')
                      ->whereNull('products.deleted_at')
                      ->get();
        return view('admin.home-admin.products.product-list',['list_product'=>$list_product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_category= Category::all();
        return view('admin.home-admin.products.product-create',['list_category'=>$list_category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(add_ProductRequest $request)
    {
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName('image');
        $image->move('images/products', $image_name);
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_name_slug=Str::slug($request->product_name);
        $product->producer=$request->producer;
        $product->category_id=$request->category;
        $product->unit_price=$request->unit_price*1000;
        $product->promo_price=$request->promo_price*1000;
        $product->amount=$request->amount;
        $product->describe=$request->descripe;
        $product->save();
        $product_id=$product->product_id;
        $image_product=new Image_product();
        $image_product->image_name=$image_name;
        $image_product->product_id=$product_id;
        $image_product->save();
        return redirect()->route('product.index');
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
        try {
            $edit_product = DB::table('products')
                          ->join('categories','products.category_id','categories.category_id')
                          ->join('image_products','image_products.product_id','products.product_id')
                          ->where('products.product_id','=',$id)->first();
            $list_category = Category::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.home-admin.products.product-edit',['edit_product'=>$edit_product,'list_category'=>$list_category]);
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
        try {
            $product =Product::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        if($request->has('image')){
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName('image');
        $image->move('images/products', $image_name);
        $product->product_name=$request->product_name;
        $product->producer=$request->producer;
        $product->category_id=$request->category;
        $product->unit_price=$request->unit_price*1000;
        $product->promo_price=$request->promo_price*1000;
        $product->amount=$request->amount;
        $product->describe=$request->descripe;
        $product->save();
        DB::table('image_products')
              ->where('product_id', $id)
              ->update(['image_name' => $image_name]);
        return redirect()->route('product.index');
        }else{
            $product->product_name=$request->product_name;
            $product->producer=$request->producer;
            $product->category_id=$request->category;
            $product->unit_price=$request->unit_price*1000;
            $product->promo_price=$request->promo_price*1000;
            $product->amount=$request->amount;
            $product->describe=$request->descripe;
            $product->save();
            return redirect()->route('product.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->product_id;
        try {
            $d_product=Product::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $d_product->delete();
        return redirect()->route('product.index'); 
    }
}
