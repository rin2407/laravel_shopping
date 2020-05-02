<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $primaryKey ='order_item_id';
    public function order(){
        $this->belongsTo('App\Order','order_id','order_id');
    }
    public function product(){
        $this->belongsTo('App\Product','product_id','product_id');
    }

}
