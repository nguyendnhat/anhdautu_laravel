<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Source;
class SourceController extends BackendController
{
    public function index(){
        $list=Source::all();
        return view('admin.source.index',compact('list'));
    }
    public function store(Request $request){  
        $this->validate($request,[
            'name'=>'required',
            ],[
            'name.required'=>'vui lòng nhập nguồn đăng tin',
            ]);
        $admin=new Source;
        $admin->create($request->all());    
        Session()->flash('thongbao','thêm mới thành công');
        return back();
    }

    public function destroy(Source $source){
        $source->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
    
    
}
