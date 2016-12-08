<?php

namespace laravelapp\Http\Controllers;

use Illuminate\Http\Request;

use laravelapp\Http\Requests;

class UserController extends Controller
{
    public function __construct(){
    //  $this->middleware('age');
   }
   public function index()
   {
        echo 'user';die;
   }
}
