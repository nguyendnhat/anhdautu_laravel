<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subcribe;
class SubcribeController extends BackendController
{

    public function index(Request $request){ 
        $list=Subcribe::all();  
    	return view('admin.subcribe.index',compact('list'));
    }
	
    public function create(){	
    	return view('admin.subcribe.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[
    		'title_email'=>'required',
            'content_email'=>'required',
    		],[
            'title_email.required'=>'vui lòng nhập tiêu đề cho email',
            'content_email.required'=>'vui lòng nhập nội dung cho email',
    		]);
    	$title=$request->title_email;
        $content=$request->content_email;
       $email=\App\Subcribe::all();
       foreach($email as $item){
         \Mail::to($item->email)->send(new \App\Mail\sendNews($title,$content));
       }
        Session()->flash('thongbao','đã gửi tin thành công');
    	return redirect('admin/subcribe');
    }
    
    public function destroy($sl){
        $subcribe=Subcribe::find($sl);    
        $subcribe->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
	
}
