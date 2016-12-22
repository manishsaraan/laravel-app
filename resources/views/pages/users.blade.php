@extends('layouts.main')
@section('content')
<a href="/users/create" class="btn btn-sm btn-success">Create A User</a>
<table class="table table-hover table-striped table-border">
	<thead>
		<tr>
		<th>Name</th>
		<th>Email</th>
        <th>Joined</th>
		<th></th>
		</tr>
	</thead>
    <tbody>
    	@foreach($users as $user)
    	<tr>
    		<td>{{$user->name}} <td>
    		<td>{{$user->email}}</td>

            <td>{{$user->created_at->diffForHumans()}}</td>
    		<td>
            <ul class="list-inline list-unstyled">
    		<li>	<a class="btn btn-success btn-sm" href="/users/{{ $user->id }}">View</a></li>
    		<li>	<a class="btn btn-success btn-sm" href="/users/{{ $user->id }}/edit">Edit</a></li>
            <li>    <form action="/users/{{$user->id}}" method="post">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type='hidden' name="_method" value="DELETE">
    			<button type="submit" class="btn btn-success btn-sm" >Delete</button>
                </form></li>
            </ul>
            <li><a class="btn btn-success btn-sm" href="/userposts/{{ $user->id }}">Posts</a></li>
    		</td>

    	</tr>
		 
		@endforeach
    </tbody>
</table>

@endsection