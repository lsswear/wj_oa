<?php
 namespace App\Model;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Facades\DB;
 use Symfony\Component\HttpFoundation\Session\Session;
 use Zizaco\Entrust\EntrustPermission;

 class PermissionModel extends Model
 {
  protected  $table_name='';
  protected  $table_name_role='';
  protected  $role_foreign_key='';
  //private $permission;
  //private $session;
  public function __construct($table_name='',$key='')
  {
      parent::__construct();
      $this->session=new Session();
      if(is_string($table_name)){
            $this->table_name=empty($table_name)?"permissions":$table_name;
      }elseif(is_array($table_name)){
          $this->table_name= $table_name['permissions_table'];
          $this->table_name_role= $table_name['permission_role_table'];
      }
      if(!empty($key)){
          $this->role_foreign_key=$key['role_foreign_key'];
      }
  }
      public function getPermissionArray($role_id){
           $key=$this->role_foreign_key;
           $permission=array();
           if(is_array($role_id)){
               foreach($role_id as $id){
                    $permission[]=$this->getPermissionByRole($id->$key);
               }
           }else{
              $permission[]=$this->getPermissionByRole($role_id);
           }
           $permissions=array();
           foreach($permission as $item){
                $permissions=array_merge($permissions,$item);
           }
           return $permissions;
      }
      public function getPermissions($role_id){
          if ($this->session->has('permissions')) {
              $this->session->clear('permissions');
              $this->session->clear('adminmenu');
          }
          $permissions=$this->getPermissionArray($role_id);
          $permissions_name=array();
          foreach($permissions as $item){
              $permissions_name[]=$item->name;
          }
          $this->session->set('permissions', $permissions_name);
      }
      private function getPermissionByRole($role_id){
          $permission = DB::table($this->table_name)
               ->join($this->table_name_role,$this->table_name.'.id','=',$this->table_name_role.'.permission_id')
               ->select($this->table_name.'.*')
               ->where($this->table_name_role.'.'.$this->role_foreign_key,'=',$role_id)
               ->get();
          $permissions=array();
          foreach($permission as $item){
            $permissions[$item->id]=$item;
          }
          return $permissions;
      }
      public function  checkPermission($permission=''){
           if(empty($permission)){
                return $this->session->has('permissions');
           }
           $permissions=$this->session->get('permissions');
           return in_array($permission,$permissions);
      }
     public function getAdminMenuTitle(){
         $title= DB::table($this->table_name)
             ->where($this->table_name.'.prior_id','=',0)
             ->get();
         return $title;
     }
 }