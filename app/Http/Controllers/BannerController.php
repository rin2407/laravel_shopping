<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use DB;
use validate;
class BannerController extends Controller
{
    public function index(){
        $list_banner= Banner::all();
        return view('admin.home-admin.banner-list',['list_banner'=>$list_banner]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'image' => 'required|image',
        ]);
        $image=$request->file('image');
        $image_name=$image->getClientOriginalName('image');
        $image->move('images/banners', $image_name);
        $banner= new Banner();
        $banner->image_banner=$image_name;
        $banner->status=1;
        $banner->save();
        return redirect()->route('banner.index');
    }
    public function update(Request $request){
        $action_banner=$request->get('data_banner');
        $id_banner=$request->get('data_id_banner');
        if($action_banner==0){
            DB::table('banners')->where('id',$id_banner)->update(array('banners.status'=>$action_banner));
            echo "hide";
        }else{
            DB::table('banners')->where('id',$id_banner)->update(array('banners.status'=>$action_banner));
            echo "show";
        }
    }
    public function destroy(Request $request){
        $id=$request->banner_id;
        $d_banner= Banner::findOrFail($id);
        $d_banner->delete();
        return redirect()->route('banner.index');
    }
}
