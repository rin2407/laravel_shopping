<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostController extends Controller
{
    public function index(){
        $list_post=DB::table('posts')
                      ->join('post_details','post_details.post_id','posts.post_id')
                      ->join('admins','posts.id','admins.id')
                      ->whereNull('posts.deleted_at')
                      ->get();
        return view('home.post.post-all',['list_post'=>$list_post]);
    }
    public function show($id){
        $post_detail=DB::table('posts')
                      ->join('post_details','post_details.post_id','posts.post_id')
                      ->join('admins','posts.id','admins.id')
                      ->where('posts.post_id',$id)
                      ->whereNull('posts.deleted_at')
                      ->first();
        $list_post=Post::all();
        return view('home.post.post-detail',['post_detail'=>$post_detail,'list_post'=>$list_post]);
    }
}
