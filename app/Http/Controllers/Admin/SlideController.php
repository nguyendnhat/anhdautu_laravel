<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide;
class SlideController extends BackendController
{
    public function index(Request $request){ 
        $list=Slide::all();  
    	return view('admin.slide.index',compact('list'));
    }
    public function create(){	
    	return view('admin.slide.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[
    		'img'=>'required',
    		],[
            'img.required'=>'vui lòng upload hình cho slide',
    		]);
    	$slide=new Slide;
    	$slide->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/slide');
    }
    public function edit(slide $slide){ 
        return view('admin.slide.edit',compact('slide'));
    }
    public function update(Request $request,slide $slide){  
		$this->validate($request,[  
            'img'=>'required',
            ],[ 
            'img.required'=>'vui lòng upload hình cho slide',
            ]);
        $slide->update($request->all());
        Session()->flash('thongbao','Cập nhật thành công');
        return redirect('admin/slide');
    }
    public function destroy(slide $slide){
        $slide->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
}
