<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Carbon\Carbon;
class FeedbackController extends Controller
{
    public function store(Request $request){
        // $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $user_id=$request->user_id;
        $product_id=$request->product_id;
        $feedback_comment=$request->comment;
        $feedback=new Feedback();
        $feedback->product_id=$product_id;
        $feedback->feedback_comment=$feedback_comment;
        $feedback->id=$user_id;
        // $feedback->created_at=$dt;
        $feedback->save();
        return redirect()->back();
    }
}
