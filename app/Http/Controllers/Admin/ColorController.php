<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\color;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class ColorController extends Controller
{
    public function index(){
       $list_color= Color::all();
       return view('admin.home-admin.color-management',['list_color'=>$list_color]);
    }
    public function store(Request $request){
        $color=new color();
        $color->color_name=$request->color_name;
        $color->save();
        return redirect()->route('color.index');
    }
    public function update(Request $request)
    {
        $id=$request->color_id;
        try {
            $edit_color=Color::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $edit_color->color_name= $request->color_name;
        $edit_color->save();
        return redirect()->route('color.index');
    }
    public function destroy(Request $request){
        $id=$request->color_id;
        try {
            $d_color=Color::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $d_color->delete();
        return redirect()->route('color.index');
    }
}
