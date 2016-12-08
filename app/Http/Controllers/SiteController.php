<?php

namespace laravelapp\Http\Controllers;

use Illuminate\Http\Request;

use laravelapp\Http\Requests;

class SiteController extends Controller
{
   public function getHome()
   {
   	   return view('home');
   }

   public function getAbout()
   {

   	   return view('about');
   }
   public function getContact()
   {
   	return view('contact');
   }
   public function postContact(Request $request)
   {
       dd($request->all());
   }
   public function getUser($user=null)
   {
       dd($user);
   }
}
