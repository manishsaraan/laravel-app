<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/* Route::get('/hello', function () {
   return view('hello');
});
Route::get('/ID/{id}', function ($id) {
  echo $id;die;
});
Route::get('/user/{name?}', function ($name='manish kuamr') {
  echo $name;die;
});

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('profile',[
 
   'uses' => 'UserController@index',
]);
Route::resource('my','MyController');
Route::controller('test','ImplicitController');
Route::get('/cookie',function(){
         return response("Hello",200)->header('Content-Type','text/html')->withcookie('name','manish kumar');
});
Route::get('/json',function(){
         return response()->json(['name'=>'manish','age'=>'23']);
});
Route::get('/test', function(){
   return view('test');
});
Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
}); */
Route::get('/home' ,['as'=>'/','uses'=>'SiteController@getHome']);
Route::get('/about-us',[ 'as'=>'about','uses'=>'SiteController@getAbout']);
Route::get('/contact-us',['as'=>'contact','uses'=> 'SiteController@getContact']);
Route::post('contact', 'SiteController@postContact');
Route::get('user/{name?}','SiteController@getUser');
