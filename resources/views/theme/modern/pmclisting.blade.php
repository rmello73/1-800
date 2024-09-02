@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

@section('page-css')
<style>
#searchTerms {
	width:800px;
        border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
.img-logo {
	max-width:100%;
	height:28px;
}
.top-bar {
	width: 100%;
	background-color: #222;
}
.comment {
        overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px;     /* fallback */
   max-height: 32px;      /* fallback */
   -webkit-line-clamp: 3; /* number of lines to show */
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
@endsection

<div class="not-printable">
<div class="top-bar">
	<div class="container">
		<div class="row">
		{{ Form::open([ 'method'=>'get', 'id' => 'listingFilterForm']) }}
			<div class="row" style="background-color:#222; padding-top:15px;">
				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-md-3 col-xs-12">
                                                <input type="text" class="form-control" id="searchTerms" name="q"
                                                        value="{{ request('q') }}" placeholder="@lang('app.search___')" />
						</div>
						<div class="col-md-3 col-xs-12">
							<input type="text" class="form-control" name="min_price"
								value="{{ request('min_price') }}"
								placeholder="@lang('app.min_price')" />
						</div>
						<div class="col-md-3 col-xs-12">
							<input type="text" class="form-control" name="max_price"
								value="{{ request('max_price') }}"
								placeholder="@lang('app.max_price')" />
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="form-group">
								<select class="form-control select2" id="beds_select"
									name="beds">
									<option value="">Beds</option>
									<option value="0">Studio</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<div class="form-group">
								<select class="form-control select2" id="utilities_select"
									name="utilities">
									<option value="">Utilities</option>
									<option value="heat">Heat Included</option>
									<option value="electric">Electricity Included</option>
									<option value="noutilities">No Utilities Included</option>
									<option value="heatandelectric">Heat and Electric Included</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="form-group">
								<select class="form-control select2" id="pets_select"
									name="pets">
									<option value="">Pets</option>
									<option value="cats">Cats Allowed</option>
									<option value="dogs">Dogs Allowed</option>
									<option value="nocats">No Cats Allowed</option>
									<option value="nodogs">No Dogs Allowed</option>
									<option value="catsdogs">Cats & Dogs Allowed</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="form-group">
								<select class="form-control select2" id="parking_select"
									name="parking">
									<option value="">Parking</option>
									<option value="offstreet">Off Street Parking</option>
									<option value="garage">Garage Parking</option>
									<option value="noparking">No Parking</option>
								</select>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<button class="btn btn-primary btn-block">
								<i class="fa fa-search"></i> @lang('app.filter')
							</button>
						</div>
					</div>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-12">


						<span class="totalFoundListingTop"><strong>{{
								$ads->total() }}</strong> Professionally Managed Apartment Complexes for Rent Found.
						</span>
						</ul>
					</div>
				</div>

@if($ads->total() > 0)
			<div class="ad-box-grid-view"
				style="display: {{ session('grid_list_view') ? (session('grid_list_view') == 'grid'? 'block':'none') : 'block' }};">
				<div class="row">
					@foreach($ads as $ad)
					<div class="col-md-3 col-sm-6 col-xs-12">
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
								</span> <a href="{{ route('single_ad', $ad->slug) }}"> <img
									itemprop="image" src="{{ media_url($ad->feature_img) }}"
									alt="{{ $ad->title }}" width="260" height="165"> <span
									class="modern-img-indicator"> <i
										class="fa fa-file-image-o fa-2x"> {{ $ad->media_img->count()
											}}</i>
								</span>
								</a>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
								<b><font color="#064288">{{ $ad->title }}</font></b>
							</div>
                                                        <div class="row top-buffer" align="left" style="padding-left:25px;">
								<font color="#064288">{{ $ad->city->city_name }}, {{ $ad->state->state_name }} </font>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
                                                                <p class="ellipsis">@if($ad->comment != "") {{ $ad->comment }} @else <br /><br /> @endif</p>
							</div>
							<div class="row top-buffer" align="left" style="padding-left:25px;">
									<font color="#064288"> @if($ad->type != "pmc" && $ad->price
										!=0)
										<div align="left">${{ floatval($ad->price) }}</div> @elseif($ad->type == "pmc")

										
				@endif

									</font>
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
			</div>
</div>
			<div class="ad-box-list-view"
				style="display: {{ session('grid_list_view') == 'list'? 'block':'none' }};">
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered table-responsive">
							@foreach($ads as $ad)
							<tr class="ad-{{ $ad->price_plan }}">
								<td width="100"><img itemprop="image"
									src="{{ media_url($ad->feature_img) }}" class="img-responsive"
									alt="{{ $ad->title }}"> <span class="modern-img-indicator">
										@if(! empty($ad->video_url)) <i class="fa fa-file-video-o"></i>
										@else <i class="fa fa-file-image-o"> {{
											$ad->media_img->count() }}</i> @endif
								</span></td>
								<td>
									<h5>
										<a href="{{ route('single_ad', $ad->slug) }}">{{ $ad->title }}</a>
									</h5>
									<h5>{{ themeqx_price_ng($ad) }}</h5>

									<p class="text-muted">
										@if($ad->city) <i class="fa fa-map-marker"></i> <a
											class="location text-muted"
											href="{{ route('listing', ['city'=>$ad->city->id]) }}"> {{
											$ad->city->city_name }} </a>, @endif <i class="fa fa-clock-o"></i>
										{{ $ad->created_at->diffForHumans() }}
									</p>

									<p class="listViewItemFooter">
										<span> <i class="fa fa-building"></i> {{ ucfirst($ad->type) }}
										</span> <span> <i class="fa fa-arrows-alt "></i> {{
											$ad->square_unit_space.' '.$ad->unit_type }}
										</span> @if($ad->beds) <span> <i class="fa fa-bed"></i> {{
											$ad->beds.' '.trans('app.bedrooms') }}
										</span> <span>{{ $ad->floor.' '.trans('app.floor') }}</span>
										@endif
									</p>
								</td>

							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>

			@else
			<div class="alert alert-warning">
				<h2>
					<i class="fa fa-info-circle"></i> @lang('app.search_not_found')
				</h2>
			</div>
			@endif

			<div class="row">
				<div class="col-xs-12">{{ $ads->appends(request()->input())->links()
					}}</div>
			</div>
		</div>
	</div>
</div>
@endsection @section('page-js')

<script
	src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>

<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
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
        $(document).ready(function() {
            $('#shortBySelect').change(function () {
                var form_input = $('#listingFilterForm').serialize();
                location.href = '{{ route('pmc-listing') }}?' + form_input + '&shortBy=' + $(this).val();
            });
        });
        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_sub_category'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo trans('app.select_a_sub_category') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].category_name +' </option>';
                    }
                    $('#sub_category_select').html(option);
                    $('#sub_category_select').select2();
                }else {
                    $('#sub_category_select').html('<option value="">@lang('app.select_a_sub_category')</option>');
                    $('#sub_category_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }else if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('<option value="">@lang('app.select_a_brand')</option>');
                    $('#brand_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }else if(fromLoad === 'country_to_state'){
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

            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_city') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('<option value="" selected> @lang('app.select_city') </option>');
                    $('#city_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }
        }

        $(function(){

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

            $('[name="state"]').change(function(){
                var state_id = $(this).val();
                $('#loaderListingIcon').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_city_by_state') }}',
                    data : { state_id : state_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'state_to_city');
                    }
                });
            });
        });

        $(function(){
            $('#showGridView').click(function(){
                $('.ad-box-grid-view').show();
                $('.ad-box-list-view').hide();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('switch_grid_list_view') }}',
                    data : { grid_list_view : 'grid',  _token : '{{ csrf_token() }}' },
                });
            });

            $('#showListView').click(function(){
                $('.ad-box-grid-view').hide();
                $('.ad-box-list-view').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('switch_grid_list_view') }}',
                    data : { grid_list_view : 'list',  _token : '{{ csrf_token() }}' },
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

<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection
