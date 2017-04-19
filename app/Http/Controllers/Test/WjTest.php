<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WjTest extends Controller
{
    public function index(){
        $results = DB::select('select * from users');
        var_dump($results);
        echo '<br>';
        echo Hash::make('123456');
    }
}
