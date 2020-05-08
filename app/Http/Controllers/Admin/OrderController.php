<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Status_order;
use DB;
class OrderController extends Controller
{
    public function index(){
        $list_order= DB::table('orders')->join('users','orders.id','=','users.id')
                                         ->join('status_orders','orders.status_order_id','=','status_orders.status_order_id')->get();
        $list_status=Status_order::all();
        return view('admin.home-admin.order-management',['list_order'=>$list_order,'list_status'=>$list_status]);
    }
    public function update(Request $request){
        $id_order=$request->get('data_idOrder');
        $order=$request->get('data_order');
            DB::table('orders')->where('order_id',$id_order)->update(array('status_order_id'=>$order));
    }
}
