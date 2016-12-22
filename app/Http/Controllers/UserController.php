<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
       return view('pages.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userdata = $request->all();
       //$user = User::create($userdata);
       $user = new User;
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->username = $request->input('username');
       $user->password = bcrypt($request->input('password'));
       $user->save();
       return redirect('users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id',$id)->first();
        return view('pages.show-user',compact('user'));
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.user-edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
     //   if($request->has('name'))
     //    $user->name = $request->input('name');
     // if($request->has('email'))
     //    $user->name = $request->input('email');
     // if($request->has('password'))
     //    $user->name = bcrypt($request->input('password'));
     //    $user->save();
        $userData = array_filter($request->all());
        if(isset($userData['password']))
            $userData['password'] = bcrypt($userData['password']);
        $user->fill($userData);
        $user->save();  
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::find($id);
        $user->delete();
        return redirect('users');
       // User::destroy($id);
    }
}
