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
src="http://realtyri.com/assets/img/save.png" />&nbsp;&nbsp;&nbsp;&nbsp; Save @else <img 
src="http://realtyri.com/assets/img/save.png" height="24" width="24" />&nbsp;&nbsp;&nbsp;&nbsp; Unsave</font>
                                                @endif
                                        </a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href="#"
                                                data-toggle="modal" data-target="#replyByEmail"><img
src="http://realtyri.com/assets/img/contact.png" />&nbsp;&nbsp;&nbsp;&nbsp;
<font color="green">Contact Property</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
                </span>
	</div>
		</span>
		</div>
</div>
<br />
<div class="row">
  		<div class="col-md-6 col-sm-12">
    		@if($ad->street_num){{ $ad->street_num }}@endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ $ad->street_type }}@endif 
    		@if($ad->city->city_name){{ $ad->city->city_name }},@endif {{ $ad->state->state_name }} 
    		@if($ad->neighborhood) - {{ $ad->neighborhood }} @endif 
    		@if($ad->pmcdogs or $ad->pmccats) - <img src="http://realtyri.com/assets/img/pets-small.png" />&nbsp;Pet Friendly @endif
  		</div>
  		<div class="col-md-6 col-sm-12">
                        <span class="pull-right">
			<a href="tel:+1{{ $ad->officephone }}"><h2 class="h2-bottom">{{ $ad->officephone }}</h2></a>
                        </span>
		</div>
</div>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
	<div class="fotorama" data-width="100%" data-height="100%">
        @foreach($ad->media_img as $img)
        	<img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
        @endforeach
        </div>
  </div>
</div>
@if(!$ad->video)
<div class="container" style="height:450px;">
        <div class="row">
                <div class="row">
	<div class="not-printable">
<div class="new-share-buttons">
        <a href="#" class="btn btn-default share s_facebook"><i
                class="fa fa-facebook"></i> </a> <a href="#"
                class="btn btn-default share s_plus"><i class="fa fa-google-plus"></i>
        </a> <a href="#" class="btn btn-default share s_twitter"><i
                class="fa fa-twitter"></i> </a> <a href="#"
                class="btn btn-default share s_linkedin"><i class="fa fa-linkedin"></i>
        </a> <button class="btn btn-default print"><i class="fa fa-print"></i></button>
</div>
</div>
		<ul class="bxslider">
			@if($ad->media_img->count() != 0)
        		@foreach($ad->media_img as $img)
        			<li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}"></li>
        		@endforeach
        	@else
        		<img src="http://realtyri.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
        	@endif
		</ul>
<a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> {{ $ad->media_img->count() }} Photos</i>
</span></a>
</div>
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
        		<img src="http://realtyri.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
        	@endif
		</ul>
          </div>
          <div class="col-md-6">
@if($ad->neighborhood_video_url) {{ $ad->neighborhood_video_url }}
               <?php
				$neighborhood_video_url = $ad->neighborhood_video_url;
				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<iframe class="embed-responsive-item" width="550" height="400" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
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
</div>
@endif
@endif

                <div class="row">
                        <div class="row">
                                <div class="col-sm-4 col-xs-4" align="center">
                                        <h3>${{ $ad->sqft_price }} per sqft</h3>
                                <img src="http://realtyri.com/assets/img/rent.png" /><br />
                                Rent Rate
                                </div>
                                <div class="col-sm-4 col-xs-4" align="center">
                                        @if($ad->space_available)
				<h3>{{ number_format($ad->space_available) }} sqft</h3>
				<img src="http://realtyri.com/assets/img/sqft-icon-large.png" /><br />
				Space Available
				@endif
                                </div>
                                <div class="col-sm-4 col-xs-4" align="center">
                                        @if($ad->building_size)
					<h3>{{ number_format($ad->building_size) }} sqft</h3>
					<img src="http://realtyri.com/assets/img/building-size.png" /><br />
					Building Size
					@endif
                                </div>
                        </div>
                </div>

				<legend>{{ ucfirst($ad->type) }} for Lease</legend>
				<div class="row description">
					<div class="col-md-6">
						<p>
							<b>Space Available:</b> {{ number_format($ad->space_available) }} sqft
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<b>Lease Type:</b> {{ $ad->lease_type }}
						</p>
					</div>
				</div>
				<div class="row description">
					<div class="col-md-6">
						<p>
							<b>Year Built:</b> {{ $ad->year_built }}
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<b>Lot Size:</b> {{ number_format($ad->lot_size) }} sqft
						</p>
					</div>
				</div>
				<div class="row description">
					<div class="col-md-6">
                                               	<p>
                                                       	<b>Monthly Rent:</b> ${{ number_format($ad->monthly_rent) }}
                                               	</p>
                                       	</div>
                                       	<div class="col-md-6">
                                               	<p>
                                                        <b>Building Size:</b> {{ number_format($ad->building_size) }} sqft
                                                </p>
                                        </div>
				</div>

        <div class="row">
                <div class="row">
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

@if($ad->street_num)
				<br />
				<div align="center"><h3 style="color:#064288;">The Neighborhood for {{ $ad->street_num }} {{ $ad->street_name }}</h3></div>
				<div class="row" style="padding: 15px;">
					<div id="map" style="width: 100%; height: 300px;"></div> 
				</div>
<p>
All square footage measurements are approximate and should be independently verified and confirmed.  No guarantee, warranty or representation of any kind is made regarding the completeness or accuracy of any such measurement and RealtyRI.com disclaims any liability in connection with any such measurements or any other incorrect information with regards to this listing
</p>
				@endif