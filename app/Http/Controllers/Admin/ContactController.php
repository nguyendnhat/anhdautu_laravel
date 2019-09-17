<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends BackendController
{
    public function index(Request $request){
       
            $contact=Contact::orderBy('id','desc')->paginate(10);
        //end tim kiem
        return view('admin.contact.index',compact('contact'));
    }
    
    public function create(){	
    	return view('admin.contact.add');
    }

    public function store(Request $request){	
 	  $this->validate($request,[
    		'name'=>'required',
    		'content'=>'required',
    		
    		],[
    		'name.required'=>'vui lòng Nhập tên phòng giao dịch',
    		'content.required'=>'vui lòng nhập thông tin về phòng giao dịch',
    		
			
    		]);
    	$contact=new Contact;
    	$request->offsetSet('alias',str_slug($request->name));
        $contact->create($request->all());
        Session()->flash('thongbao','Thêm liên hệ thành công');
    	return redirect('admin/contact');
    }
    public function edit(contact $contact){ 
        return view('admin.contact.edit',compact('contact'));
    }
    public function update(Request $request,contact $contact){  		
		  $this->validate($request,[
            'name'=>'required',
            'content'=>'required',
            
            ],[
            'name.required'=>'vui lòng Nhập tên phòng giao dịch',
            'content.required'=>'vui lòng nhập thông tin về phòng giao dịch',
            
            
            ]);
        $request->offsetSet('alias',str_slug($request->name));
        $contact->update($request->all());
        //luu tag vao bang tags  
        Session()->flash('thongbao','Sửa liên hệ thành công');
        return redirect('admin/contact');
    }
    public function destroy(contact $contact){
        $contact->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }

   
	
	
}
