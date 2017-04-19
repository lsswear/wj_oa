<?php

/**
 * This file is part of Entrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Zizaco\Entrust
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Entrust Role Model
    |--------------------------------------------------------------------------
    |
    | This is the Role model used by Entrust to create correct relations.  Update
    | the role if it is in a different namespace.
    |
    */
    'role' => 'App\Model\RoleModel',
    /*
    |--------------------------------------------------------------------------
    | Entrust Permission Model
    |--------------------------------------------------------------------------
    |
    | This is the Permission Model used by Entrust to create correct relations.
    | Update the permission if it is in a different namespace.
    |
    */
    'permission' => 'App\Model\PermissionModel',
    /*
    |--------------------------------------------------------------------------
    | Entrust Roles Table
    |--------------------------------------------------------------------------
    |
    | This is the roles table used by Entrust to save roles to the database.
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Entrust Permissions Table
    |--------------------------------------------------------------------------
    |
    | This is the permissions table used by Entrust to save permissions to the
    | database.
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Entrust permission_role Table
    |--------------------------------------------------------------------------
    |
    | This is the permission_role table used by Entrust to save relationship
    | between permissions and roles to the database.
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Entrust role_user Table
    |--------------------------------------------------------------------------
    |
    | This is the role_user table used by Entrust to save assigned roles to the
    | database.
    |
    */
    'table_name'=>[
        'roles_table' => 'roles',
        'permissions_table' => 'permissions',
        'permission_role_table' => 'permission_role',
        'role_user_table' => 'role_user',
    ],
    /*
   |--------------------------------------------------------------------------
   | User Foreign key on Entrust's role_user Table (Pivot)
   |--------------------------------------------------------------------------
   */
    /*
    |--------------------------------------------------------------------------
    | Role Foreign key on Entrust's role_user Table (Pivot)
    |--------------------------------------------------------------------------
    */
    'key'=>[
        'user_foreign_key' => 'user_id',
        'role_foreign_key' => 'role_id',
    ],
    'public'=>[
        'userInfo'
    ],

];
