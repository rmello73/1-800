@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('social-meta')
<meta property="og:title" content="Test Slider">
<meta property="og:description" content="Test Slider">
<meta property="og:url" content="Test Slider">
<meta name="twitter:card" content="summary_large_image">
<!--  Non-Essential, But Recommended -->
<meta name="og:site_name" content="{{ get_option('site_name') }}">
@endsection @section('page-css')
<!-- bxSlider CSS file -->
<link rel="stylesheet"
	href="{{ asset('assets/css/jquery.bxslider.css') }}">

<link rel="stylesheet"
	href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
@endsection @section('main')

<div align="center">
	<ul class="bxslider">
		<li><img src="{{ asset('assets/img/1.jpg') }}" /></li>
		<li><img src="{{ asset('assets/img/2.jpg') }}" /></li>
		<li><img src="{{ asset('assets/img/3.jpg') }}" /></li>
		<li><img src="{{ asset('assets/img/4.jpg') }}" /></li>
	</ul>
</div>

@endsection @section('page-js')
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<!-- bxSlider Javascript file -->
<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script>
        $(document).ready(function(){
            
        	$('.bxslider').bxSlider({
        		minSlides: 2,
        		maxSlides: 2,
        		slideWidth: 600,
        		slideMargin: 10
        	});
        	
        });
    </script>

@endsection
