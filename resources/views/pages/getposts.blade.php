@extends('layouts.main')
@section('content')
@foreach($user->posts as $post)
<h2>{{$post->title}}</h2>
@endforeach
@endsection