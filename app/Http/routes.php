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

Route::get('/', function () {
    $users = factory(App\User::class,6)->make();
    return view('pages.home ',compact('users'));
});
Route::get('/login',function(){
	dd('please login first');
});
// Route::get("/about",function(){
//         $title = "my title";
       
//     return view ('pages.about');
// });
// Route::get("/contact",function(){ 
//     return view ('pages.contact');
// });
Route::group([
   //   'middleware'=>'auth'
	],function(){
			Route::get("/video",function(){ 
		    return view ('pages.video');
		})->name('video')->middleware('jwt.auth');	
	});
Route::get('/fullurl',function(){
	dd(Request::url());
});
//Route::get('/' ,['as'=>'/','uses'=>'SiteController@getHome']);
Route::get('/about-us',[ 'as'=>'about','uses'=>'SiteController@getAbout']);
Route::get('/contact-us',['as'=>'contact','uses'=> 'SiteController@getContact']);

Route::get('@{user}',function(App\User $user){
	//$user = App\User::where('username',$user)->first();
	dd($user);
});

// Route::get('/users',function(){
// 	$users = App\User::get();
// 	dd($users);
// });
//Route Groups
// Route::group([
// 	'namespace'=>'Dashboard',
//     'prefix'=>'dashboard'
// 	],function(){
// 	Route::get("/",'DashboardController@getHome');
// 	Route::resource("/users",'DashboardController@getUsers');
// 	Route::resource("/posts",'DashboardController@getPosts');
// });
// 
Route::resource('users','UserController');
