<html lang="en">
<head>
  <title>Laravel - jquery ajax crop image before upload using croppie plugins</title>
  <link rel="stylesheet" href="{{ asset('assets/css/croppie.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif

@section('main')
<div class="container">
	<div class="row">
	  <div class="panel-body">
        <div class="row">
        <img src="{{ asset('assets/img/howitworks-1.png') }}" />
        <h2>Upload an Image</h2>
	  		<div class="col-md-4" style="padding-top:10px;">
				<br/>
				<input type="file" id="upload">
	  		</div>
	  	</div>
	  	<p>&nbsp;</p>
	  	<div class="row">
	  	    <img src="{{ asset('assets/img/howitworks-2.png') }}" />
            <h2>Process the Photo</h2>
	  		<div class="col-md-6">
	  		    <b>Chosen Photo</b>
	  		    <p>Adjust image the way you want to crop it</p>
				<div id="upload-demo" style="width:300px; height: 440px;"></div>
	  		</div>
	  		<div class="col-md-6">
	  		    <b>Preview Photo</b>
	  		    <p>This is how your logo will look on 1800RealEstate.com</p>
				<div id="upload-demo-i" style="background:#e1e1e1;width:300px;height:300px;"></div>
	  		</div>
	  	</div>
	  	
	  	<div class="row">
    	  	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use slider to zoom in / out.</p>
    	  	<div align="center">
        	  	<img src="{{ asset('assets/img/howitworks-3.png') }}" />
                <h2>Save the image that you've adjusted to your profile.</h2>
        	  	<div align="center"><button class="btn btn-success upload-result">Process & Save Image</button></div>
        	    </div>
    	    </div>
	    </div>
	    
	</div>
</div>
<br />
@endsection

@section('page-js')
<script src="{{ asset('assets/js/croppie.js') }}"></script>
<script>
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$uploadCrop = $('#upload-demo').croppie({
    viewport: { width: 300, height: 300 },
    boundary: { width: 400, height: 400 },
    showZoomer: true,
    exif: true
});


$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		$.ajax({
			url: "/dashboard/u/posts/image-crop",
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
				setTimeout(function() {
                    window.location = "./profile/edit/";
                }, 2000);
			}
		});
	});
});
</script>
@endsection