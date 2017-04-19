<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminModel extends Authenticatable
{
    //use EntrustPermissionTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'admin';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $config='';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function __construct(){
        parent::__construct();
        /*test*/
        /*if ($this->session->has('permissions')) {
            $this->session->clear('permissions');
            $this->session->clear('adminmenu');
        }*/
        /*end test*/
        $this->config=config('entrust');
    }
    public function can($permis){
        $permission=new $this->config['permission']($this->config['table_name'],$this->config['key']);
        if($permission->checkPermission()){
            return $permission->checkPermission($permis);
        }else{
            $role=new $this->config['role']($this->config['table_name'],$this->config['key']);
            $roles_id=$role->getRoles();
            if($roles_id){
                $permission->getPermissions($roles_id);
            }else{
                return false;
            }
        }
        return $permission->checkPermission($permis);
    }
    public function menu(){
        return $this->session->has('adminmenu')?true:false;
    }
    public function setAdminMenu(){
        $permission=new $this->config['permission']($this->config['table_name'],$this->config['key']);
        $role=new $this->config['role']($this->config['table_name'],$this->config['key']);
        $roles_id=$role->getRoles();
        $permission_array=$permission->getPermissionArray($roles_id);
        $title=$permission->getAdminMenuTitle();
        $permissions=[];
        foreach($title as $key=>$item){
            $child=[];
            foreach( $permission_array as $i){
                if($item->id==$i->prior_id){
                    $child[]=$i;
                }
            }
            if(count($child)>0){
                $permissions[$key]=$item;
                $permissions[$key]->child=$child;
            }
        }
        $this->session->set('adminmenu', $permissions);
    }
}
