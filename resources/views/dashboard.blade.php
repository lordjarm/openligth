@extends('layouts.layout')
@section('title' , "Welcome Open")
@section('content')
	
	<div class="embed-container">
		<video src="{{asset('videos/openwelcome.mp4')}}" autoplay  loop controls muted ></video>
		
	</div>

@endsection