@extends('layout.main') @section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection @section('main')

@section('page-css')
<link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<style>
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

/*
 * Callout styles copied from Bootstrap's main docs.
 */
/* Common styles for all types */
.bs-callout {
  padding: 20px;
  margin: 20px 0;
  border-left: 3px solid #eee;
}
.bs-callout h4 {
  margin-top: 0;
  margin-bottom: 5px;
}
.bs-callout p:last-child {
  margin-bottom: 0;
}
.bs-callout code {
  background-color: #fff;
  border-radius: 3px;
}
/* Variations */
.bs-callout-danger {
  background-color: #fdf7f7;
  border-color: #d9534f;
}
.bs-callout-danger h4 {
  color: #d9534f;
}
.bs-callout-warning {
  background-color: #fcf8f2;
  border-color: #f0ad4e;
}
.bs-callout-warning h4 {
  color: #f0ad4e;
}
.bs-callout-info {
  background-color: #f4f8fa;
  border-color: #5bc0de;
}
.bs-callout-info h4 {
  color: #5bc0de;
}
.img-logo {
	max-width:100%;
	height:28px;
}
.top-bar {
	width: 100%;
}

p {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 200px;
}
#map {
    height: 155vh !important;
}
#pollSlider-button{
    position:fixed;
    width:100px;
    height:50px;
    right:0px;
    background:black;
    top:300px;
    z-index: 9999;
}
.app {
  display: flex;
  flex-direction: row;
  height: 100%;
}

.sidebar {
  flex-basis: 50%;
  flex-shrink: 0;
  height: 100%;
  overflow: auto;
  padding: 10px;
}

.sidebar2 {
  flex-basis: 100%;
  flex-shrink: 0;
  height: 100%;
  overflow: auto;
  padding: 10px;
}

.map-area {
  flex-basis: 50%;
  background-size: cover;
}
.wrap {
  display: flex;
}

.left {
  flex-basis: 60%;
  
  height: 100vh;
  overflow: auto;
  overflow-x: hidden;
}

.right {
  flex-basis: 40%;
}
.checkbox-container {
    width:180px; 
    height: 150px; 
    overflow-y: scroll;
}
.search-container {
    padding: 10px;
}
@media only screen and (max-width: 479px) {
   .mobile-hide{ display: none !important; }
}
@media(min-width: 900px) {
    .hide-from-desktop {
        display:none;
    }
}
@media(max-width: 800px) {
    .hide-from-mobile {
        display:none;
    }
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 5px;
  padding-bottom: 5px;
  height: 100%;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
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
  background-color: #23326a !important;
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
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #000000;
}
.bottom-text {
    text-align: center;
    padding-top: 3px;
    padding-top: 3px;
    font-size: 10px;
}
#property-icon {
    text-align: center;
}
.type_checkbox {
    text-align: center;
}
.nopadding {
   padding: 0 !important;
   margin: 0 !important;
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
.kNBbhi {
    font-weight: bold;
    font-size: 20px;
    line-height: 1.2;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.lcNNgu {
    font-size: 16px;
    line-height: 1.5;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: left;
    color: #666666;
}
.image-container {
  position: relative;
  width: 100%;
}
.top-left {
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(6, 66, 136, 0.5);
  color: white;
  padding: 5px;
}
.form-control {
        margin-bottom: 0;
        padding: 0 30px 0 10px;
        width: 100%;
        height: 42px;
        line-height: 42px;
    }
    label {
        font-family: Hind,sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 23px;
        color: #5b5a5a;
        overflow-x: hidden!important;
        -webkit-font-smoothing: antialiased;
    }
    .bottom-text {
        font-family: Hind,sans-serif;
        font-weight: 400;
        font-size: 12px;
        line-height: 23px;
        color: #5b5a5a;
        overflow-x: hidden!important;
        -webkit-font-smoothing: antialiased;
    }
    .btn-solid {
        border-radius: 60px;
        width: 251px;
        height: 68px;
    }
    .mkdf-btn.mkdf-btn-outline {
        color: #ffffff;
        background-color: transparent;
        border: 1px solid #25357F;
    }
    .mkdf-btn {
        font-family: "Josefin Sans",sans-serif;
        position: relative;
        width: auto;
        outline: 0;
        font-size: 11px;
        line-height: 2em;
        letter-spacing: .15em;
        font-weight: 600;
        text-transform: uppercase;
        box-sizing: border-box;
        margin: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        -moz-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        padding: 11px 53px 7px;
        cursor: pointer;
    }
    .mkdf-btn, .mkdf-btn.mkdf-btn-simple .mkdf-btn-text {
        display: inline-block;
        vertical-align: middle;
    }
    button {
        -webkit-appearance: button;
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: buttontext;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: center;
        align-items: flex-start;
        cursor: default;
        background-color: buttonface;
        box-sizing: border-box;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 6px;
        border-width: 2px;
        border-style: outset;
        border-color: buttonface;
        border-image: initial;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
    display: block;
    padding: 0 15px;
    color: inherit;
    line-height: inherit;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    box-sizing: border-box;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.select2-container--default .select2-selection--single {
    display: block;
    height: 42px;
    line-height: 42px;
    padding: 0;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background-color: transparent;
    border: 1px solid #e1e1e1;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    box-sizing: border-box;
    cursor: pointer;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: auto;
    margin: 0 0 14px;
    border: 0;
    border-radius: 0;
    text-align: initial;
    box-sizing: border-box;
}
.nopadding {
   padding: 2px !important;
   margin: 0 !important;
}
</style>
@endsection
<div style="background-color: #E0AC3E; padding-top: 3px;">
    <a href="http://1-800.lenoxproperty.com" style="color: #ffffff";><p>&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back to main</p></a>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-8">
      @if($ads->total() > 0)

            <div class="mobile-hide hide-from-mobile">
                Commercial Leases
                @include('theme.modern.comm_lease_adv')
            </div>

        <p>{{ $ads->total() }} Properties Found.</p>

        <div class="ad-box-grid-view">
			<div class="row row-eq-height nopadding">
			        @foreach($ads as $ad)
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
								@if ($ad->is_openhouse())
								<div class="top-left">
                                    <b>Open House: {{ $ad-> openhouse_date }} {{ $ad->openhouse_time }}</b>
                                </div>
                                @endif
								</div>
    							<span class="modern-img-indicator"> 
                                    <i class="fa fa-file-image-o fa-2x"> {{ $ad->media_img->count() }}</i>
    							</span>
							</div>
							
							<div class="col-md-12">
							    <div class="row">
							        <div class="col-md-12 nopadding">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-left nopadding">
                                            @if($ad->price != 0)<b>${{ number_format($ad->price) }}</b>@else <b>${{ $ad->sqft_price }}/sqft</b> @endif
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-md-9 col-xs-6 text-right nopadding">
                                            <div class="visible-lg-inline-block visible-md-block visible-sm-block visible-xs-block">
                                               @if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family" or $ad->type == "pmc"
                						            or $ad->sale_type == "Single-Family" or $ad->sale_type == "Multi-Family" or $ad->sale_type == "Condo")
                							    @if($ad->beds)
                							    <i class="fa fa-bed"></i>&nbsp;{{ $ad->beds }}bd&nbsp;
                							    @endif
                							    @if($ad->half_bath) <i class="fa fa-bath"></i>&nbsp;{{ $ad->attached_bath + ($ad->half_bath)*0.5 }}ba 
                							    @else <i class="fa fa-bath"></i>&nbsp;{{ $ad->attached_bath }}ba @endif
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
                                    </div>
                                    <div class="col-md-12 nopadding">
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 text-left nopadding">
                                            @if($ad->street_num) {{ $ad->street_num }} @endif
        							        @if($ad->street_name) {{ $ad->street_name }} @endif
        							        @if($ad->street_type) {{ $ad->street_type }} @endif
        							        <br />
            							    {{ $ad->new_city }}, {{ $ad->new_state }}
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-md-6 col-xs-6 text-right nopadding">
                                            <div class="visible-lg-inline-block visible-md-block visible-sm-block visible-xs-block">
                                               &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 nopadding">
                                        <b>{{ substr($ad->comment,0,140) }}</b>
                                    </div>
                                    <div class="col-md-12 nopadding">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left nopadding">
                                            @if($ad->user->agent_logo) 
                							<img src="{{ $ad->user->get_agent_logo() }}" height="100%" width="110px" />
                                            @else
            								<img src="http://realtyri.com/uploads/logo/1493298353wsgtd-1489070237fcmar-logo.png" height="40%" width="40%" />
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12 text-right nopadding">
                                            <div class="visible-lg-inline-block visible-md-block visible-sm-block visible-xs-block">
                                               Presented By:<br /> <b>{{ $ad->user->name }}</b><br />
        							        {{ $ad->user->company }}
                                            </div>
                                        </div>
                                    </div>
    						    </div>
    					    </div>
    					    @if($ad->ad_status == 'Sold')
                            <div class="ribbon-wrapper-red"><div class="ribbon-red">Sold</div></div>
                            @endif
						</div>
					</div><!-- col-md-4 -->
				@endforeach
				</div>
			<div class="container">
            <div class="col-xs-12">
                {{ $ads->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div id="map"></div>
    </div>
        @else
        <div class="alert alert-warning">
            <h2><i class="fa fa-info-circle"></i> @lang('app.search_not_found') </h2>
        </div>
        @endif
  </div>
</div>

@endsection @section('page-js')
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.js') }}"></script>

<script>
$(function(){
    $(".save_as_favorite").click(function(){
        var selector = $(this);
        var slug = selector.data('slug');

        $.ajax({
            type : 'POST',
            url : '{{ route('save_ad_as_favorite') }}',
            data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
            success : function (data) {
                if (data.status == 1){
                    selector.html(data.msg);
                }else {
                    if (data.redirect_url){
                        location.href= data.redirect_url;
                    }
                }
            }
        });
    });
});
</script>
    
<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
    
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
		$('#sortBySelect').change(function () {
                	var form_input = $('#listingFilterForm').serialize();
                	location.href = '{{ route('listing') }}?' + form_input + '&sortBy=' + $(this).val();
            	});
        });
    </script>
    
<script>
var ads = {!! json_encode($map_ads->toArray()) !!};
console.log(ads);

        function initMap() {
            
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(41.8333491, -71.4409135),
                zoom: 11
            });
            
            var geocoder = new google.maps.Geocoder();
            
            for( var o in ads ){
                slug = ads[ o ].slug;
                title = ads[ o ].title;
                price = ads[ o ].price;
                street_num = ads[ o ].street_num;
                street_name = ads[ o ].street_name;
                street_type = ads[ o ].street_type;
                street_type = street_type.charAt(0).toUpperCase() + street_type.slice(1);
                city = ads[ o ].new_city;
                state = ads[ o ].new_state;
                console.log(street_num + ' ' + street_name + ' ' + city + ' ' + state);
                //latitude = ads[ o ].latitude;
                //longitude = ads[ o ].longitude;
                type = ads[ o ].type;
                beds = ads[ o ].beds;
                attached_bath = ads[ o ].attached_bath;
                square_unit_space = ads[ o ].square_unit_space;
                //media_image = ads[ o ].media_img[0].media_name;
                var text = document.createElement('text');
                
                var point = new google.maps.LatLng(latitude,longitude);
                var infowindow = new google.maps.InfoWindow(), marker, latitude, longitude;
                var link = "http://1-800.lenoxproperty.com/ad/";

                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    price: price,
                    title: title,
                    beds: beds,
                    attached_bath: attached_bath,
                    square_unit_space: square_unit_space,
                    slug: slug,
                    link: link,
                    street_num: street_num,
                    street_name: street_name,
                    street_type: street_type,
                    city: city,
                    state: state
                    //media_image: media_image
                });
                
                address = street_num + ' ' + street_name + ' ' + city + ' ' + state;
                
                geocodeAddress(geocoder, map);
                
                function geocodeAddress(geocoder, resultsMap) {
                    geocoder.geocode({'address': address}, function(results, status) {
                      if (status === 'OK') {
                        resultsMap.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                          map: resultsMap,
                          position: results[0].geometry.location
                        });
                      } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                      }
                    });
                }
                
                var image_link = "http://1-800.lenoxproperty.com/uploads/images/";

                google.maps.event.addListener( marker, 'click', function(e){
                    infowindow.setContent( "<div style='float:left'><img src='http://1-800.lenoxproperty.com/uploads/images/" + this.media_image + "'\" width=\"250\" height=\"165\"></div><br />" +
                                            '<br />$' + this.price + '<br />' +
                                            this.beds + 'bd | ' + this.attached_bath + 'ba<br />' +
                                            this.street_num + ' ' + this.street_name + ' ' + this.street_type + ' ' + this.city + ','  + ' ' + this.state + '<br />' +
                                            this.square_unit_space + 'sqft<br /><br />' +
                                            '<a target="_blank" href=\"' + this.link + this.slug + '\">View Details</a>');
                    infowindow.open( map, this );
                    
                }.bind( marker ) );
                
                google.maps.event.addListener(marker, 'click', function (marker, i) {
                    if ($('#info-container').css('display') == 'block') {
                        $('#info-container').css('display', 'none');
                    } else {
                        $('#info-container').css('display', 'block');
                    }
                });
                
            }
        }
      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{get_option('google_map_api_key')}}&callback=initMap">
    </script>
@endsection
