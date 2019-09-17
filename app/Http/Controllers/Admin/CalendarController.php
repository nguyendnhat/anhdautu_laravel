<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\Calendar;
class CalendarController extends BackendController
{
	public function __construct(){
        parent::__construct();
        $page=Page::where("alias",'du-an')->first();
        $post_page=Post::where("page_id",$page->id)->get();
		View()->share('page',$post_page);	
	}
    public function index(Request $request){
        $page=Page::where("alias","du-an")->first();
        $post=Calendar::orderBy('id','desc')->paginate(10);
       
        //end tim kiem
        return view('admin.calendar.index',compact('post'));
    }
    public function create(){	
    	return view('admin.calendar.add');
    }

    public function store(Request $request){	
 	  $this->validate($request,[
    		'title'=>'required',
    		'start'=>'required',
            'post_id'=>'required'
    		],[
    		'title.required'=>'vui lòng nhập tiêu đề công việc',
            'start.required'=>'vui lòng nhập ngày',
            'post_id.required'=>'Vui lòng chọn dự án'
			
    		]);
    	$post=new Calendar;
        $post->title=$request->title;
        $post->time=strtotime($request->start);
        $post->post_id=$request->post_id;
        $post->content=$request->content;

        $post->save();
        Session()->flash('thongbao','Thêm công việc mới thành công');
    	return redirect('admin/calendar');
    }
    public function edit(Calendar $calendar){ 
        return view('admin.calendar.edit',compact('calendar'));
    }
    public function update(Request $request,Calendar $calendar){  	
    
		  $this->validate($request,[
            'title'=>'required',
            ],[
            'title.required'=>'vui lòng nhập tiêu đề công việc',
            ]);
        $calendar->title=$request->title;
        $calendar->post_id=$request->post_id;
        $calendar->content=$request->content;
        $calendar->save();
        Session()->flash('thongbao','Cập nhật thành công');
        return redirect('admin/calendar');
    }
    public function destroy(Calendar $calendar){
        $calendar->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }



   
	
	
}
