<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Adcate;
use App\Cate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AdCateController extends BackendController
{
    public function __construct(){
        parent::__construct();
        View()->share('list',Cate::all());
    }
    public function index(){
    	$list=Adcate::paginate(10);
    	return view("admin.adcate.index",compact('list'));
    }
    public function create(){
    	return view('admin.adcate.add');
    }
    public function store(Request $request){	
    	$this->validate($request,[
    		'img'=>'required',
            
    		],[
    		'img.required'=>'vui lòng upload hình quảng cáo',
    		]);
    	$Adcate=new Adcate;
    	$Adcate->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/adcate');
    }
    public function edit(Adcate $adcate){
    	return view('admin.adcate.edit',compact('adcate'));
    }
    public function update(Request $request,Adcate $adcate){	
    	$this->validate($request,[
            'img'=>'required',
            ],[
            'img.required'=>'vui lòng upload hình quảng cáo',
            ]);
    	$adcate->update($request->all());
        Session()->flash('thongbao','Sửa thành công');
    	return redirect('admin/adcate');
    }
    public function edits($id,$status){
        $Adcate=Adcate::find($id);
        $Adcate->status=$status;
        $Adcate->save();   
        return back();
    }
    public function destroy(Adcate $adcate){
   		$adcate->delete();
        Session()->flash('thongbao','xóa thành công');
    	return back(); 		
    }
}
