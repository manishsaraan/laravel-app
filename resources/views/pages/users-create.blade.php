@extends('layouts.main')
@section('content')

<form method="post" action="/users">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

	{{-- name --}}
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
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