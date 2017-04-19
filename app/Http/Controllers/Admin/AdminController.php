<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AdminModel;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectTo = 'admin/';
    public function __construct()
    {
       $this->middleware('guest:admin', ['except' => 'logout']);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    protected function create(array $data)
    {
        return AdminModel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function login (Requests\AdminLoginRequest $request){
        if (Auth::guard('admin')->attempt(['name'=>$request->name, 'password'=>$request->password],true)) {
            return Redirect::to($this->redirectTo)->with('success', '登录成功！');
        } else {
            return redirect()->back()
                ->withInput($request->only('name', 'remember'))
                ->withErrors([
                    'error' => '账号或密码错误',
                ]);
        }
    }
    public function logout()
    {
        if(Auth::guard('admin')->user()){
            $session=new Session();
            $session->clear();
            Auth::guard('admin')->logout();
        }
        return Redirect::to('admin/login');
    }

    public function showLogin(){
        return view('admin.login');
    }
}
