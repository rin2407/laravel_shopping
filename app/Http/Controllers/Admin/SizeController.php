<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Size;
class SizeController extends Controller
{
    public function index(){
        $list_size= Size::all();
        return view('admin.home-admin.size-management',['list_size'=>$list_size]);
    }
    public function store(Request $request){
        $size=new Size();
        $size->size_name=$request->size_name;
        $size->save();
        return redirect()->route('size.index');
    }
    public function update(Request $request)
    {
        $id=$request->color_id;
        try {
            $edit_size=Size::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $edit_size->color_name= $request->size_name;
        $edit_size->save();
        return redirect()->route('size.index');
    }
    public function destroy(Request $request){
        $id=$request->size_id;
        try {
            $d_size=Size::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        $d_size->delete();
        return redirect()->route('size.index');
    }
}
