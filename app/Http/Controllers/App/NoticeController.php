<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class NoticeController extends Controller
{
    public function index(){
        return view('app.notice');
    }
}
