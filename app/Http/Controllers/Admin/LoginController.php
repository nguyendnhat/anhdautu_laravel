<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Auth,App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\resetpassword;
use App\Slide2,App\Info;
class LoginController extends BackendController
{
    public function getLogin(){
        $slide2=Slide2::select('img')->get();
    	if(Auth::check()){
            return redirect('admin');
    	}
    	return view("admin.login.login",compact('slide2','info'));
    }
    public function postLogin(Request $request){
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password],$request->has('remember'))){
            return redirect('admin');
        }else{
        Session()->flash('thongbao','Đăng nhập thất bại');	
            return back();
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
    public function getReset(){
        $slide2=Slide2::select('img')->get();
        return view("admin.login.reset",compact('slide2'));
    }
    public function postReset(Request $request){
        $user=User::where("email",$request->email)->first();
        if($user){
            //gui mail
                $password=str_random();
                $username=$user->username;
                $user->password=bcrypt($password);
                $user->save();
                $data=['password'=>$password,'username'=>$username];
                \Mail::to($user->email)->send(new resetpassword($password,$username));
            //end gui mail
            Session()->flash('thongbao','Vui lòng kiểm tra email để nhận mật khẩu mới');
            return back();
        }else{
            Session()->flash('thongbao','Email này chưa được đăng ký');
            return back();   
        }
    }
}
