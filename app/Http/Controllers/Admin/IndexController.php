<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller
{
    public function index(){
        $session=new Session();
        return view('admin.admin')->with('menu',$session->get('adminmenu'));
    }
    public function userInfo(){
        return view('admin.index');
    }
}
