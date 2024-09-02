<div class="row" align="center">
    <div class="col-md-12">
        <ul class="bxslider">
            <?php
				$property_video_url = $ad->property_video_url;
				if (strpos ( $property_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $property_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<div><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $matches [1] . 
'" frameborder="0" width="520" height="400" allowfullscreen></iframe></div>';
					}
				} elseif (strpos ( $property_video_url, 'vimeo' ) > 0) {
					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $property_video_url, $regs )) {

						if (! empty ( $regs [3] )) {
							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
						}
					}
				}
				?>
			@if($ad->media_img->count() != 0)
        		@foreach($ad->media_img as $img)
        		<li><img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}"></li>
        		@endforeach
        	@else
        		<img src="http://1-800.lenoxproperty.com/assets/img/default-ri-property.png" alt="RI Property Rentals">
        	@endif
		</ul>
        <a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> Click to see {{ $ad->media_img->count() }} Photos</i></span></a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-6 col-lg-8">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6" align="center">
                    @if(isset($ad->price))
        			<h1 class="bigtext" style="padding-top:50px;">${{ number_format($ad->price) }}</font></h1>
        			@endif
        		</div>
        		<div class="col-md-2 col-sm-6 col-xs-6" align="center">
        			@if(isset($ad->beds))<h3>
        				@if($ad->beds == "0.5") Studio @else {{ $ad->beds }} @endif</h3>
        				<img src="http://realtyri.com/assets/img/bed-icon-large.png" height="32px" width="32px" />
                        <p>Bedrooms</p>
                    @endif
        		</div>
        		<div class="col-md-2 col-sm-6 col-xs-6" align="center">
                    @if($ad->attached_bath != 0 and $ad->attached_bath != "")
        			<h3>{{ $ad->attached_bath }}</h3>
        			<img src="http://realtyri.com/assets/img/bath-icon-large.png" height="32px" width="32px" />
                    <p>Bathrooms</p>
        			@endif
        		</div>
        		<div class="col-md-2 col-sm-6 col-xs-6" align="center">
                    @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
        			<h3>{{ $ad->square_unit_space }}</h3>
        			<img src="http://realtyri.com/assets/img/sqft-icon-large.png" height="32px" width="32px" />
                    <p>Approx. Sq. Ft.</p>
        			@endif
        		</div>
        		<div class="col-md-2 col-sm-6 col-xs-6" align="center" style="padding-top:40px";>
                    <a href="#" class="btn theme-btn btn-lg" data-toggle="modal" data-target="#replyByEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Schedule a Showing</a>
        		</div>
        	</div>
        	<hr />
        	<div class="row">
        	    <div class="col-md-7">
                	<h1 class="bigtext">@if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif 
                                            @if($ad->city->city_name){{ $ad->city->city_name }},@endif RI
                    </h1>
    		    </div>
    		    <div class="col-md-5">
                        <a href="javascript:;" id="save_as_favorite" data-slug="{{ $ad->slug }}"> 
                        @if( ! $ad->is_my_favorite()) <img src="http://realtyri.com/assets/img/save.png" height="18px" width="18px" />&nbsp; Save 
                        @else <img src="http://realtyri.com/assets/img/save.png" />&nbsp; Unsave</font>
                        @endif
                        </a> 
                        &nbsp;
                        <a href="#" data-toggle="modal" data-target="#shareByEmail"><img src="http://realtyri.com/assets/img/share.png" height="18px" width="18px" />&nbsp; Share</a>
                        &nbsp; 
                        <a href="#" data-toggle="modal" data-target="#replyByEmail"><img src="http://realtyri.com/assets/img/contact.png" height="18px" width="18px" />&nbsp;Contact</a> 
                        &nbsp; 
                        <a href="#" data-toggle="modal" data-target="#reportAdModal"><img src="http://realtyri.com/assets/img/report.png" height="18px" width="18px" />&nbsp;Report</a>
                </div>
    		</div>
    		<hr />
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				<img src="http://realtyri.com/assets/img/dogs.png" height="32px" width="32px"
/><br />

@if($ad->dogs =="Dogs Allowed")
Dogs Allowed
@elseif ($ad->dogs == "Dogs Not Allowed")
Dogs Not Allowed
@elseif ($ad->dogs == "See Description")
See Description
@else
See Description
@endif
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="http://realtyri.com/assets/img/cats.png" height="32px" width="32px"
/><br />

@if($ad->cats =="Cats Allowed")
Cats Allowed
@elseif ($ad->cats == "Cats Not Allowed")
Cats Not Allowed
@elseif ($ad->cats == "See Description")
See Description
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="http://realtyri.com/assets/img/washer.png" height="32px" width="32px"
/><br />

@if($ad->laundry =="Laundry on Site")
Laundry on Site
@elseif ($ad->laundry == "Laundry in Unit")
Laundry in Unit
@elseif ($ad->laundry == "Washer / Dryer Hookups")
Washer / Dryer Hookups
@elseif ($ad->laundry == "See Description")
See Description
@elseif ($ad->laundry == "No Laundry")
No Laundry
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="http://realtyri.com/assets/img/heat.png" height="32px" width="32px"
/><br />

@if($ad->heat =="Gas Heat")
Gas Heat
@elseif ($ad->heat == "Oil Heat")
Oil Heat
@elseif ($ad->heat == "Electric Heat")
Electric Heat
@elseif ($ad->heat == "See Description")
See Description
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="http://realtyri.com/assets/img/parking.png" height="32px" width="32px"
/><br />

@if($ad->parking =="Off Street Parking")
Off Street Parking
@elseif ($ad->parking == "Garage Parking")
Garage Parking
@elseif ($ad->parking == "No Parking")
No Parking
@elseif ($ad->parking == "See Description")
See Description
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="http://realtyri.com/assets/img/utilities.png" height="32px" width="32px"
/><br />

@if($ad->utilities =="Heat Included")
Heat Included
@elseif ($ad->utilities == "Electric Included")
Electric Included
@elseif ($ad->utilities == "No Utilities Included")
No Utilities Included
@elseif ($ad->utilities == "Heat and Electric Included")
Heat & Electric Included
@elseif ($ad->utilities == "See Description")
See Description
@else
See Description
@endif
                        </div>			
		</div>
    		<hr />
    		<legend>Amenities</legend>
            			<div style="padding: 15px;">
            				@if($ad->hfloors == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/hardwoods.png" />&nbsp;Hardwood Floors</div>
            				@endif @if($ad->carpet == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/carpet.png" />&nbsp;Carpeted Floors</div>
            				@endif @if($ad->tile == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/tile.png" />&nbsp;Tile Flooring</div>
            				@endif @if($ad->stainless == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/stainless.png" />&nbsp;Stainless Steel Appliances</div>
            				@endif @if($ad->granite == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/granite.png" />&nbsp;Granite Countertops</div>
            				@endif @if($ad->central == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/air.png" />&nbsp;Central Air</div>
            				@endif @if($ad->furnishedapt == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/furnished.png" />&nbsp;Furnished Apartment</div>
            				@endif @if($ad->basementstorage == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/storage.png" />&nbsp;Basement Storage</div>
            				@endif @if($ad->fireplace == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/fireplace.png" />&nbsp;Fireplace</div>
            				@endif @if($ad->yard == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/yard.png" />&nbsp;Yard</div>
            				@endif @if($ad->ceiling == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/fan.png" />&nbsp;Ceiling Fan</div>
            				@endif @if($ad->gourmet == "1" )
            				<div class="col-md-4"><img
            src="http://realtyri.com/assets/img/gourmet.png" />&nbsp;Gourmet Kitchen</div>
            				@endif
            			</div>
            <legend>Description</legend>
            <p class="description">
                {!! html_entity_decode(nl2br($ad->description)) !!}
            </p>
			    <div class="row" style="padding: 15px;">
					<div id="map" style="width: 100%; height: 300px;"></div> 
			    </div>
		    <div align="center"><h3 style="color:#064288;">The Neighborhood for {{ $ad->street_num }} {{ $ad->street_name }} {{ ucfirst($ad->street_type) }} {{ $ad->city->city_name }}, {{ $ad->state->state_name }}</h3></div>
				<div class="row" align="center">
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
                    @endif 
        </div>
        <div class="col-xs-6 col-lg-3 tall">
            <legend>Home Improvement Pros</legend>
            <p><a href="../openhouselisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/open.png" />&nbsp; Open Houses</a></p>
            <p><a href="../brokerlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/contractors.png" />&nbsp; Mortgage Brokers</a></p>
            <p><a href="../photographerlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/photographers.png" />&nbsp; Photographers</a></p>
            <p><a href="../videographerlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/videographers.png" />&nbsp; Videographers</a></p>
            <p><a href="../attorneylisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/lawyers.png" />&nbsp; Real Estate Attorneys</a></p>
            <p><a href="../inspectorlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/inspectors.png" />&nbsp; Home Inspectors</a></p>
            <p><a href="../contractorlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/contractors.png" />&nbsp; Contractors</a></p>
            <p><a href="../agentlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/agents.png" />&nbsp; Insurance Agents</a></p>
            <p><a href="../eventscalendarlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/events.png" />&nbsp; Events Calendar</a></p>
            <p><a href="../restaurantlisting?q=&city={{ $ad->city->city_name }}"><img src="http://1-800.lenoxproperty.com/assets/img/restaurants.png" />&nbsp; Restaurants</a></p>
            
        </div>
        <div class="col-xs-6 col-lg-3 listing-contact">
            <legend>Listing Contact</legend>
                 <div class="col-md-12" align="center">
					<p>
						@if(isset($ad->user->photo)) 
							<img src="{{ $ad->user->get_photo() }}"  width="200" height="200" />
						@else
        					<img src="http://realtyri.com/uploads/placeholder.png" alt="RI Property Rentals" width="130" height="175">
						@endif
					</p>
<p>
                                        @if($ad->user->agent_logo) <img
                                                                                src="{{ $ad->user->get_agent_logo() }}" height="30%" width="30%" />
                                                                        	@else
										<img
                                                                                
src="http://realtyri.com/uploads/logo/1493298353wsgtd-1489070237fcmar-logo.png" height="30%" width="30%" />
                                                                        	@endif
                                        </p>
					<p>
						<a
							href="tel:1{{ $ad->user->mobile }}"><i class="fa fa-phone" aria-hidden="true"></i> {{ $ad->user->mobile }}</a><br /><br />
						<a href="#" class="btn theme-btn btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Contact</a>
					</p>
				</div>
				<div class="col-md-12" align="center">
                    <a href="#" class="btn btn-default share s_facebook"><i
                            class="fa fa-facebook"></i> </a> <a href="#"
                            class="btn btn-default share s_plus"><i class="fa fa-google-plus"></i>
                    </a> <a href="#" class="btn btn-default share s_twitter"><i
                            class="fa fa-twitter"></i> </a> <a href="#"
                            class="btn btn-default share s_linkedin"><i class="fa fa-linkedin"></i>
                    </a> <button class="btn btn-default print"><i class="fa fa-print"></i></button>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3 tenant-info">
            <legend>Tenant Info</legend>
            <p><a href="http://1-800.lenoxproperty.com/page/everything-a-landlord-needs-to-know">Everything you need to know</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/landlord-city-and-town-info-in-ri">City and Town Info</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/local-rental-laws">Links to Local Laws</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/lead-paint-and-fire-law-info-in-ri">Lead and Fire Law Info</a></p>
            <p><a href="https://www.rentometer.com" target="_blank">Did I price my apartment right?</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/free-tenant-screening-tools-for-ri">Screening Tools</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/eviction-information-and-forms-for-ri">Eviction</a></p>
            <p><a href="http://1-800.lenoxproperty.com/page/free-leases-applications-and-other-forms-for-apartment-rentals">Free Leases and Other Documents</a></li>
        </div>
    </div>
</div>

<div class="container">
    <p>
        Please Note: All square footage measurements are approximate and should be independently verified and confirmed.  No guarantee, warranty or representation of any kind is made regarding the completeness or accuracy of any such measurement and RealtyRI.com disclaims any liability in connection with any such measurements or any other incorrect information with regards to this listing
    </p>
</div>
