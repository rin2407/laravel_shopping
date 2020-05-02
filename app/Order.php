<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey ='order_id';
    public function user(){
        $this->belongsTo('App\User','id','id');
    }
    public function order_item(){
        $this->hasMany('App\Order_item','order_id','order_item_id');
    }

}
