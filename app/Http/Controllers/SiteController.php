<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
   public function getHome()
   {
   	  $users = factory(App\User::class,6)->make();
   	   return view('pages.home',compact('users'));
   }

   public function getAbout()
   {

   	   return view('pages.about');
   }
   public function getContact()
   {
   	return view('pages.contact');
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
