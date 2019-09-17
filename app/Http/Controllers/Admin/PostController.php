<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Page;
use App\Post;
use App\Post_relate;
class PostController extends BackendController
{
	public function __construct(){
        parent::__construct();
		View()->share('list',Page::all());	
	}
    public function index(Request $request){
        if($request->page_id){
            $post=Post::where('page_id',$request->page_id)->orderBy('id','desc')->paginate(10);
        }else if($request->name){
            $post=Post::where('title','like','%'.$request->name.'%')->orWhere('title','like','%'.$request->name.'%')->orderBy('id','desc')->paginate(10);
        }
        else{
			$post=Post::orderBy('id','desc')->paginate(10);
        }
        //end tim kiem
    	return view('admin.post.index',compact('post'));
    }
    public function create(){	
    	return view('admin.post.add');
    }

    public function store(Request $request){

 	  $this->validate($request,[
    		'page_id'=>'required',
    		'title'=>'required',
    		'img'=>'required',
            'description'=>'required',
            
    		],[
    		'page_id.required'=>'vui lòng chọn chuyên mục',
    		'title.required'=>'vui lòng nhập tiêu đề',
    		'description.required'=>'vui lòng nhập mô tả bài viết',
    		
            'img.required'=>'vui lòng upload hình cho bài viết',
			
    		]);
    	$post=new Post;
    	$request->offsetSet('alias',str_slug($request->title));
        $ids=$post->create($request->all())->id;
        //luu mat bang
        if($request->tab_title && $request->tab_content){
            foreach($request->tab_title as $k=>$item){
                Post::find($ids)->tab()->create(['title'=>$item,'content'=>$request->tab_content[$k]]);
            } 
        }
        
        //luu anh slider du an
        if($request->multi){
        foreach($request->multi as $item){
            $path='uploads/images/project';
            $fileName='/uploads/images/project/'.$item->getClientOriginalName();
            $item->move($path,$item->getClientOriginalName());
            Post::find($ids)->relate()->create(['img'=>$fileName]);
        } 
        }
        Session()->flash('thongbao','Thêm bài viết mới thành công');
    	return redirect('admin/post');
    }
    public function edit(Post $post){ 
        return view('admin.post.edit',compact('post'));
    }
    public function update(Request $request,Post $post){  		
		  $this->validate($request,[
            'page_id'=>'required',
            'title'=>'required',
            'img'=>'required',
            'description'=>'required',
            ],[
            'page_id.required'=>'vui lòng chọn chuyên mục',
            'title.required'=>'vui lòng nhập tiêu đề',
            'description.required'=>'vui lòng nhập mô tả bài viết',
            'img.required'=>'vui lòng upload hình cho bài viết',
            
            ]);
        $request->offsetSet('alias',str_slug($request->title));
        $post->update($request->all());
        //luu hinh anh slide 
       
        if($request->multi){
             $post->relate()->delete();
        foreach($request->multi as $item){
            $path='uploads/images/project';
            $fileName='/uploads/images/project/'.$item->getClientOriginalName();
            $item->move($path,$item->getClientOriginalName());
            $post->relate()->create(['img'=>$fileName]);
        } 
        }
        //luu mat bang
        if($request->tab_title && $request->tab_content){
            $post->tab()->delete();
            foreach($request->tab_title as $k=>$item){
                $post->tab()->create(['title'=>$item,'content'=>$request->tab_content[$k]]);
            } 
        }

        Session()->flash('thongbao','Sửa bài viết thành công');
        return redirect('admin/post');
    }
    public function destroy(Post $post){
        $post->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }

   
	
	
}
