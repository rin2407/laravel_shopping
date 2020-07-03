<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\user_checkoutRequest;
use Auth;
use DB;
use App\User;
use App\Order;
use App\Order_item;
use Illuminate\Support\Facades\Mail;
class UserCheckoutController extends Controller
{
    public function edit($id){
        $user= User::findOrFail($id);
        $list_cart=DB::table('carts')->join('cart_items','cart_items.cart_id','=','carts.cart_id')
                                      ->join('products','cart_items.product_id','=','products.product_id')
                                      ->whereNull('products.deleted_at')
                                      ->where('carts.id',$id)->get();
        return view('user.checkout',['user'=>$user,'list_cart'=>$list_cart]);
    }
    public function update(user_checkoutRequest $request){
        $user_id= Auth::user()->id;
        $user= User::findOrFail($user_id);
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->save();
        return $this->order();  
    }
    public function order(){
        $user_id= Auth::user()->id;
        $total_order=0;
        $cart_item = DB::table('cart_items')->join('carts', 'cart_items.cart_id', '=', 'carts.cart_id')
                                            ->join('products', 'cart_items.product_id', '=', 'products.product_id')
                                            ->whereNull('products.deleted_at')
                                            ->where('carts.id', $user_id)->get();
        foreach ($cart_item as $c_item) {
            $total_order += ($c_item->quantity) * ($c_item->promo_price);
                }
        $order=new Order();
        $order->id=$user_id;
        $order->status_order_id=1;
        $order->total_money=$total_order;
        $order->save();
        $order_id=$order->order_id;
        foreach ($cart_item as $c_item) {
            $order_item = new Order_item();
            $order_item->order_id = $order_id;
            $order_item->product_id = $c_item->product_id;
            $order_item->quantity = $c_item->quantity;
            $order_item->save();
        }
        return $this->send_mail();
    }
    public function send_mail(){
        $order_detail= DB::table('cart_items')
                        ->join('carts','cart_items.cart_id','=','carts.cart_id')
                        ->join('users','carts.id','=','users.id')
                        ->join('products','cart_items.product_id','=','products.product_id')
                        ->where('carts.id',Auth::user()->id)
                        ->whereNull('products.deleted_at')
                        ->get();
        Mail::send('user.sendMail', array('order_detail' =>$order_detail), function ($message){
            $message->to(Auth::user()->email, 'Visitor')->subject('Cart order');
        });
        return $this->update_amount_product();
    }
    public function update_amount_product(){
        $user_id= Auth::user()->id;
        $list_cart_item=DB::table('cart_items')->join('carts', 'cart_items.cart_id', '=', 'carts.cart_id')
        ->join('products', 'cart_items.product_id', '=', 'products.product_id')
        ->whereNull('products.deleted_at')
        ->where('carts.id', $user_id)
        ->get();
        foreach ($list_cart_item as $ls_item){
            DB::table('products')->where('products.product_id',$ls_item->product_id)
                                 ->update(array('amount'=>($ls_item->amount-$ls_item->quantity)));
        }
        return $this->delete_cart();
    }
    public function delete_cart(){
        $user_id= Auth::user()->id;
        DB::table('cart_items')->join('carts', 'cart_items.cart_id', '=', 'carts.cart_id')
        ->join('products', 'cart_items.product_id', '=', 'products.product_id')
        ->where('carts.id', $user_id)
        ->delete();
        DB::table('carts')->where('id', $user_id)->delete();
        return redirect()->route('cart.show');
    }
}
