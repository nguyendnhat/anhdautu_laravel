<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Register_file;
class RegisterFileController extends BackendController
{
    public function index () {
        $list=Register_file::all();

        return view('admin.register_file.index',compact('list'));
    }
}