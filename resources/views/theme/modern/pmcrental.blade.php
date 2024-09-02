<div class="row">
  		<div class="col-md-6 col-sm-12">
    		<h2 class="h2-top">{{ $ad->title }}</h2>
  		</div>
  		<div class="col-md-6 col-sm-12">
		<span class="pull-right">
                        <div class="not-printable">
	<span class="pull-right">
                        <a href="javascript:;" id="save_as_favorite"
                                                data-slug="{{ $ad->slug }}"> @if( ! $ad->is_my_favorite()) <img 
src="http://1-800.lenoxproperty.com/assets/img/save.png" />&nbsp;&nbsp;&nbsp;&nbsp; Save @else <img 
src="http://1-800.lenoxproperty.com/assets/img/save.png" height="24" width="24" />&nbsp;&nbsp;&nbsp;&nbsp; Unsave</font>
                                                @endif
                                        </a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"
                                                data-toggle="modal" data-target="#replyByEmail"><img
src="http://1-800.lenoxproperty.com/assets/img/contact.png" />&nbsp;&nbsp;&nbsp;&nbsp;
<font color="green">Contact Property</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
	</div>
		</span>
		</div>
</div>
<br />
<div class="row">
  		<div class="col-md-8 col-sm-12">
    		@if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif @if($ad->city->city_name){{ $ad->city->city_name }},@endif {{ $ad->state->state_name }} @if($ad->neighborhood) - {{ $ad->neighborhood }} @endif @if($ad->pmcdogs or $ad->pmccats) - <img src="http://1-800.lenoxproperty.com/assets/img/pets-small.png" />&nbsp;Pet Friendly @endif
  		</div>
  		<div class="col-md-4 col-sm-12">
                        <span class="pull-right">
			<a href="tel:+1{{ $ad->officephone }}"><h2 class="h2-bottom">{{ $ad->officephone }}</h2></a>
                        </span>
		</div>
</div>

<div class="container">
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
</div>

	<div class="container">
                <div class="row">
                        <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6" align="center">@if($ad->type != "pmc")
				<h3 style="line-height:310%;"><font color="black">${{ $ad->price }}</font></h3>
				<p>Monthly Rent</p>
				@elseif($ad->type == "pmc" and $ad->pmcrent != '')

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
				
                                if(isset($ad->pmcbeds)) {
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

				$bath_array = array ();
				
                                if(isset($ad->pmcbaths) and $ad->pmcbeds != "Studio") {
				$bath_array [] = $ad->pmcbaths;
                                }
                                if(isset($ad->pmcbaths2) and $ad->pmcbeds2 != "Studio") {
				$bath_array [] = $ad->pmcbaths2;
                                }
                                if(isset($ad->pmcbaths3) and $ad->pmcbeds3 != "Studio") {
				$bath_array [] = $ad->pmcbaths3;
                                }
                                if(isset($ad->pmcbaths4) and $ad->pmcbeds4 != "Studio") {
				$bath_array [] = $ad->pmcbaths4;
                                }
                                if(isset($ad->pmcbaths5) and $ad->pmcbeds5 != "Studio") {
				$bath_array [] = $ad->pmcbaths5;
                                }
                                if(isset($ad->pmcbaths6) and $ad->pmcbeds6 != "Studio") {
				$bath_array [] = $ad->pmcbaths6;
                                }
                                if(isset($ad->pmcbaths7) and $ad->pmcbeds7 != "Studio") {
				$bath_array [] = $ad->pmcbaths7;
                                }
                                if(isset($ad->pmcbaths8) and $ad->pmcbeds8 != "Studio") {
				$bath_array [] = $ad->pmcbaths8;
                                }
                                if(isset($ad->pmcbaths9) and $ad->pmcbeds9 != "Studio") {
				$bath_array [] = $ad->pmcbaths9;
                                }
                                if(isset($ad->pmcbaths10) and $ad->pmcbeds10 != "Studio") {
				$bath_array [] = $ad->pmcbaths10;
                                }
				
				if(!empty($bath_array)) {
				$bath_min = min ( array_filter ( $bath_array ) );
                                $bath_max = max ( array_filter ( $bath_array ) );
                                }

				$sqft_array = array ();
				
                                if(isset($ad->pmcsqft)) {
				$sqft_array [] = $ad->pmcsqft;
                                }
                                if(isset($ad->pmcsqft2)) {
				$sqft_array [] = $ad->pmcsqft2;
                                }
                                if(isset($ad->pmcsqft3)) {
				$sqft_array [] = $ad->pmcsqft3;
                                }
                                if(isset($ad->pmcsqft4)) {
				$sqft_array [] = $ad->pmcsqft4;
                                }
                                if(isset($ad->pmcsqft5)) {
				$sqft_array [] = $ad->pmcsqft5;
                                }
                                if(isset($ad->pmcsqft6)) {
				$sqft_array [] = $ad->pmcsqft6;
                                }
                                if(isset($ad->pmcsqft7)) {
				$sqft_array [] = $ad->pmcsqft7;
                                }
                                if(isset($ad->pmcsqft8)) {
				$sqft_array [] = $ad->pmcsqft8;
                                }
                                if(isset($ad->pmcsqft9)) {
				$sqft_array [] = $ad->pmcsqft9;
                                }
                                if(isset($ad->pmcsqft10)) {
				$sqft_array [] = $ad->pmcsqft10;
                                }
				
				if(!empty($sqft_array)) {
				$sqft_min = min ( array_filter ( $sqft_array ) );
                                $sqft_max = max ( array_filter ( $sqft_array ) );
                                }
				
?>

			        <br /><h3>
                                @if(isset($rent_min) and isset($rent_max))
                                ${{ $rent_min }} - ${{ $rent_max }}
                                @endif
                                </h3></font></h2>
				<p>Monthly Rent</p>
					@endif</div>
			<div class="col-md-2 col-sm-6 col-xs-6" align="center">@if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family")
				@if(isset($ad->beds))<h3>
					@if($ad->beds == "0.5") Studio @else {{ $ad->beds }} @endif</h3>
					<img src="http://1-800.lenoxproperty.com/assets/img/bed-icon-large.png" />
                                        <p>Bedrooms</p>
                                @endif
				@elseif($ad->type == "pmc")
                                <h3>@if(isset($bed_min) and isset($bed_max))
                                {{ $bed_min }} - {{ $bed_max }}
                                </h3>
				<img src="http://1-800.lenoxproperty.com/assets/img/bed-icon-large.png" />
					<p>Bedrooms</p>
                                @endif
				@else @if($ad->space_available)
				<h3>{{ $ad->space_available }}</h3>
				Space Available
				@endif @endif</div>
			<div class="col-md-3 col-sm-6 col-xs-6" align="center">@if($ad->type != "pmc" and $ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family")
				@if($ad->attached_bath != 0 and $ad->attached_bath != "")
				<h3>
					{{ $ad->attached_bath }}</h3>
					<img src="http://1-800.lenoxproperty.com/assets/img/bath-icon-large.png" />
                                        <p>Bathrooms</p>
				@endif @elseif($ad->type == "pmc" and (isset($bath_min) and isset($bath_max)))
				<h3>{{ $bath_min }} - {{ $bath_max }}</h3>
				<img src="http://1-800.lenoxproperty.com/assets/img/bath-icon-large.png" />
						<p>Bathrooms</p>
					@else @if($ad->building_size)
					<h3>{{ $ad->building_size }}</h3>
					<img src="http://1-800.lenoxproperty.com/assets/img/building-size.png" />
					Building Size
					@endif @endif</div>
			<div class="col-md-2 col-sm-6 col-xs-6" align="center">@if($ad->type != "pmc" and $ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family")
				@if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
				<h3>
					{{ $ad->square_unit_space }}</h3>
					<img src="http://1-800.lenoxproperty.com/assets/img/sqft-icon-large.png" />
<p>Approx. Sq. Ft.</p>
				@endif @elseif($ad->type == "pmc" and (isset($sqft_min) and isset($sqft_max)))
				<h3>{{ number_format($sqft_min) }} - {{ number_format($sqft_max) }}</h3>
				<img src="http://1-800.lenoxproperty.com/assets/img/sqft-icon-large.png" />
						<p>Approx. Sq. Ft.</p>
					@endif
                                </div>
                         <div class="col-md-2 col-sm-6 col-xs-6" align="center">@if($ad->type == "pmc" and ($ad->pmcdogs or $ad->pmccats))
				<h3>&nbsp;</h3>
				<img src="http://1-800.lenoxproperty.com/assets/img/pets.png" height="48" width="48" />
						<p>Pet Friendly</p>
					@endif
                                </div>
                          </div>
                   </div>
        </div>
</div>

<div class="row">

<div class="col-md-9" style="background-color:#ececec;">
<h3>Brought to you by <b>{{ $ad->title }}</b></h3>
<p class="description">{!! html_entity_decode(nl2br($ad->description)) !!}</p>
</div>
<div class="col-md-3">
<h3>Office Hours:</h3>
						@if($ad->mh)
						<p class="description">Mon: {{ $ad->mh }}</p>
						@endif
						@if($ad->th)
						<p class="description">Tues: {{ $ad->th }}</p>
						@endif
						@if($ad->wh)
						<p class="description">Weds: {{ $ad->wh }}</p>
						@endif
						@if($ad->rh)
						<p class="description">Thurs: {{ $ad->rh }}</p>
						@endif
						@if($ad->fh)
						<p class="description">Fri: {{ $ad->fh }}</p>
						@endif
						@if($ad->sh)
						<p class="description">Sat: {{ $ad->sh }}</p>
						@endif
						@if($ad->uh)
						<p class="description">Sun: {{ $ad->uh }}</p>
						@endif

<div align="center">

@if($ad->website)
<a href="http://{{ $ad->website }}" target="_blank">Click here for Website</a>
@endif
<br /><br />

@if(isset($ad->pmc_logo))
<img src="http://1-800.lenoxproperty.com/dev/uploads/avatar/{{ $ad->pmc_logo }}" width="50%" height="50%" />
@endif

</div>
</div>
</div>
<br />
			<legend>Unit Details</legend>
			<table class="table table-bordered">
				<tr style="background: #ececec";>
					<td><strong>Beds</strong></td>
					<td><strong>Baths</strong></td>
					<td><strong>Rent</strong></td>
					<td><strong>Square Footage</strong></td>
					<td><strong>Floorplan</strong></td>
					<td><strong>&nbsp;</strong></td>
				</tr>

                                @if($ad->pmcbeds)
				<tr>
					@if($ad->pmcbeds and $ad->pmcbeds != "0.5")
					<td>{{$ad->pmcbeds}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif 
                                        @if($ad->pmcbaths)
					<td>{{$ad->pmcbaths}}</td>
                                        @endif
                                        @if($ad->pmcrent)
					<td>${{$ad->pmcrent}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft)
					<td>{{$ad->pmcsqft}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan)
					<td><a href="{{$ad->pmcfloorplan}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td width=200;><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

                                @if($ad->pmcbeds2)
				<tr>
					@if($ad->pmcbeds2 and $ad->pmcbeds2 != "0.5")
					<td>{{$ad->pmcbeds2}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths2)
					<td>{{$ad->pmcbaths2}}</td>
                                        @endif
                                        @if($ad->pmcrent2)
					<td>${{$ad->pmcrent2}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft2)
					<td>{{$ad->pmcsqft2}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan2)
					<td><a href="{{$ad->pmcfloorplan2}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

                                @if($ad->pmcbeds3)
				<tr>
					@if($ad->pmcbeds3 and $ad->pmcbeds3 != "0.5")
					<td>{{$ad->pmcbeds3}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths3)
					<td>{{$ad->pmcbaths3}}</td>
                                        @endif
                                        @if($ad->pmcrent3)
					<td>${{$ad->pmcrent3}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft3)<div class="row">
					<td>{{$ad->pmcsqft3}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan3)
					<td><a href="{{$ad->pmcfloorplan3}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

                                @if($ad->pmcbeds4)
				<tr>
					@if($ad->pmcbeds4 and $ad->pmcbeds4 != "0.5")
					<td>{{$ad->pmcbeds4}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths4)
					<td>{{$ad->pmcbaths4}}</td>
                                        @endif
                                        @if($ad->pmcrent4)
					<td>${{$ad->pmcrent4}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft4)
					<td>{{$ad->pmcsqft4}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan4)
					<td><a href="{{$ad->pmcfloorplan4}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

                                @if($ad->pmcbeds5)
				<tr>
					@if($ad->pmcbeds5 and $ad->pmcbeds5 != "0.5")
					<td>{{$ad->pmcbeds5}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths5)
					<td>{{$ad->pmcbaths5}}</td>
                                        @endif
                                        @if($ad->pmcrent5)
					<td>${{$ad->pmcrent5}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft5)
					<td>{{$ad->pmcsqft5}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan5)
					<td><a href="{{$ad->pmcfloorplan5}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

                                @if($ad->pmcbeds6)
				<tr>
					@if($ad->pmcbeds6 and $ad->pmcbeds6 != "0.5")
					<td>{{$ad->pmcbeds6}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths6)
					<td>{{$ad->pmcbaths6}}</td>
                                        @endif
                                        @if($ad->pmcrent6)
					<td>${{$ad->pmcrent6}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft6)
					<td>{{$ad->pmcsqft6}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan6)
					<td><a href="{{$ad->pmcfloorplan6}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

				@if($ad->pmcbeds7)
				<tr>
					@if($ad->pmcbeds7 and $ad->pmcbeds7 != "0.5")
					<td>{{$ad->pmcbeds7}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths7)
					<td>{{$ad->pmcbaths7}}</td>
                                        @endif
                                        @if($ad->pmcrent7)
					<td>${{$ad->pmcrent7}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft7)
					<td>{{$ad->pmcsqft7}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan7)
					<td><a href="{{$ad->pmcfloorplan7}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

				@if($ad->pmcbeds8)
				<tr>
					@if($ad->pmcbeds8 and $ad->pmcbeds8 != "0.5")
					<td>{{$ad->pmcbeds8}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif 
                                        @if($ad->pmcbaths8)
					<td>{{$ad->pmcbaths8}}</td>
                                        @endif
                                        @if($ad->pmcrent8)
					<td>${{$ad->pmcrent8}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft8)
					<td>{{$ad->pmcsqft8}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan8)
					<td><a href="{{$ad->pmcfloorplan8}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

				@if($ad->pmcbeds9)
				<tr>
					@if($ad->pmcbeds9 and $ad->pmcbeds9 != "0.5")
					<td>{{$ad->pmcbeds9}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths9)
					<td>{{$ad->pmcbaths9}}</td>
                                        @endif
                                        @if($ad->pmcrent9)
					<td>${{$ad->pmcrent9}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft9)
					<td>{{$ad->pmcsqft9}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan9)
					<td><a href="{{$ad->pmcfloorplan9}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

				@if($ad->pmcbeds10)
				<tr>
					@if($ad->pmcbeds10 and $ad->pmcbeds10 != "0.5")
					<td>{{$ad->pmcbeds10}}</td>
                                        @else
                                        <td>Studio</td>
                                        @endif  
                                        @if($ad->pmcbaths10)
					<td>{{$ad->pmcbaths10}}</td>
                                        @endif
                                        @if($ad->pmcrent10)
					<td>${{$ad->pmcrent10}}</td> 
                                        @endif 
                                        @if($ad->pmcsqft10)
					<td>{{$ad->pmcsqft10}}</td>
                                        @endif
                                        @if($ad->pmcfloorplan10)
					<td><a href="{{$ad->pmcfloorplan10}}" target="_blank">View Model</a></td>
                                        @else
                                        <td>&nbsp;</td>
                                        @endif
					<td><a href="#" data-toggle="modal" data-target="#replyByEmail" class="btn btn-primary btn-block">Check for Availability</a></td>
				</tr>
                                @endif

			</table>

				<legend>Apartment Complex Amenities</legend>
				<h4>@if($ad->pmcdogs == "1" )
                               		<div class="col-md-3">
						<p><img src="http://1-800.lenoxproperty.com/assets/img/dogs-small.png" />&nbsp;Dogs Allowed</p>
					</div>
                               	@endif @if($ad->pmccats == "1" )
                               		<div class="col-md-3">
						<p><img src="http://1-800.lenoxproperty.com/assets/img/cats-small.png" />&nbsp;Cats Allowed</p>
					</div>
                               	@endif @if($ad->pmcair == "1" )
                               		<div class="col-md-3">
						<p><img src="http://1-800.lenoxproperty.com/assets/img/air-small.png" />&nbsp;Air Conditioning</p>
					</div>
                               	@endif
				@if($ad->pmcbasketball == "1" )
                                       	<div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/basketball-small.png" />&nbsp;Basketball</p>
                                        </div>
                               	@endif
                                @if($ad->pmcbusiness == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/business-small.png" />&nbsp;Business Center</p>
                                        </div>
                                @endif
                                @if($ad->pmccable == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/cable-small.png" />&nbsp;Cable Ready</p>
                                        </div>
                                @endif
                                @if($ad->pmccarpeting == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/carpet-small.png" />&nbsp;Carpeting</p>
                                        </div>
                                @endif
                                @if($ad->pmcclubhouse == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/clubhouse-small.png" />&nbsp;Clubhouse</p>
                                        </div>
                                @endif
                                @if($ad->pmccontrolled == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/controlled-small.png" />&nbsp;Controlled Access</p>
                                        </div>
                                @endif
                                @if($ad->pmcdeck == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/deck-small.png" />&nbsp;Deck / Balcony</p>
                                        </div>
                                @endif
                                @if($ad->pmcelevator == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/elevator-small.png" />&nbsp;Elevator</p>
                                        </div>
                                @endif
                                @if($ad->pmcceiling == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/ceiling-small.png" />&nbsp;Ceiling Fan</p>
                                        </div>
                                @endif
                                @if($ad->pmcfireplace == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/fireplace-small.png" />&nbsp;Fireplace</p>
                                        </div>
                                @endif
                                @if($ad->pmcfitness == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/gym-small.png" />&nbsp;Fitness Center</p>
                                        </div>
                                @endif
                                @if($ad->pmcfurnished == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/furnished-small.png" />&nbsp;Furnished Units Available</p>
                                        </div>
                                @endif
                                @if($ad->pmchandicap == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/handicap-small.png" />&nbsp;Handicap Access</p>
                                        </div>
                                @endif
                                @if($ad->pmchardwood == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/hardwood-small.png" />&nbsp;Hardwood Floors</p>
                                        </div>
                                @endif
                                @if($ad->pmcinternet == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/internet-small.png" />&nbsp;High-Speed Internet</p>
                                        </div>
                                @endif
                                @if($ad->pmcroom == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Laundry Room</p>
                                        </div>
                                @endif
                                @if($ad->pmclaundrypmc == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Laundry in Unit</p>
                                        </div>
                                @endif
                                @if($ad->pmcmedia == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/media-small.png" />&nbsp;Media Center</p>
                                        </div>
                                @endif
                                @if($ad->pmcpool == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/pool-small.png" />&nbsp;Pool
                                        </div>
                                @endif
                                @if($ad->pmcspa == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/spa-small.png" />&nbsp;Spa / Hot Tub</p>
                                        </div>
                                @endif
                                @if($ad->pmcstorage == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/storage-small.png" />&nbsp;Extra Storage</p>
                                        </div>
                                @endif
                                @if($ad->pmctennis == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/tennis-small.png" />&nbsp;Tennis Court</p>
                                        </div>
                                @endif
                                @if($ad->pmcvaulted == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/vaulted-small.png" />&nbsp;Vaulted Ceilings</p>
                                        </div>
                                @endif
                                @if($ad->pmcwalk == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/walk-small.png" />&nbsp;Walk-In Closet</p>
                                        </div>
                                @endif
                                @if($ad->pmcwasher == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Washer</p>
                                        </div>
                                @endif
                                @if($ad->pmcyard == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/yard-small.png" />&nbsp;Yard</p>
                                        </div>
                                @endif
                                @if($ad->pmcdish == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/dish-small.png" />&nbsp;Dishwasher</p>
                                        </div>
                                @endif                                @if($ad->pmcplay == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/play-small.png" />&nbsp;Playground</p>
                                        </div>
                                @endif                                @if($ad->pmcheat == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/heat-small.png" />&nbsp;Heat Included</p>
                                        </div>
                                @endif                                @if($ad->pmcwater == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/water-small.png" />&nbsp;Hot Water Included</p>
                                        </div>
                                @endif                                @if($ad->pmcelectric == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/electric-small.png" />&nbsp;Electricity Included</p>
                                        </div>
                                @endif                                @if($ad->pmcgarage == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/garage-small.png" />&nbsp;Garage Parking</p>
                                        </div>
                                @endif                                @if($ad->pmcassigned == "1" )
                                        <div class="col-md-3">
                                                <p><img src="http://1-800.lenoxproperty.com/assets/img/assigned-small.png" />&nbsp;Assigned Parking</p>
                                        </div>
                                @endif

				<legend>Property Details</legend>
				<h4>@if($ad->address)
				<div class="col-sm-4 col-md-3">
				<p>
					<b>Address:</b> {{ $ad->address }}
				</p>
				</div>
				@endif @if($ad->city->city_name)
				<div class="col-sm-4 col-md-3">
				<p>
					<b>City:</b> {{ $ad->city->city_name }}
				</p>
				</div>
				@endif @if($ad->state)
				<div class="col-sm-4 col-md-3">
				<p>
					<b>State:</b> {{ $ad->state->state_name }}
				</p>
				</div>
				@endif @if($ad->neighborhood)
				<div class="col-sm-4 col-md-3">
				<p>
					<b>Neighborhood:</b> {{ $ad->neighborhood }}
				</p>
				</div></h4>
				@endif

                <div class="container">
                    <div class="row">
				@if($ad->street_num)
				<br /><br />
				<h3 style="color:#064288;" align="center">The Neighborhood for @if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif @if($ad->city->city_name){{ $ad->city->city_name }},@endif {{ $ad->state->state_name }}</h3>
				<div class="row" style="padding: 15px;">
					<div id="map" style="width: 100%; height: 300px;"></div> 
				</div>
                    </div>
                </div>
                
                <div align="center"><h3 style="color:#064288;">The Neighborhood Video for {{ $ad->street_num }} {{ $ad->street_name }} {{ ucfirst($ad->street_type) }} {{ $ad->city->city_name }}, {{ $ad->state->state_name }}</h3></div>
				<div class="row" style="padding: 15px; background-color:#ececec;" align="center">
					@if($ad->neighborhood_video_url)
                                   <?php
                    				$neighborhood_video_url = $ad->neighborhood_video_url;
                    				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
                    					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
                    					if (! empty ( $matches [1] )) {
                    						echo '<iframe class="embed-responsive-item" width="550" height="400" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
                    					}
                    				}
                    				?>
                    </div>
                    </div>
                    @endif 
				</div>
<br />				

                <div class="container">
                <div class="row">
                <p>
                All square footage measurements are approximate and should be independently verified and confirmed.  No guarantee, warranty or representation of any kind is made regarding the completeness or accuracy of any such measurement and RealtyRI.com disclaims any liability in connection with any such measurements or any other incorrect information with regards to this listing
                </p>
                </div>
                </div>
				@endif