<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Cate;
use App\Video;
use App\Tag;
class VideoController extends BackendController
{

    public function index(Request $request){ 
        $list=Video::all();  
    	return view('admin.Video.index',compact('list'));
    }
	
    public function create(){	
    	return view('admin.Video.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[	
    		'link'=>'required',
            'img'=>'required'
    		],[
            'link.required'=>'vui lòng chọn link iframe ',
            'img.required'=>'vui lòng upload hình đại diện cho video này'
    		]);
    	$video=new Video;
    	$video->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/video');
    }
    public function edit(Video $video){ 
        return view('admin.Video.edit',compact('video'));
    }
    public function update(Request $request,video $video){  
		$this->validate($request,[
            'link'=>'required',
            'img'=>'required'
            ],[
            'link.required'=>'vui lòng chọn link iframe ',
            'img.required'=>'vui lòng upload hình đại diện cho video này']);
        $video->update($request->all());
        Session()->flash('thongbao','Cập nhật thành công');
        return redirect('admin/video');
    }
    public function destroy(Video $video){
        $video->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
}
