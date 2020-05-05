<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    protected $primaryKey ='cart_item_id';
    public function cart(){
        return $this->belongsTo('App\Cart','cart_id','cart_id');
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id','product_id');
    }

}
