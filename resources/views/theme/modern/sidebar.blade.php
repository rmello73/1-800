@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('social-meta')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="twitter:card" content="summary_large_image">
<!--  Non-Essential, But Recommended -->
<meta name="og:site_name" content="{{ get_option('site_name') }}">
@endsection @section('main')

  <div class="row">
    <div class="visible-lg col-lg-3">
      <ul class="nav">
                        <li> <h3 style="color:#064288;"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/pin.png"  />&nbsp;Local Information</h3></li>
                        <li> <a href="contractors"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/contractors.png"  />&nbsp;Contractors</a> </li>
	    <li> <a href="inspectors"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/inspectors.png"  />&nbsp;Home Inspectors</a> </li>
	    <li> <a href="agents"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/insurance.png"  />&nbsp;Insurance Agents</a> </li>
	    <li> <a href="brokers"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/brokers.png" />&nbsp;Mortgage Brokers</a> </li>
	    <li> <a href="photographers"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/photographers.png" />&nbsp;Photographers</a> </li>
	    <li> <a href="attorneys"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/attorneys.png"  />&nbsp;Real Estate Attorneys</a> </li>
	    <li> <a href="restaurants"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/restaurants.png"  />&nbsp;Restaurants</a> </li>
	    <li> <a href="videographers"><img src="http://realtyri.com/HJTX3gAAAANimJiqQ9qn9O3/uploads/avatar/video.png"  />&nbsp;Videographers</a> </li>
                    </ul>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 text-center">
      <img src="http://placehold.it/200x150">
      <h2>Mobile-first</h2>
      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 text-center">
      <img src="http://placehold.it/200x150">
      <h2>Mobile-first</h2>
      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 text-center">
      <img src="http://placehold.it/200x150">
      <h2>Mobile-first</h2>
      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 text-center">
      <img src="http://placehold.it/200x150">
      <h2>Mobile-first</h2>
      <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="visible-lg col-lg-1">
        More Ads ...
    </div>
  </div><!-- /.row -->

@endsection