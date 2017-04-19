<?php
 namespace App\Model;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\DB;
 use Zizaco\Entrust\Middleware\EntrustRole;
 class RoleModel extends Model
 {
       protected  $table_name='';
       protected  $table_name_user='';
       protected  $user_foreign_key='';
       protected  $role_foreign_key='';
       public function __construct($table_name='',$key='')
       {
             parent::__construct();
             if(is_string($table_name)){
               $this->table_name=empty($table_name)?"roles":$table_name;
             }elseif(is_array($table_name)){
               $this->table_name= $table_name['roles_table'];
               $this->table_name_user= $table_name['role_user_table'];
             }
            if(!empty($key)){
              $this->user_foreign_key=$key['user_foreign_key'];
              $this->role_foreign_key=$key['role_foreign_key'];
            }
       }
       public function getRoles(){
            $user_id=Auth::guard('admin')->user()->id;
            $roles = DB::table($this->table_name_user)
                ->select($this->table_name_user.'.'.$this->role_foreign_key)
                ->where($this->table_name_user.'.'.$this->user_foreign_key,'=',$user_id)
                ->get();
           if(empty($roles)){
            return false;
           }
           return $roles;
       }
 }