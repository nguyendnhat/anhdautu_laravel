<?php
namespace App\Http\Controllers;
class PagesController extends Controller
{
	public function __construct(){
		view()->share(['info'=>\App\Info::find('1')->first(),'page0'=>\App\Page::where([['parent_id',0],['status',1]])->orderBy('order','asc')->get()]);
	}
}
