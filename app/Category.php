<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $primaryKey ='category_id';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function product(){
      return $this->hasMany('App\Product','category_id','product_id');
    }

}
