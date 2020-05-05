<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey ='cart_id';
    public function user(){
        return $this->belongsTo('App\User','id','id');
    }
    public function cart_item(){
       return $this->hasMany('App\Cart_item','cart_id','cart_item_id');
    }

}
