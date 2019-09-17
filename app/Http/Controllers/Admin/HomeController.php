<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Auth,App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Product,App\Subcribe;
class HomeController extends BackendController
{
    public function index(){
    	$post_count=Post::all()->count();
    	$subcribe_count=Subcribe::all()->count();
    	$user_count=User::all()->count();
    	$user_online=1;
    	return view('admin.home.index',compact('post_count','user_count','user_online','subcribe_count'));
    }

}
