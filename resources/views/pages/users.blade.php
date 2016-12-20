@extends('layouts.main')
@section('content')
<a href="/users/create" class="btn btn-sm btn-success">Create A User</a>
<table class="table table-hover table-striped table-border">
	<thead>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th></th>
		</tr>
	</thead>
    <tbody>
    	@foreach($users as $user)
    	<tr>
    		<td>{{$user->name}} <td>
    		<td>{{$user->email}}</td>
    		<td>
    			<a class="btn btn-success btn-sm" href="/users/{{ $user->id }}">View</a>
    			<a class="btn btn-success btn-sm" href="/users/{{ $user->id }}/edit">Edit</a>
    			<a class="btn btn-success btn-sm" href="/users/{{ $user->id }}/delete">Delete</a>
    		</td>

    	</tr>
		 
		@endforeach
    </tbody>
</table>

@endsection