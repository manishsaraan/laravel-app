@extends('layouts.main')

@section('content')
<h1>Edit user : {{ $user->name }}</h1>
<form method="post" action="/users/{{$user->id}}">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

	{{-- name --}}
	<input type='hidden' name="_method" value="PATCH">
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$user->name}}">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="{{$user->email}}">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="{{$user->username}}">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">Create</button>
	</div>

</form>

@endsection