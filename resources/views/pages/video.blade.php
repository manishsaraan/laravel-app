@extends('layouts.main')
@push('video styles')
<link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
@endpush
@push('video scripts')
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
@endpush
@section('content')
VideoJs Tutorial
<!--<img src="{{ URL::to('/') }}/images/pp.jpg">-->
<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="{{ URL::to('/') }}/images/pp.jpg" data-setup="{}">
    <source src="{{ URL::to('/') }}/videos/sampebig.mp4" type='video/mp4'>
    <source src="{{ URL::to('/') }}/videos/sampebig.wmv" type='video/wmv'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
@endsection