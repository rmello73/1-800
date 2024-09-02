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
		<h1 style="color:#064288;">${{ number_format($ad->price) }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/rent.png" />
        <p>Land Cost</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ number_format($ad->lot_sqft) }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/sqft-icon-large.png" />
        <p>Lot Square Footage</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ number_format($ad->lot_acres) }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/acres.png" />
        <p>Lot Acres</p>
</div>
<div class="col-md-3" align="center">
	<p class="description">
		<h1 style="color:#064288;">{{ number_format($ad->lot_frontage) }}</h1>
	</p>
        <img src="http://realtyri.com/assets/img/frontage.png" />
        <p>Lot Frontage</p>
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

<div align="center"><h1 style="color:#064288;">Land Details</h1></div>

<div class="row">
@if($ad->taxes)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Taxes:</b> ${{ number_format($ad->taxes) }}
				</p>
				</div>
				@endif @if($ad->tax_year)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Tax Year:</b> {{ $ad->tax_year }}
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
				@endif @if($ad->lot_sqft)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Lot Sq Footage:</b> {{ number_format($ad->lot_sqft) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->lot_acres)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Lot Acres:</b> {{ number_format($ad->lot_acres) }}
				</p>
				</div>
				@endif @if($ad->lot_frontage)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Lot Frontage:</b> {{ number_format($ad->lot_frontage) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->approved_lots)
				<div class="col-sm-6 col-md-6">
				<p>
					<b># Approved Lots:</b> {{ $ad->approved_lots }}
				</p>
				</div>
				@endif @if($ad->land_status)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Land Status:</b> {{ ucwords($ad->land_status) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->approved_lots)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Approval(s) Needed:</b> FIX
				</p>
				</div>
				@endif @if($ad->prop_zoning)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Property Zoning:</b> {{ ucwords($ad->prop_zoning) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->road)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Road:</b> {{ ucwords($ad->road) }}
				</p>
				</div>
				@endif @if($ad->water)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Water Supply:</b> {{ ucwords($ad->water) }}
				</p>
				</div>
				@endif
</div>

<div class="row">
@if($ad->topography)
				<div class="col-sm-6 col-md-6">
				<p>
					<b>Topography:</b> {{ ucwords($ad->topography) }}
				</p>
				</div>
				@endif
				<div class="col-sm-6 col-md-6">
				<p>
					&nbsp;
				</p>
				</div>
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