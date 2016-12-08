@extends('layout.main');
@section('content')
I am the homepage what you can do to me !!!!!!!!!

 <form action="/contact" method="post">
 	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
 	<div>
 		<label>Name</label>
 		<input type="text" name="name">
 	</div>
 	<div>
 		<label>message</label>
 		<textarea name="message"></textarea>
 	</div>
 	<div>
 		<input type="submit" value="contact us">
 	</div>
 </form>
@endsection