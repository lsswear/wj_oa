<?php

namespace App\Http\Middleware;

use App\Model\AdminModel;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('admin')->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }
        /*
         * // match any admin permission
            $user->can("admin.*"); // true

            // match any permission about users
            $user->can("*_users"); // true
         * */
        if('admin'==Auth::guard('admin')->user()->name){
            return $next($request);
        }
        if(!Auth::guard('admin')->user()->menu()){
            Auth::guard('admin')->user()->setAdminMenu();
        }
        $url_str= $request->url();
        $url=explode('/',$url_str);
        if(isset($url[3])&&'admin_login'==$url[3]){
           $public=config('entrust.public');
           $name=$url[4];
           if(!in_array($name,$public)){
               if(!Auth::guard('admin')->user()->can($name)) {
                   echo '无权限';
                   exit;
                }
           }
        }
        return $next($request);
    }
}
