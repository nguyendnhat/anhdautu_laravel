<?php
namespace App\Http\Controllers;
use App\Slide;
use App\Page;
use App\Post;
use App\Doitac;
use Illuminate\Http\Request;
use App\Register_file;

class HomeController extends PagesController
{
    public function index(){
    	$slide=Slide::all();
    	$partner=Doitac::all();
    	return view("site.home.index",compact('slide','partner'));
    }
    public function page($page_alias){
		$page=Page::where('alias',$page_alias)->first();
		
    	return view("site.list.index",compact('page'));
    }
    public function post($page_alias,$post_alias, Request $request){
    	$post_alias = substr($post_alias,strrpos($post_alias,"-")+1 ,10);
		$page=Page::where('alias',$page_alias)->first();
		
        if($page->alias=='du-an'){
            $post=Post::select('meta_title','meta_keywords','meta_description','title','description','file','uu_dai', 'tong_quan','vi_tri','chinh_sach','tien_ich','giai_phap','address','price','id','phone','alias')->where('id',$post_alias)->first();
            $success = 0;
            if ($request->input('txtEmail')) {
                $email = $request->input('txtEmail');
                $phone = $request->input('txtPhone');
                $link = $post->title;
                Register_file::insert([
                    'email' => $email,
                    'phone' => $phone,
                    'link' => $link,
                ]);
                \Mail::to($request->input('email_lienhe'))->send(new \App\Mail\registerFile($email,$phone, $link));
                $success = 1;
            }

            return view("site.detail.du_an",compact('page','post', 'success'));
        }
        $post=Post::select('meta_title','meta_keywords','meta_description','title','description','content','source','page_id','created_at','id','img')->where('id',$post_alias)->first();
    	return view("site.detail.index",compact('page','post'));
    }
    public function tiendo($alias){
        $page=Page::where('alias','du-an')->first();
        $post=Post::select('meta_title','meta_keywords','meta_description','title','description','page_id','id','alias')->where("alias",$alias)->first();
        return view("site.list.tien_do",compact('page','post'));
    }
    public function contact(){
        $page1='lien-he';
        $contact=\App\Contact::all();
    	return view("site.list.lienhe",compact('page1','contact'));
    }
    public function postContact(){
		$name=\Request::input('name');
        $email=\Request::input('email');
        $address=\Request::input('address');
        $content=\Request::input('content');
        $phone=\Request::input('phone');
        $email_lienhe=\Request::input('email_lienhe');
        $data=['name'=>$name,'email'=>$email,'address'=>$address,'content'=>$content,'phone'=>$phone];
        \Mail::to($email_lienhe)->send(new \App\Mail\lienhe($name,$email,$address,$content,$phone));
        //end gui mail  
        Session()->flash('thongbao','Thông điệp của bạn đã được chuyển đi,chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất có thể, xin chân thành cảm ơn!!!');
        Session()->flash('thongbao_en','Your message has been sent, we will contact you as soon as possible, sincerely thank!!!');
        return back();
    }
   


}
