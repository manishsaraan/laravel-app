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
Route::get('/hasone',function(){
	//create a new user
	$user = factory(App\User::class)->create();
    // create a new address
    $address = new App\Address([
    	'country'=>'India',
    	'zip'=>'13520',
    	'user_id'=>$user->id
    ]);
    $address->save();
    // $user->address()->save($address);

    //dump
     $user->load('address');
    dd($address);
});

//has many relationships
Route::get('has-many',function(){
	//create a user
	$user = factory(App\User::class)->create();
	//create multiple posts
	$posts = factory(App\Post::class,5)->create();
	//link them together
	$user->posts()->saveMany($posts);
	//dump
	dd($user);
});

Route::get('has-many-tips',function(){
	//create a user
	$user  = factory(App\User::class)->create();
	//create post
	$post = factory(App\Post::class)->create();
	$post->author()->associate($user);
	$post->save();
	//dump information
	dd($post->author->name,$post->author->email,$post->author->id);
});

Route::get("userposts/{id}",function($id){
	$user = App\User::with('posts')->find($id);
	return view('pages.getposts',compact('user'));
});

Route::get('/roles',function(){
   // $role = App\Role::whereName('admin')->with('users')->first();
   // dd($role->users);
    $user = App\User::offset(1)->first();
    $role = App\Role::whereName('admin')->first();
    // assign a role to a user
    $user->roles()->attach($role->id);
    $user->load('roles');
    dd($user->roles);
});

Route::get('sync',function(){
	$roleAdmin = App\Role::whereName('admin')->first();
	$roleEditor = App\Role::whereName('editor')->first();
	$user = App\User::first();

    //$user->roles()->detach($roleAdmin->id);
    $user->roles()->sync([$roleAdmin->id,$roleEditor->id]);
    
    foreach($user->roles as $role)
    {
    	print_r($role->name."<br>");
    }
});