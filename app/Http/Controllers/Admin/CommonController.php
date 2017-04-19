<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommonController extends Controller
{
    protected $request="";
    protected $model="";
    protected  function setVlaue($data){
        if(class_exists($data['request'])||$data['model']){
            //报错
        }
        $this->request=$data['request'];
        $this->model=new $data['model'];
    }
    /*public function index(){
        //get
    }*/
    /*public function create(){
        //get
    }*/
    public function store(){
        //post
    }
    public function show(){
        //get
    }
    public function edit(){
        //get
    }
    public function update(){
        //PUT, PATCH
    }
    public function destroy(){
        //delete
    }
}
