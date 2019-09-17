<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function __construct(){
        View()->share(['segment2'=> \Request::segment(2),'segment3'=> \Request::segment(3)]);
    }
    
    
    
}
