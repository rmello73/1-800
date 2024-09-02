@extends('layout.main') @section('page-css')
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
#searchTerms {
	width:300px;
        border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
#category {
	width:300px;
	border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
.img-logo {
	max-width:100%;
	height:28px;
}
h1.top {
        font-family: "Times New Roman", Times, serif;
        font-size:3.2em;
        font-weight: bold;
}
.comment {
        overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px;     /* fallback */
   max-height: 32px;      /* fallback */
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
.ellipsis {
    overflow: hidden;
    height: 50px;
}
.ellipsis:before {
    content:"";
    float: left;
    width: 5px;
}
.ellipsis > *:first-child {
    float: right;
    width: 100%;
}
.ellipsis:after {
    content: "\02026";  
    
    box-sizing: content-box;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    
    float: right; position: relative;
    top: -25px; left: 100%; 
    width: 3em; margin-left: -3em;
    
    text-align: right;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div class="modern-top-intoduce-section">

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="modern-top-hom-cat-section">
                        <div class="modern-home-search-bar-wrap">
                            <div class="search-wrapper">
                                <h1 class="top">@lang('app.find_your_property')</h1>
				<br /><br /><br /><br /><br /><br />
                                <form class="form-inline" action="{{ route('listing') }}" method="get">
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select Property Type</option>
                                            <option name="residential_rental" id="category_residential" value="residential_rental">Residential Properties for 
Rent</option>
<option name="residential_sale" id="category_residential_sale" value="residential_sale">Residential Properties for 
Sale</option>
                                            <option name="commercial_rental" id="category_commercial" value="commercial_rental">Commercial Properties for Rent</option>
                                            <option name="commercial_sale" id="category_commercial_sale" value="commercial_sale">Commercial Properties for Sale</option>
                                        </select>
                                	<div class="form-group">
						<input type="text" id="searchTerms" class="form-control"  name="q" value="{{ request('q') }}" 
placeholder="@lang('app.search___')" />
					</div>
					<button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> @lang('app.search_property')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

<div class="modern-focus-call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>New Look</h1><br />
                    <h3>If you are looking for Rentprov.com you have come to the right place. We have replaced it with

RealtyRI.com and know you will like the site much better. In the coming months we will be introducing

many new and exciting features to the site. Stay Tuned!</h3><br />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">

		<div class="col-sm-12">

			<div class="carousel-header" align="center">
				<h2>
					<a href="{{ route('pmc') }}"> @lang('app.pmcs') </a>
				</h2>
			</div>
			<hr />

                        @if($regular_ads->count() > 0)
			<div class="row">
				@foreach($regular_ads as $ad)
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div itemscope itemtype="http://schema.org/Product"
							class="ads-item-thumbnail ad-box-{{$ad->price_plan}}">
							<div class="ads-thumbnail">
								<span class="modern-save-indicator"> <a href="javascript:;"
									id="save_as_favorite" data-slug="{{ $ad->slug }}"> <font
										color="#fff"> @if( ! $ad->is_my_favorite()) <i
											class="fa fa-star-o fa-2x"></i> @else <i
											class="fa fa-star fa-2x"></i> @endif
									</font>
								</a>
								</span> <a href="{{ route('single_ad', $ad->slug) }}">								    
								<ul class="bxslider" style="display:none">
                                        @if($ad->media_img->count() != 0)
                                        @foreach($ad->media_img as $img)
                                            <li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}" class="card-img-top img-fluid"></li>
                                        @endforeach
                                        @else
                                        <img src="http://realtyri.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
                                        @endif
                                    </ul><span
									class="modern-img-indicator"> <i
										class="fa fa-file-image-o fa-2x"> {{ $ad->media_img->count()
											}}</i>
								</span>
								</a>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
								<h4><font color="#064288">{{ $ad->title }}</font></h4>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
								<font color="#064288">{{ $ad->city->city_name }}, {{ $ad->state->state_name }} </font>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
                                                                <p class="ellipsis">@if($ad->comment != "") {{ $ad->comment }} @else <br /> @endif</p>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
									<font color="#064288"> @if($ad->type != "pmc" && $ad->price
										!=0)
										<div align="left">${{ floatval($ad->price) }}</div> @elseif($ad->type == 
"pmc")

										<?php
										
										$rent_array = array ();
				
                                if(isset($ad->pmcrent)) {
				$rent_array [] = $ad->pmcrent;
                                }
                                if(isset($ad->pmcrent2)) {
				$rent_array [] = $ad->pmcrent2;
                                }
                                if(isset($ad->pmcrent3)) {
				$rent_array [] = $ad->pmcrent3;
                                }
                                if(isset($ad->pmcrent4)) {
				$rent_array [] = $ad->pmcrent4;
                                }
                                if(isset($ad->pmcrent5)) {
				$rent_array [] = $ad->pmcrent5;
                                }
                                if(isset($ad->pmcrent6)) {
				$rent_array [] = $ad->pmcrent6;
                                }
                                if(isset($ad->pmcrent7)) {
				$rent_array [] = $ad->pmcrent7;
                                }
                                if(isset($ad->pmcrent8)) {
				$rent_array [] = $ad->pmcrent8;
                                }
                                if(isset($ad->pmcrent9)) {
				$rent_array [] = $ad->pmcrent9;
                                }
                                if(isset($ad->pmcrent10)) {
				$rent_array [] = $ad->pmcrent10;
                                }
				                                
				if(!empty($rent_array)) {
                                $rent_min = min ( array_filter ( $rent_array ) );
                                $rent_max = max ( array_filter ( $rent_array ) );
                                }

				$bed_array = array ();
				
                                if(isset($ad->pmcbeds) and $ad->pmcbeds != "Studio") {
				$bed_array [] = $ad->pmcbeds;
                                }
                                if(isset($ad->pmcbeds2) and $ad->pmcbeds2 != "Studio") {
				$bed_array [] = $ad->pmcbeds2;
                                }
                                if(isset($ad->pmcbeds3) and $ad->pmcbeds3 != "Studio") {
				$bed_array [] = $ad->pmcbeds3;
                                }
                                if(isset($ad->pmcbeds4) and $ad->pmcbeds4 != "Studio") {
				$bed_array [] = $ad->pmcbeds4;
                                }
                                if(isset($ad->pmcbeds5) and $ad->pmcbeds5 != "Studio") {
				$bed_array [] = $ad->pmcbeds5;
                                }
                                if(isset($ad->pmcbeds6) and $ad->pmcbeds6 != "Studio") {
				$bed_array [] = $ad->pmcbeds6;
                                }
                                if(isset($ad->pmcbeds7) and $ad->pmcbeds7 != "Studio") {
				$bed_array [] = $ad->pmcbeds7;
                                }
                                if(isset($ad->pmcbeds8) and $ad->pmcbeds8 != "Studio") {
				$bed_array [] = $ad->pmcbeds8;
                                }
                                if(isset($ad->pmcbeds9) and $ad->pmcbeds9 != "Studio") {
				$bed_array [] = $ad->pmcbeds9;
                                }
                                if(isset($ad->pmcbeds10) and $ad->pmcbeds10 != "Studio") {
				$bed_array [] = $ad->pmcbeds10;
                                }
				
				if(!empty($bed_array)) {
				$bed_min = min ( array_filter ( $bed_array ) );
                                $bed_max = max ( array_filter ( $bed_array ) );
                                }

										
										?>
                                @if(isset($bed_min)) @if($bed_min == "0.5") Studio @else {{ $bed_min }} @endif - @if($bed_max == "0.5") Studio @else {{ $bed_max }} @endif BD | @endif
                                @if(isset($rent_min)) ${{ $rent_min }} - ${{ $rent_max }} @endif
				@endif

									</font>
								
</div>
<br />
<table class="table" 
style="width:95%;margin-left:5px;margin-right:5px;align="center";>
                                                                       	<tr>
                                                                               	<td>@if($ad->type == "apartment") @if($ad->dogs == "dogs" or $ad->cats == "cats")
                                                                               	<img
src="http://realtyri.com/assets/img/pets-allowed.png" />
                                                                        @else
                                                                               	<img
src="http://realtyri.com/assets/img/no-pets-allowed.png" />
                                                                        @endif @elseif($ad->type == "pmc") @if($ad->pmcdogs == "1" or $ad->pmccats == "1" ) <img
src="http://realtyri.com/assets/img/pets-allowed.png" /> @else <img
src="http://realtyri.com/assets/img/no-pets-allowed.png" /> @endif @endif</td>
                                                                                <td>@if($ad->type == "apartment") @if($ad->parking == "offstreet" or $ad->parking == "garage")
                                                                                <img
src="http://realtyri.com/assets/img/parking-small.png" />
                                                                        @else
                                                                                <img
src="http://realtyri.com/assets/img/no-parking-small.png" />
                                                                        @endif  @elseif($ad->type == "pmc") @if($ad->pmcdogs == "1" or $ad->pmccats == "1" ) <img
src="http://realtyri.com/assets/img/parking-small.png" /> @else <img
src="http://realtyri.com/assets/img/no-parking-small.png" /> @endif @endif</td>
                                                                                <td>@if($ad->type == "apartment")  @if($ad->laundry == "onsite" or $ad->laundry == "inunit" or $ad->laundry == "hookups")
                                                                                <img
src="http://realtyri.com/assets/img/washer-small.png" />
                                                                        @else
                                                                             	<img
src="http://realtyri.com/assets/img/no-laundry-small.png" />
                                                                        @endif @elseif($ad->type == "pmc") @if($ad->pmclaundrypmc == "1" or $ad->pmcroom == "1" ) <img
src="http://realtyri.com/assets/img/washer-small.png" /> @else <img
src="http://realtyri.com/assets/img/no-laundry-small.png" /> @endif @endif</td>
                                                                                <td>
                                                                                @if($ad->user->agent_logo) <img
                                                                                src="{{ $ad->user->get_agent_logo() }}" class="img-logo" />
                                                                        	@else
										<img
                                                                                
src="http://realtyri.com/uploads/logo/1493298353wsgtd-1489070237fcmar-logo.png" class="img-logo" />
                                                                        	@endif
                                                                                </td>
                                                                        </tr>
                                                                </table>
						</div>
					</div>
					@endforeach
			</div>
                        @endif
		</div>
	</div>
</div>
<div align="center">
<h3><a class="btn btn-info btn-lg" href="http://1-800.lenoxproperty.com/pmclisting?q=">To see only professionally managed apartments, click here.</a></h3>
</div>

<div class="modern-post-ad-call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>@lang('app.want_something_sell_quickly')</h1>
				<br />
				<h3>@lang('app.post_your_ad_quicly')</h3>
				<br /> <br /> <a href="{{route('create_res_ad')}}"
					class="btn btn-info btn-lg">@lang('app.post_an_ad')</a>
			</div>
		</div>
	</div>
</div>
@endsection @section('page-js')
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.js') }}"></script>
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
$( "#searchTerms" ).autocomplete({
	source: [ "providence", 
		"cranston", 
		"central falls", 
		"newport", 
		"barrington", 
		"bristol", 
		"burrillville", 
		"charlestown", 
		"coventry", 
		"cumberland", 
		"east greenwich", 
		"east providence", 
		"attleboro", 
		"exeter", 
		"hopkinton", 
		"jamestown", 
		"johnston", 
		"lincoln", 
		"little compton", 
		"narragansett", 
		"north kingstown", 
		"pawtucket", 
		"north providence", 
		"north smithfield", 
		"portsmouth", 
		"Richmond", 
		"scituate", 
		"smithfield", 
		"south kingstown", 
		"tiverton", 
		"warren", 
		"warwick", 
		"west warwick", 
		"westerly", 
		"woonsocket", 
		"taunton", 
		"abington", 
		"webster", 
		"whitinsville", 
		"grafton", 
		"fall river", 
		"swansea", 
		"westport", 
		"dartmouth", 
		"new bedford", 
		"freetown", 
		"seekonk", 
		"Rehoboth", 
		"Raynham", 
		"lakeville", 
		"middleborough", 
		"norton", 
		"plainville", 
		"wrentham", 
		"foxboro", 
		"bridgewater", 
		"east bridgewater", 
		"west bridgewater", 
		"brockton", 
		"whitman", 
		"easton", 
		"hanson", 
		"halifax", 
		"oxford", 
		"southbridge", 
		"millbury", 
		"medfield", 
		"medway", 
		"millis", 
		"walpole", 
		"canton", 
		"stoughton", 
		"Randolph", 
		"holbrook", 
		"avon", 
		"Rockland", 
		"hanover", 
		"plympton", 
		"plymouth", 
		"carver", 
		"Rochester", 
		"fairhaven", 
		"marion", 
		"mattapoisett", 
		"norwood", 
		"bellingham", 
		"milford", 
		"hopedale", 
		"mendon", 
		"uxbridge", 
		"upton", 
		"hopkinton", 
		"holliston", 
		"boston", 
		"dover", 
		"north attleboro", 
		"millville", 
		"blackstone", 
		"wakefield", 
		"quincy", 
		"braintree", 
		"boston", 
		"mansfield", 
		"cambridge", 
		"south boston", 
		"somerville", 
		"dorchester", 
		"brookline", 
		"jamaica plain", 
		"newton", 
		"chestnut hill", 
		"waltham", 
		"watertown", 
		"belmont", 
		"weymouth", 
		"needham", 
		"wellesley", 
		"dedham", 
		"somerset", 
		"salem", 
		"marblehead", 
		"beverly", 
		"swampscott", 
		"franklin", 
		"brimfield", 
		"middletown", 
		"lowell", 
		"south dartmouth", 
		"foster", 
		"gloucester", 
		"melrose"
		]
});
</script>

<script>
        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_state') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('<option value="" selected> @lang('app.select_state') </option>');
                    $('#state_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }
        }

        $(document).ready(function(){
            $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#loaderListingIcon').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_state_by_country') }}',
                    data : { country_id : country_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'country_to_state');
                    }
                });
            });

	    $('#save_as_favorite').click(function(){
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
@endsection

