@extends('layouts.layout')
@section('title' , "Live")
@section('content')
	
	<h1 class="font-weight-bold text-danger align-middle">EN VIVO OPEN LIGHT</h1>
	
		<script src='https://meet.jit.si/external_api.js'></script>
		<script type="text/javascript">
		
		const domain = 'meet.jit.si';
		const options = {
			    roomName: 'JitsiMeetAPIExample',
			    width: 700,
			    height: 700,
			    parentNode: document.querySelector('#meet')
			};
		const api = new JitsiMeetExternalAPI(domain, options);
		</script>
	

@endsection