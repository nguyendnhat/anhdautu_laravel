<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
class PageController extends BackendController
{
	public function __construct(){
        parent::__construct();
        View()->share('list',Page::orderBy('order','asc')->get());
	}
    public function index(){
    	return view('admin.page.index');
    }
    public function create(){
    	return view('admin.page.add');
    }
    public function store(Request $request){	
    	$this->validate($request,[
    		'title'=>'required',
            'parent_id'=>'required'
    		],[
    		'title.required'=>'vui lòng nhập tên chuyên mục',
            'parent_id.required'=>'vui lòng chọn chuyên mục'
    		]);
    	$page=new page;
    	$request->offsetSet('alias',str_slug($request->title));
    	$page->create($request->all());
        Session()->flash('thongbao','Thêm mới chuyên mục thành công');
    	 return redirect('admin/page');
    }
    public function edit(page $page){
    	return view('admin.page.edit',compact('page'));
    }
    public function update(Request $request,page $page){	
    	$this->validate($request,[
            'title'=>'required',
            'parent_id'=>'required'
            ],[
            'title.required'=>'vui lòng nhập tên chuyên mục',
            'parent_id.required'=>'vui lòng chọn chuyên mục'
            ]);
        $request->offsetSet('alias',str_slug($request->title));
        $page->update($request->all());
        Session()->flash('thongbao','Cập nhật thành công');
        return redirect('admin/page');
    }
    public function destroy(page $page){
   		$page->delete();
        Session()->flash('thongbao','xóa thành công');
    	return back(); 		
    }
    
    public function menu(){
        $page=Page::where("parent_id",0)->get();
        return view("admin/menu/index",compact('page'));
    }
    public function menu_show($id,$status){
        $adpage=Page::find($id);
        $adpage->status=$status;
        $adpage->save();   
        return back();
    }
    public function menu_show2($id,$status){
        $adpage=Page::find($id);
        $adpage->order=$status;
        $adpage->save();   
        return back();
    }
}
