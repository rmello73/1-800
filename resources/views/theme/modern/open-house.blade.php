@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

<?php 
    $city = ucwords(app('request')->input('city'));
    $title = ucwords(app('request')->input('city'));
    $title .= ' Rhode Island';
    $title .= ' Open Houses';
?>

@section('title'){{trans($title)}}@stop
@section('description', 'View upcoming open houses in '.$city.' Rhode Island.  Get open house times and dates for '.$city.' RI open house listings')
@section('keywords', 'Open, House, Rhode Island, time, date, listings, '.$city.', RI')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css">
<style>
body {
    background-color: #f3f2f3;
}
.bx-wrapper img {
   width: 100% !important;
   height: 190px !important;
}
.bx-wrapper {
   margin-bottom: 0px !important;   
}
@media screen and (max-width: 767px) {
    .bx-wrapper img {
        width: 300px !important;
        height: 200px !important;
    }
}
.navbar-default {
    background-color: #ffffff !important;
}
.title-header {
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.primary-color {
  background-color: #23326a!important;
  width: 144px;
  height: 42px;
  font-family: Roboto;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
}
.details {
  font-family: Roboto;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #6d6d6d;
}
.grid-container {
  padding: 40px;
}
.top-left {
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(6, 66, 136, 0.5);
  color: white;
  padding: 5px;
}
/* Point-zoom Container */
.img-hover-zoom--point-zoom img {
  transform-origin: 65% 75%;
  transition: transform 1s, filter .5s ease-out;
}

/* The Transformation */
.img-hover-zoom--point-zoom:hover img {
  transform: scale(1.2);
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px;
  padding-bottom: 15px;
  height: 100%;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
}
/*
 * Row with equal height columns
 * --------------------------------------------------
 */
.row-eq-height {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}

[class*="col-"] {
  padding-top: 10px;
  padding-bottom: 10px;
}
.s01 {
  min-height: 20vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  background: url("../img/photographer.jpg");
  background-size: cover;
  background-position: center center;
  padding: 15px;
}

.s01 form {
  width: 100%;
  max-width: 1290px;
}

.s01 form legend {
  font-size: 72px;
  line-height: 1;
  color: #fff;
  margin-bottom: 60px;
}

.s01 form .inner-form {
  background: rgba(36, 60, 132, 0.9);
  padding: 30px 30px;
  display: -ms-flexbox;
  display: flex;
  width: 70%;
  -ms-flex-pack: justify;
      justify-content: space-between;
  -ms-flex-align: center;
      align-items: center;
}

.s01 form .inner-form .input-field {
  margin-right: 30px;
  height: 68px;
}

.s01 form .inner-form .input-field input {
  height: 100%;
  background: #fff;
  border-radius: .5px;
  border: 0;
  display: block;
  width: 100%;
  padding: 10px 32px;
  font-size: 20px;
}

.s01 form .inner-form .input-field input.placeholder {
  color: #000000;
  font-size: 20px;
}

.s01 form .inner-form .input-field input:-moz-placeholder {
  color: #9a9a9a;
  font-size: 20px;
}

.s01 form .inner-form .input-field input::-webkit-input-placeholder {
  color: #9a9a9a;
  font-size: 20px;
}

.s01 form .inner-form .input-field input:hover, .s01 form .inner-form .input-field input:focus {
  box-shadow: none;
  outline: 0;
}

.s01 form .inner-form .input-field.first-wrap {
  -ms-flex-positive: 1;
      flex-grow: 1;
}

.s01 form .inner-form .input-field.second-wrap {
  width: 32.77%;
  min-width: 180px;
}

.s01 form .inner-form .input-field.third-wrap {
  width: 180px;
  margin-right: 0;
}

.s01 form .inner-form .input-field.third-wrap .btn-search {
  height: 100%;
  width: 100%;
  background: #ECA823;
  white-space: nowrap;
  border-radius: .5px;
  font-size: 20px;
  color: #fff;
  transition: all .2s ease-out, color .2s ease-out;
  border: 0;
  cursor: pointer;
}

.s01 form .inner-form .input-field.third-wrap .btn-search:hover {
  background: #2d62d3;
}

@media screen and (max-width: 992px) {
  .s01 form legend {
    font-size: 50px;
    text-align: center;
    margin-bottom: 50px;
  }
  .s01 form .inner-form {
    padding: 30px 35px;
  }
  .s01 form .inner-form .input-field {
    height: 50px;
  }
}

@media screen and (max-width: 767px) {
  .s01 form legend {
    font-size: 30px;
    margin-bottom: 40px;
  }
  .s01 form .inner-form {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    padding: 20px;
    width: 100%;
  }
  .s01 form .inner-form .input-field {
    margin-right: 0;
  }
  .s01 form .inner-form .input-field input {
    padding: 5px 15px;
    font-size: 16px;
  }
  .s01 form .inner-form .input-field.first-wrap {
    width: 100%;
    margin-bottom: 20px;
  }
  .s01 form .inner-form .input-field.second-wrap {
    width: calc(50% - 10px);
    min-width: auto;
  }
  .s01 form .inner-form .input-field.third-wrap {
    width: calc(50% - 10px);
  }
  .s01 form .inner-form .input-field.third-wrap .btn-search {
    font-size: 16px;
  }
}
</style>
@endsection

<div align="center">
    <div class="s01">
        <form class="form-inline" action="{{ route('open-house') }}" method="get">
            <div class="inner-form">
                <div class="input-field first-wrap">
                    <input id="city" type="text" name="city" value="{{ request('city') }}" placeholder="What city are you looking in?" />
                </div>
                <div class="input-field third-wrap">
                    <button class="btn-search" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
    <b>Below is a list of scheduled {{ $city }} Rhode Island open houses. Check back regularly for updates!</b>
</div>

@if(count($ads) > 0)
<div class="container">
        <h1>{{ $city }} RHODE ISLAND OPEN HOUSES</h1>
        <div class="ad-box-grid-view">
			<div class="row row-eq-height">
                @foreach($ads as $ad)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="ads-item-thumbnail ad-box-regular top-rectangle">
							<div class="ads-thumbnail">
							    <div class="save_as_favorite">
    							    <a href="javascript:;" data-slug="{{ $ad->slug }}">
    								    <span class="modern-save-indicator"> 
        								    <font color="#fff"> 
        								        @if( ! $ad->is_my_favorite()) 
        								        <i class="fa fa-star-o fa-2x"></i> 
        								        @else 
        								        <i class="fa fa-star fa-2x"></i> 
        								        @endif
        									</font>
    								    </span>
    								</a>
								</div>
								<div class="image-container">
								<div align="center">
    								<a href="{{ route('single_ad', $ad->slug) }}"> 
    								    <ul class="bxslider" style="display:none">
                                                @if($ad->media_img->count() != 0)
                                                @foreach($ad->media_img as $img)
                                                <div class="img-hover-zoom--point-zoom">
                                                    <li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}" width="100%" /></li>
                                                </div>
                                                @endforeach
                                                @else
                                                <img src="http://realtyri.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
                                                @endif
                                        </ul>
    								</a>
								</div>
								@if ($ad->openhouse_date)
								<div class="top-left">
                                    <b>Open House: {{ date("F jS, Y", strtotime($ad->openhouse_date)) }} from {{ $ad->openhouse_time }} - {{ $ad->openhouse_finish }}</b>
                                </div>
                                @endif
								</div>
    							<span class="modern-img-indicator"> 
                                    <i class="fa fa-file-image-o fa-2x"> {{ $ad->media_img->count() }}</i>
    							</span>
							</div>
							
							<div class="col-md-12">
							    <div class="row">
        							<div class="col-md-3">
        							    <b>${{ number_format($ad->price) }}</b>
        						    </div>
        						    <div class="col-md-9">
        						        @if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family" or $ad->type == "pmc"
        						            or $ad->sale_type == "Single-Family" or $ad->sale_type == "Multi-Family" or $ad->sale_type == "Condo")
        							    @if($ad->beds)
        							    <i class="fa fa-bed"></i>&nbsp;{{ $ad->beds }}bd&nbsp;
        							    @endif
        							    @if($ad->attached_bath)
        							    <i class="fa fa-bath"></i>&nbsp;{{ $ad->attached_bath }}ba&nbsp;
        							    @endif
        							    @if($ad->square_unit_space)
        							    <i class="fa fa-square"></i>&nbsp;{{ number_format($ad->square_unit_space) }} sqft
        							    @endif
        							    @elseif($ad->type == "office" or $ad->type =="flex" or
                                            $ad->type =="medical" or $ad->type =="restaurant" or $ad->type
                                            =="retail" or $ad->type =="storefront" or $ad->type =="industrial"
                                            or $ad->type =="warehouse" or $ad->type =="land" or $ad->type =="other" or $ad->type =="commercial")
                                        @if($ad->type)
        							    <i class="fa fa-home"></i>&nbsp;{{ ucwords($ad->type) }}
        							    @endif
                                        @if($ad->building_size)
        							    <i class="fa fa-building"></i>&nbsp;{{ number_format($ad->building_size) }} sqft
        							    @endif
        							    @if($ad->square_unit_space)
        							    <i class="fa fa-square"></i>&nbsp;{{ number_format($ad->square_unit_space) }} sqft
        							    @endif
        							    @elseif($ad->sale_type == "land_sale")
        							    Land Icons
        							    @else
        							    Other Icons
        							    @endif
        						    </div>
    						    </div>
        							<div class="col-md-12">
        							    @if($ad->street_num) {{ $ad->street_num }} @endif
    							        @if($ad->street_name) {{ $ad->street_name }} @endif
    							        @if($ad->street_type) {{ $ad->street_type }} @endif
    							        <br />
        							    {{ $ad->new_city }}, {{ $ad->new_state }}
        						    </div>
        							<div class="col-md-12">
        							    <b>{{ substr($ad->comment,0,30) }}</b>
        						    </div>
        							<div class="col-md-6">
        							    @if($ad->user->agent_logo) 
            							<img src="{{ $ad->user->get_agent_logo() }}" height="100%" width="130px" />
                                        @else
        								<img src="http://realtyri.com/uploads/logo/1493298353wsgtd-1489070237fcmar-logo.png" height="40%" width="40%" />
                                        @endif
            						    </div>
        						    <div class="col-md-6">
        							    <span class="pull-right">
        							        <p>Presented By:</p> <b>{{ $ad->user->name }}</b>
        							        {{ $ad->user->company }}
        							    </span>
        						    </div>
    					    </div>
    					    @if($ad->ad_status == 'Sold')
                            <div class="ribbon-wrapper-red"><div class="ribbon-red">Sold</div></div>
                            @endif
						</div>
					</div><!-- col-md-4 -->
				@endforeach
			</div>
        </div>
    </div>
<div class="grid-container mobile-hide">&nbsp;</div>
@else
<div class="alert alert-warning">
    <h2 align="center">
		<i class="fa fa-info-circle"></i>
		No results found matching your search criteria in {{ $city }} Rhode Island. Please try again.
	</h2>
</div>
@endif
</div>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script>
        $(document).ready(function(){
        	$('.bxslider').show().bxSlider({
        		minSlides: 1,
        		maxSlides: 1,
        		slideWidth: 300,
        		slideMargin: 3,
			    adaptiveHeight: true,
                responsive: true,
			    pager: false,
			    preloadImages: 'all'
        	});
        });
    </script>
@endsection