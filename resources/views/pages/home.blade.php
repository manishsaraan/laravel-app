@extends('layouts.main')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
    $(function(){
       $('.user-box-container').slick();  
    });
   
    </script>
@endpush
@section('content')
I am homeapge
<div class="user-box-container">
@each('partials.user-box',$users,'user')
@foreach($users as $user)
@include('partials.user-box',['user'=>$user]) 
@endforeach
</div>   
@endsection