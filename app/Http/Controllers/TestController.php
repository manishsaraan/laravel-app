<?php

namespace laravelapp\Http\Controllers;

use Illuminate\Http\Request;

use laravelapp\Http\Requests;

class TestController extends Controller
{
   public function index()
   {
        echo "<br>Test Controller.";
   }
}
