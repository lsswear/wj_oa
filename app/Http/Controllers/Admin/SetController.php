<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class SetController extends Controller
{
    public function userIndex(){
        return view('admin.set.users');
    }
    public function userEdit(){
        return view('admin.set.useredit');
    }
    public function roleIndex(){
        return view('admin.set.role');
    }
    public function roleEdit(){
        return view('admin.set.roleedit');
    }
    public function permissionIndex(){
        return view('admin.set.permission');
    }
    public function permissionEdit(){
        return view('admin.set.permissionedit');
    }
    public function setPermission(){
        return view('admin.set.setpermission');
    }
}
