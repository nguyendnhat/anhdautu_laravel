<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User,Mail;
class AdminController extends BackendController
{
    public function index(){
        $list=User::all();
        return view('admin.admin.index',compact('list'));
    }
    public function create(){   
        return view('admin.admin.add');
    }
    public function store(Request $request){  
        $this->validate($request,[
            'username'=>'required|unique:users,username',
            'password'=>'required',     
            'password2'=>'required|same:password',
            'email'=>'required|unique:users,email',
            ],[
            'email.required'=>'vui lòng nhập email',
            'email.unique'=>'email này đã tồn tại',
            'username.required'=>'vui lòng nhập tên tài khoản',
            'username.unique'=>'tên tài khoản này đã tồn tại',
            'password.required'=>'vui lòng nhập mật khẩu',
            'password2.required'=>'vui lòng nhập mật khẩu xác nhận',
            ]);
        $admin=new User;
        $request->offsetSet('password',bcrypt($request->password));
        $admin->create($request->all());    
        Session()->flash('thongbao','Thêm mới thành công');
        return redirect('admin/admin');
    }
    public function edit(User $admin){
        return view('admin.admin.edit',compact('admin'));
    }
    public function update(Request $request,$id){ 
        $info=User::find($id);
        if($request->password){
            $this->validate($request,[
            'password'=>'required',
            'password2'=>'required|same:password',
            ],[
            'password.required'=>'vui lòng nhập mật khẩu',
            'password2.required'=>'vui lòng nhập xác nhận mật khẩu',
            ]);
            $request->offsetSet('password',bcrypt($request->password));
            $info->update($request->only(['password']));    
        }
        $this->validate($request,[
            'username'=>'required|unique:users,username,'.$id,
            'email'=>'required|unique:users,email,'.$id,
            ],[
            'email.required'=>'vui lòng nhập email',
            'email.unique'=>'email này đã tồn tại',
            'username.required'=>'vui lòng nhập tên tài khoản',
            'username.unique'=>'tên tài khoản này đã tồn tại',
            ]);
        $info->update($request->except(['password']));  
        Session()->flash('thongbao','Cập nhật thành công');
         return redirect('admin/admin');
    }
        public function destroy(User $admin){
        $admin->delete();
        Session()->flash('thongbao','xóa thành công');
        return back();      
    }
    
    
}
