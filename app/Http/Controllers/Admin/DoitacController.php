<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Cate;
use App\Doitac;
use App\Tag;
use App\Video;
class DoitacController extends BackendController
{

    public function index(Request $request){ 
        $list=Doitac::all();  
    	return view('admin.doitac.index',compact('list'));
    }
	
    public function create(){	
    	return view('admin.doitac.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[
    		
    		'img'=>'required',
    		],[
    		
            'img.required'=>'vui lòng upload hình ',
    		]);
    	$doitac=new Doitac;
    	$doitac->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/doitac');
    }
    public function edit(doitac $doitac){ 
        return view('admin.doitac.edit',compact('doitac'));
    }
    public function update(Request $request,doitac $doitac){  
		$this->validate($request,[
            
            'img'=>'required',
            ],[
            
            'img.required'=>'vui lòng upload hình',
            
            ]);
        $doitac->update($request->all());
        Session()->flash('thongbao','Cập nhật thành công');
        return redirect('admin/doitac');
    }
    public function destroy(doitac $doitac){
        $doitac->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
	
	
	
}
