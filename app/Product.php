<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    protected $primaryKey ='product_id';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function category(){
        return $this->belongsTo('App\Category','category_id','category_id');
    }

}
