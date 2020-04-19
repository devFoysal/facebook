<?php 
namespace foysal68\Facebook\Controllers;

use App\Http\Controllers\Controller;

class FacebookController extends Controller{
    
    public function index(){
        return view('fbp::index');
    }
}