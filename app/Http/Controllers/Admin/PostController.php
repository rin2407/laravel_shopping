<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Requests\add_postRequest;
use Auth;
use App\Post;
use App\Post_detail;
use App\Admin;
use DB;
class PostController extends Controller
{
    public function index(){
        $list_post=DB::table('posts')
                      ->join('post_details','post_details.post_id','posts.post_id')
                      ->join('admins','posts.id','admins.id')
                      ->whereNull('posts.deleted_at')
                      ->get();
        return view('admin.home-admin.post.post-list',['list_post'=>$list_post]);

    }
    public function create(){
        return view('admin.home-admin.post.post-create');
    }
    public function store(add_postRequest $request){
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName('image');
        $image->move('images/posts', $image_name);
        $post=new Post();
        $post->post_title=$request->post_name;
        $post->image_post=$image_name;
        $post->id=Auth::guard('admin')->user()->id;
        $post->save();
        $post_id=$post->post_id;
        $post_detail=new Post_detail();
        $post_detail->post_detail=$request->post_detail;
        $post_detail->post_id=$post_id;
        $post_detail->save();
        return redirect()->route('post.index');
    }
    public function destroy(Request $request){
        $id=$request->post_id;
        try {
            $d_post=Post::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $d_post->delete();
        return redirect()->route('post.index');
    }
}
