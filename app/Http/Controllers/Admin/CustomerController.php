<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Customer;
class CustomerController extends BackendController
{
    public function index(Request $request){ 
        $list=Customer::all();  
    	return view('admin.customer.index',compact('list'));
    }
	
    public function create(){	
    	return view('admin.customer.add');
    }
    public function store(Request $request){	    
 	  $this->validate($request,[
    		
    		'img'=>'required',
    		],[
    		
            'img.required'=>'vui lòng upload hình ',
    		]);
    	$Customer=new Customer;
    	$Customer->create($request->all());
        Session()->flash('thongbao','Thêm mới thành công');
    	return redirect('admin/customer');
    }
    
    public function destroy(Customer $customer){
        $customer->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
	
	
	
}
