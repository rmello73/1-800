<div class="row">
		<div class="col-md-12">
		<br /><font color="#aaa"><a href="http://realtyri.com/index.php">Home</a> :. @if($ad->city->city_name){{ $ad->city->city_name  }},@endif {{ 
$ad->state->state_name  }} - {{ ucfirst($ad->sale_type) }} Property for Sale</font>
		</div>
	</div>

	<div class="row">
  		<div class="col-sm-6">
    		<h1 style="color:#064288;">@if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif</h1>
  		</div>
  		<div class="col-sm-6">
		<span class="pull-right">
			<a href="tel:+1{{ $ad->officephone }}"><h1>{{ $ad->officephone }}</h1></a>
		</span>
		</div>
		<div class="not-printable">
	<span class="pull-right">
                        <a href="javascript:;" id="save_as_favorite"
                                                data-slug="{{ $ad->slug }}"> @if( ! $ad->is_my_favorite()) <img 
src="http://realtyri.com/assets/img/save.png" />&nbsp;&nbsp;&nbsp;&nbsp; Save @else <img 
src="http://realtyri.com/assets/img/save.png" />&nbsp;&nbsp;&nbsp;&nbsp; Unsave</font>
                                                @endif
                                        </a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="#"
                                                data-toggle="modal" data-target="#shareByEmail"><img
src="http://realtyri.com/assets/img/share.png" />&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange"> 
Share</font></a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"
                                                data-toggle="modal" data-target="#replyByEmail"><img
src="http://realtyri.com/assets/img/contact.png" />&nbsp;&nbsp;&nbsp;&nbsp;
<font color="green">Contact</font></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" data-toggle="modal" data-target="#reportAdModal"><img
src="http://realtyri.com/assets/img/report.png" />&nbsp;&nbsp;&nbsp;&nbsp;
<font color="purple">Report</font></a>
                </span>
	</div>
</div>

<div class="row">
        <div class="col-sm-6" style="padding-top:3px;">
                <font color="#6599FF">@if($ad->city->city_name){{ $ad->city->city_name }},@endif {{ $ad->state->state_name }}
                                @if($ad->zipcode) {{ $ad->zipcode }}@endif

                                @if($ad->type == "pmc") @if($ad->pets == "cats") - Cats Allowed
                                @elseif($ad->pets == "dogs") - Dogs Allowed @elseif($ad->pets ==
                                "nodogs") - No Dogs @elseif($ad->pets == "nocats") - No Cats
                                @elseif($ad->pets == "catsdogs") - Cat / Dog Friendly
                                @elseif($ad->pets == "nopets") - No Pets @endif @endif
				</p></font>
        </div>        
        <div class="col-sm-6">
             <span class="pull-right">
             @if($ad->beds) {{ $ad->beds }} Beds @endif @if($ad->attached_bath)&middot; {{ $ad->attached_bath }} Baths @endif @if($ad->square_unit_space)&middot; {{ number_format($ad->square_unit_space) }} SQFT @endif @if($ad->lot_size)&middot; {{ number_format($ad->lot_size) }} Lot SQFT @endif @if($ad->sale_type)&middot; {{ ucfirst($ad->sale_type) }} @endif
             </span>
        </div>
</div>

@if($ad->property_video_url)
<div class="row">
          <div class="col-md-6">
            <ul class="bxslider2">
			@if($ad->media_img->count() != 0)
        		@foreach($ad->media_img as $img)
        			<li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}"></li>
        		@endforeach
        	@else
        		<img src="http://1-800.lenoxproperty.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
        	@endif
		</ul>
<a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> {{ $ad->media_img->count() }} Photos</i>
</span></a>
          </div>
          <div class="col-md-6">
               <?php
				$property_video_url = $ad->property_video_url;
				if (strpos ( $property_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $property_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<div class="embed-responsive embed-responsive-4by3"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe></div>';
					}
				} elseif (strpos ( $property_video_url, 'vimeo' ) > 0) {
					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $property_video_url, $regs )) {

						if (! empty ( $regs [3] )) {
							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
						}
					}
				}
				?>
			</div>
</div>
@else
<div class="row">
          <div class="col-md-6">
            <ul class="bxslider">
			@if($ad->media_img->count() != 0)
        		@foreach($ad->media_img as $img)
        			<li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}"></li>
        		@endforeach
        	@else
        		<img src="http://1-800.lenoxproperty.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
        	@endif
		</ul>
<a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> {{ $ad->media_img->count() }} Photos</i>
</span></a>
          </div>
@endif

<div class="row">
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">${{ $ad->price }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/rent.png" />
        <p>Property Cost</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ $ad->beds }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/bed-icon-large.png" />
        <p>Beds</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ $ad->attached_bath }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/bath-icon-large.png" />
        <p>Baths</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ number_format($ad->square_unit_space) }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/sqft-icon-large.png" />
        <p>SQFT</p>
</div>
</div>

        <div class="row">
                <div class="row">
		@if($ad->type != "pmc")
		<hr />
		<div class="row" style="padding: 15px; background-color:#ececec;">
			<div class="row">
				<div class="col-md-4" align="center">
					<p>
						<b>Presented to you by:</b>
					</p>
					<p>
						@if(isset($ad->user->photo)) 
							<img src="{{ $ad->user->get_photo() }}"  width="130" height="175" /> 
						@else
        					<img src="http://realtyri.com/uploads/placeholder.png" alt="RI Property Rentals" width="130" height="175">
						@endif
					</p>
<p>
                                        @if($ad->user->agent_logo) <img
                                                                                src="{{ $ad->user->get_agent_logo() }}" height="20%" width="20%" />
                                                                        	@else
										<img
                                                                                
src="http://realtyri.com/uploads/logo/1493298353wsgtd-1489070237fcmar-logo.png" height="30%" width="30%" />
                                                                        	@endif
                                        </p>
					<p>
						<a
							href="tel:1{{ $ad->user->mobile }}" class="btn btn-info btn-lg""><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{ $ad->user->mobile }}</a><br /><br />
						<a href="#" class="btn btn-info btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Contact</a>
					</p>
				</div>
				<div class="col-md-8">
					<p class="description">
                                        {!! html_entity_decode(nl2br($ad->description)) !!}
                                        </p>
				</div>
			</div>
		</div>
		@endif

<div align="center"><h1 style="color:#064288;">Property Details</h1></div>

<div class="row">
@if($ad->condo_fee)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Condo Fee:</b> ${{ number_format($ad->condo_fee) }}
				</p>
				</div>
				@endif @if($ad->assoc_fee)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Association Fee:</b> {{ ucwords($ad->assoc_fee) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->year_built)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Year Built:</b> {{ $ad->year_built }}
				</p>
				</div>
				@endif @if($ad->beds)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Bedrooms:</b> {{ $ad->beds }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->taxes)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Taxes: </b> ${{ number_format($ad->taxes) }}
				</p>
				</div>
				@endif @if($ad->attached_bath)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Full Baths:</b> {{ $ad->attached_bath }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->attached_bath)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Tax Year:</b> {{ $ad->attached_bath }}
				</p>
				</div>
				@endif @if($ad->half_bath)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Half Baths:</b> {{ $ad->half_bath }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->assessment)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Assessment:</b> ${{ number_format($ad->assessment) }}
				</p>
				</div>
				@endif @if($ad->lot_size)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Lot Size:</b> {{ number_format($ad->lot_size) }} SQFT
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->neighborhood)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Neighborhood:</b> {{ $ad->neighborhood }}
				</p>
				</div>
				@endif @if($ad->water)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Water:</b> {{ ucwords($ad->water) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->county)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>County:</b> {{ ucwords($ad->county) }}
				</p>
				</div>
				@endif @if($ad->sewer)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Sewer:</b> {{ ucwords($ad->sewer) }}
				</p>
				</div>
                                @endif
</div>

<div align="center"><h1 style="color:#064288;">Condo Details</h1></div>

<div class="row">
@if($ad->complex_name)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Complex Name:</b> {{ ucwords($ad->complex_name) }}
				</p>
				</div>
				@endif @if($ad->condo_style)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Condo Style:</b> {{ ucwords($ad->condo_style) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->total_units)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Total Units:</b> {{ $ad->total_units }}
				</p>
				</div>
				@endif @if($ad->pool_type)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Pool:</b> {{ ucwords($ad->pool_type) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->reg_adult)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Registered Adult Community: </b> {{ ucwords($ad->reg_adult) }}
				</p>
				</div>
				@endif @if($ad->timeshare)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Timeshare:</b> {{ ucwords($ad->timeshare) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->prop_mgmt)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Property Management:</b> {{ ucwords($ad->prop_mgmt) }}
				</p>
				</div>
				@endif @if($ad->pets_allowed)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Pets Allowed:</b> {{ ucwords($ad->pets_allowed) }}
				</p>
				</div>
				@endif
</div>

<div align="center"><h1 style="color:#064288;">Additional Details</h1></div>

<div align="center"><legend>Heating & Cooling</legend></div>

<div class="row">
@if($ad->heating_type)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Heating Type:</b> {{ ucwords($ad->heating_type) }}
				</p>
				</div>
				@endif @if($ad->cooling)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Central Air:</b> {{ ucwords($ad->cooling) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->heating_fuel)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Heating Fuel:</b> {{ ucwords($ad->heating_fuel) }}
				</p>
				</div>
				@endif @if($ad->num_fire)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Number of Fireplaces:</b> {{ $ad->num_fire }}
				</p>
				</div>
				@endif
</div>


<div class="row">
@if($ad->hw_fuel)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Hot Water Fuel:</b> {{ ucwords($ad->hw_fuel) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>

<div align="center"><legend>Garage & Parking</legend></div>

<div class="row">
@if($ad->num_park)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Number of Parking Spaces:</b> {{ ucwords($ad->num_park) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>

<div class="row">
@if($ad->num_garage)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Number of Garage Spaces:</b> {{ ucwords($ad->num_garage) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>


<div class="row">
@if($ad->garage_type)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Garage Type:</b> {{ ucwords($ad->garage_type) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>

<div class="row">
@if($ad->assigned_parking)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Assigned Parking:</b> {{ ucwords($ad->assigned_parking) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>

<div align="center"><legend>Interior Details</legend></div>

<div class="row">
@if($ad->num_rooms)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Number of Rooms:</b> {{ ucwords($ad->num_rooms) }}
				</p>
				</div>
				@endif @if($ad->basement_type)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Basement Type:</b> {{ ucwords($ad->basement_type) }}
				</p>
				</div>
                                @endif
</div>

<div class="row">
@if($ad->above)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Above Grade Living Space:</b> {{ ucwords($ad->above) }}
				</p>
				</div>
				@endif @if($ad->base_access)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Basement Access:</b> {{ ucwords($ad->base_access) }}
				</p>
				</div>
                                @endif
</div>


<div class="row">
@if($ad->below)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Below Grade Living Space:</b> {{ ucwords($ad->below) }}
				</p>
				</div>
				@endif @if($ad->base_finish)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Basement Finish:</b> {{ ucwords($ad->base_finish) }}
				</p>
				</div>
                                @endif
</div>


<div class="row">
@if($ad->living_space)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Total Living Space:</b> {{ number_format($ad->living_space) }} SQFT
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Finished Floor:</b> @if($ad->ceramic) Ceramic @endif @if($ad->hardwood)  Hardwood @endif @if($ad->laminate)  Laminate @endif @if($ad->marble)  Marble @endif @if($ad->other)  Other @endif @if($ad->parquet) 
 Parquet @endif @if($ad->particle)  Particle @endif @if($ad->pine)  Pine @endif @if($ad->plywood)  Plywood @endif @if($ad->vinyl)  Vinyl @endif @if($ad->wall)  Wall-to-Wall Carpeting @endif
				</p>
				</div>
</div>


<div class="row">
@if($ad->num_levels)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Number of Levels:</b> {{ $ad->num_levels }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
</div>

<div align="center"><legend>Included Appliances</legend></div>

<div class="row description" style="padding: 15px;">
@if($ad->owned == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Alarm Owned</div> @endif
@if($ad->rental == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Alarm Rented</div> @endif
@if($ad->grill == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Barbecue Grill</div> @endif
@if($ad->cable == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Cable TV</div> @endif
@if($ad->carpeting == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Carpeting</div> @endif
@if($ad->ceilingfan == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Ceiling Fan</div> @endif
@if($ad->antenna == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Central Antenna</div> @endif
@if($ad->vacuum == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Central Vacuum</div> @endif
@if($ad->coal == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Coal Stove</div> @endif
@if($ad->compressor == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Compressor</div> @endif
@if($ad->dish == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Dishwasher</div> @endif
@if($ad->dryer == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Dryer</div> @endif
@if($ad->elevator == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Elevator</div> @endif
@if($ad->exhaust == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Exhaust Fan</div> @endif
@if($ad->freight == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Freight Elevator</div> @endif
@if($ad->fuelpump == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Fuel Pump</div> @endif
@if($ad->furniture == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Furniture</div> @endif
@if($ad->disposal == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Garbage Disposal</div> @endif
@if($ad->grease == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Grease Pit</div> @endif
@if($ad->hood == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Hood</div> @endif
@if($ad->hottub == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Hot Tub</div> @endif
@if($ad->hydraulic == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Hydraulic Life</div> @endif
@if($ad->intercom == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Intercom</div> @endif
@if($ad->microwave == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Microwave</div> @endif
@if($ad->oven == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Oven / Range</div> @endif
@if($ad->overhead == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Overhead Crane</div> @endif
@if($ad->pellet == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Pellet Stove</div> @endif
@if($ad->fridge == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Refrigerator</div> @endif
@if($ad->sat == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Satellite Dish</div> @endif
@if($ad->sauna == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Sauna</div> @endif
@if($ad->trash == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Trash Compactor</div> @endif
@if($ad->tvantenna == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;TV Antenna</div> @endif
@if($ad->washer == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Washer</div> @endif
@if($ad->whirlpool == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Whirlpool</div> @endif
@if($ad->woodstove == "1") <div class="col-md-3"><img
src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Wood Stove</div> @endif
</div>

				<div align="center"><h3 style="color:#064288;">The Neighborhood for @if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif @if($ad->city->city_name){{ $ad->city->city_name }},@endif @if($ad->state->state_name){{ $ad->state->state_name }}@endif</h3></div>
@if($ad->neighborhood_video_url)
			<div class="row" style="background-color:#333; padding:10px">
				<div class="col-md-4 col-xs-12">
					<h3 class="h1-video pull-right">Located @if($ad->neighborhood){{ $ad->neighborhood }}@endif</h3>
					<br /><br /><br />
					<h1 class="h1-video pull-right">{{ $ad->title }}</h1>
				</div>
				<div class="col-md-6 col-xs-12">
					<?php
				$neighborhood_video_url = $ad->neighborhood_video_url;
				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<div class="embed-responsive embed-responsive-4by3"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe></div>';
					}
				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {

						if (! empty ( $regs [3] )) {
							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
						}
					}
				}
				?>
				</div>
				<div class="col-md-2 col-xs-12">
					<p>&nbsp;</p>
				</div>
			</div>
			</div>

			<hr />
			@endif
				<div class="row" style="padding: 15px;">
					<div id="map" style="width: 100%; height: 300px;"></div> 
				</div>

<p>
All square footage measurements are approximate and should be independently verified and confirmed. No guarantee, warranty or representation of any kind is made regarding the completeness or accuracy of any such measurement and RealtyRI.com disclaims any liability in connection with any such measurements or any other incorrect information with regards to this listing
</p>