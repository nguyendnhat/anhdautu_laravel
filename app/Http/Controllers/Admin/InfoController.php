<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class InfoController extends BackendController
{
    public function edit(Info $info){
       $page0=\App\Page::all();
        
        // if($info->sidebar){
        //     $sidebar=json_decode($info->sidebar);
        // } 
    	return view('admin.info.edit',compact('info','page0','sidebar'));
    }
    public function update(Request $request,Info $info){
    	$this->validate($request,[
    		'logo'=>'required',
			
    		],[
    		'logo.required'=>'vui lòng chọn logo',

    		]);
        /*if($request->sidebar){      
            $sidebar=json_encode($request->sidebar);
        }

        $request->offsetSet('sidebar',$sidebar);*/

    	$info->update($request->all());
        Session()->flash('thongbao','Đã cập nhật thành công');
    	return back();
    }
}