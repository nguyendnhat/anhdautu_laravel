<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Subcribe;
use App\Post;
class SubcribeController extends PagesController
{

    public function index(Request $request){  
        $this->validate($request,[
            'name'=>'required',
            ],[
            'name.required'=>'Vui lòng nhập họ tên'
            ]);
        $subcribe=new Subcribe;
        $subcribe->create($request->all());  
        Session()->flash('thongbao2','Bạn đã đăng ký nhận bản tin từ chúng tôi,vui lòng kiểm tra email thường xuyên, xin chân thành cảm ơn!!!');
        return back();
    }
    public function index2(Request $request){  
        $this->validate($request,[
            'name'=>'required',
            ],[
            'name.required'=>'Vui lòng nhập họ tên'
            ]);
        $subcribe=new Subcribe;
        $subcribe->create($request->all());  
        Session()->flash('thongbao2','Bạn đã đăng ký nhận bản tin từ chúng tôi,vui lòng kiểm tra email thường xuyên, xin chân thành cảm ơn!!!');
        
    }
    

    

    
    
}
