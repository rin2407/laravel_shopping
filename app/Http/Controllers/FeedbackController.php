<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Feedback_product;
class FeedbackController extends Controller
{
    public function store(Request $request){
        $user_id=$request->user_id;
        $product_id=$request->product_id;
        $feedback_comment=$request->comment;
        $feedback=new Feedback();
        $feedback->id=$user_id;
        $feedback->save();
        $feedback_id=$feedback->feedback_id;
        $feedback_product=new Feedback_product();
        $feedback_product->feedback_id=$feedback_id;
        $feedback_product->product_id=$product_id;
        $feedback_product->feedback_comment=$feedback_comment;
        $feedback_product->save();
        return redirect()->route('product.show',['id'=>$product_id]);
    }
}
