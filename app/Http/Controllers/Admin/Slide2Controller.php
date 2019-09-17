<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Cate;
use App\Slide2;
use App\Tag;
use App\Video;
class Slide2Controller extends BackendController
{

    public function index(Request $request){ 
        $list=Slide2::all();  
    	return view('admin.slide2.index',compact('list'));
    }
	
    public function create(){	
    	return view('admin.slide2.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[
    		
    		'img'=>'required',
    		],[
    		
            'img.required'=>'vui lòng upload hình cho slide',
    		]);
    	$slide=new Slide2;
    	$slide->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/slide2');
    }
    
    public function destroy(slide2 $slide2){
        $slide2->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
	
	
	
}
