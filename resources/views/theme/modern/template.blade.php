<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
	<div class="fotorama" data-width="100%" data-height="100%">
        @foreach($ad->media_img->sortBy('image_order') as $img)
        	<img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
        @endforeach
        </div>
  </div>
</div>
<?php 
                    				    $bed_array = array ();
                                        if(isset($ad->multi_beds)) {
				                            $bed_array [] = $ad->multi_beds;
                                        }
                                        if(isset($ad->multi_beds2)) {
				                            $bed_array [] = $ad->multi_beds2;
                                        }
                                        if(isset($ad->multi_beds3)) {
				                            $bed_array [] = $ad->multi_beds3;
                                        }
                                        if(isset($ad->multi_beds4)) {
				                            $bed_array [] = $ad->multi_beds4;
                                        }
                                        if(isset($ad->multi_beds5)) {
				                            $bed_array [] = $ad->multi_beds5;
                                        }
                                        if(isset($ad->multi_beds6)) {
				                            $bed_array [] = $ad->multi_beds6;
                                        }
                                        if(isset($ad->multi_beds7)) {
				                            $bed_array [] = $ad->multi_beds7;
                                        }
                                        if(isset($ad->multi_beds8)) {
				                            $bed_array [] = $ad->multi_beds8;
                                        }
                                        if(isset($ad->multi_beds9)) {
				                            $bed_array [] = $ad->multi_beds9;
                                        }
                                        if(isset($ad->multi_beds10)) {
				                            $bed_array [] = $ad->multi_beds10;
                                        }
                                        
                                        $bath_array = array ();
                                        if(isset($ad->multi_baths)) {
				                            $bath_array [] = $ad->multi_baths;
                                        }
                                        if(isset($ad->multi_baths2)) {
				                            $bath_array [] = $ad->multi_baths2;
                                        }
                                        if(isset($ad->multi_baths3)) {
				                            $bath_array [] = $ad->multi_baths3;
                                        }
                                        if(isset($ad->multi_baths4)) {
				                            $bath_array [] = $ad->multi_baths4;
                                        }
                                        if(isset($ad->multi_baths5)) {
				                            $bath_array [] = $ad->multi_baths5;
                                        }
                                        if(isset($ad->multi_baths6)) {
				                            $bath_array [] = $ad->multi_baths6;
                                        }
                                        if(isset($ad->multi_baths7)) {
				                            $bath_array [] = $ad->multi_baths7;
                                        }
                                        if(isset($ad->multi_baths8)) {
				                            $bath_array [] = $ad->multi_baths8;
                                        }
                                        if(isset($ad->multi_baths9)) {
				                            $bath_array [] = $ad->multi_baths9;
                                        }
                                        if(isset($ad->multi_baths10)) {
				                            $bath_array [] = $ad->multi_baths10;
                                        }
                                        
                                        $half_array = array ();
                                        if(isset($ad->multi_half)) {
				                            $half_array [] = $ad->multi_half;
                                        }
                                        if(isset($ad->multi_half2)) {
				                            $half_array [] = $ad->multi_half2;
                                        }
                                        if(isset($ad->multi_half3)) {
				                            $half_array [] = $ad->multi_half3;
                                        }
                                        if(isset($ad->multi_half4)) {
				                            $half_array [] = $ad->multi_half4;
                                        }
                                        if(isset($ad->multi_half5)) {
				                            $half_array [] = $ad->multi_half5;
                                        }
                                        if(isset($ad->multi_half6)) {
				                            $half_array [] = $ad->multi_half6;
                                        }
                                        if(isset($ad->multi_half7)) {
				                            $half_array [] = $ad->multi_half7;
                                        }
                                        if(isset($ad->multi_half8)) {
				                            $half_array [] = $ad->multi_half8;
                                        }
                                        if(isset($ad->multi_half9)) {
				                            $half_array [] = $ad->multi_half9;
                                        }
                                        if(isset($ad->multi_half10)) {
				                            $half_array [] = $ad->multi_half10;
                                        }
                                        
                                        $sqft_array = array ();
                                        if(isset($ad->multi_sqft)) {
				                            $sqft_array [] = $ad->multi_sqft;
                                        }
                                        if(isset($ad->multi_sqft2)) {
				                            $sqft_array [] = $ad->multi_sqft2;
                                        }
                                        if(isset($ad->multi_sqft3)) {
				                            $sqft_array [] = $ad->multi_sqft3;
                                        }
                                        if(isset($ad->multi_sqft4)) {
				                            $sqft_array [] = $ad->multi_sqft4;
                                        }
                                        if(isset($ad->multi_sqft5)) {
				                            $sqft_array [] = $ad->multi_sqft5;
                                        }
                                        if(isset($ad->multi_sqft6)) {
				                            $sqft_array [] = $ad->multi_sqft6;
                                        }
                                        if(isset($ad->multi_sqft7)) {
				                            $sqft_array [] = $ad->multi_sqft7;
                                        }
                                        if(isset($ad->multi_sqft8)) {
				                            $sqft_array [] = $ad->multi_sqft8;
                                        }
                                        if(isset($ad->multi_sqft9)) {
				                            $sqft_array [] = $ad->multi_sqft9;
                                        }
                                        if(isset($ad->multi_sqft10)) {
				                            $sqft_array [] = $ad->multi_sqft10;
                                        }
                                        
                                        $rent_array = array ();
                                        if(isset($ad->multi_rent)) {
				                            $rent_array [] = $ad->multi_rent;
                                        }
                                        if(isset($ad->multi_rent2)) {
				                            $rent_array [] = $ad->multi_rent2;
                                        }
                                        if(isset($ad->multi_rent3)) {
				                            $rent_array [] = $ad->multi_rent3;
                                        }
                                        if(isset($ad->multi_rent4)) {
				                            $rent_array [] = $ad->multi_rent4;
                                        }
                                        if(isset($ad->multi_rent5)) {
				                            $rent_array [] = $ad->multi_rent5;
                                        }
                                        if(isset($ad->multi_rent6)) {
				                            $rent_array [] = $ad->multi_rent6;
                                        }
                                        if(isset($ad->multi_rent7)) {
				                            $rent_array [] = $ad->multi_rent7;
                                        }
                                        if(isset($ad->multi_rent8)) {
				                            $rent_array [] = $ad->multi_rent8;
                                        }
                                        if(isset($ad->multi_rent9)) {
				                            $rent_array [] = $ad->multi_rent9;
                                        }
                                        if(isset($ad->multi_rent10)) {
				                            $rent_array [] = $ad->multi_rent10;
                                        }
                    				?>

@if($ad->property_video_url)
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding">
    <div class="video-responsive">
        <?php
        				$property_video_url = $ad->property_video_url;
        				if (strpos ( $property_video_url, 'youtube' ) > 0) {
        					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $property_video_url, $matches );
        					if (! empty ( $matches [1] )) {
        						echo '<div class="video-container"><iframe src="https://www.youtube.com/embed/' . $matches [1] . 
        '" frameborder="0" width="100%" height="100%" allowfullscreen></iframe></div>';
        					}
        				} elseif (strpos ( $property_video_url, 'vimeo' ) > 0) {
        					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $property_video_url, $regs )) {
        
        						if (! empty ( $regs [3] )) {
        							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
        						}
        					}
        				}
        				?>
        				<div class="new-share-buttons">
                    <a href="#" class="btn btn-default share s_facebook"><i
                            class="fa fa-facebook"></i> </a> <a href="#" class="btn btn-default share s_twitter"><i
                            class="fa fa-twitter"></i> </a> <a href="#"
                            class="btn btn-default share s_linkedin"><i class="fa fa-linkedin"></i>
                    </a>
                </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding">
    <div class="video-responsive">
        @foreach($ad->media_img->sortBy('image_order') as $img)
            @if($ad->media_img->count() == 4)
            <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6 col-lg-6 nopadding">
                <div class="recent-work-wrap">
                    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
                </div>
            </div>
            @elseif($ad->media_img->count() > 4)
            <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6 col-lg-6 nopadding">
                <div class="recent-work-wrap">
                    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
                </div>
            </div>
            @elseif($ad->media_img->count() < 4)
            <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-12 col-lg-12 nopadding">
                <div class="recent-work-wrap">
                    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
                </div>
            </div>
            @endif
        @endforeach
        <div class="centered"><a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> Show All {{ $ad->media_img->count() }} Photos</i>
        </div>
    </div>
</div>
@else
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
    <div class="video-responsive">
        @foreach($ad->media_img->sortBy('image_order') as $img)
        @if($ad->media_img->count() == 4)
        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6 col-lg-6 nopadding">
            <div class="recent-work-wrap">
        	    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
        	</div>
        </div>
        @elseif($ad->media_img->count() > 4)
        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-6 col-lg-6 nopadding">
            <div class="recent-work-wrap">
        	    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
        	</div>
        </div>
        @elseif($ad->media_img->count() < 4)
        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-12 col-lg-12 nopadding">
            <div class="recent-work-wrap">
        	    <img src="{{ media_url($img, true) }}" alt="{{ $ad->title }}">
        	</div>
        </div>
        @elseif($ad->media_img->count() == 0)
        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-12 col-lg-12 nopadding">
            <div class="recent-work-wrap">
                <p>Display Default Photo</p>
            </div>
        </div>
        @endif
        @endforeach
        <div class="centered"><a href="javascript:void(0)" onclick="openNav()"><span class="modern-details-img-indicator">
        <i class="fa fa-expand"> Show All {{ $ad->media_img->count() }} Photos</i>
        </div>
    </div>
</div>
@endif

&nbsp;&nbsp;&nbsp;&nbsp;
<!-- Apartment Rental -->
<div class="container">
    <h1>{{ $ad->title }}</h1>
</div>    
@if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "single-family" or $ad->type == "loft")
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                    <div class="col-md-12">
                        <p class="big-price">${{ number_format($ad->price) }}</p>
                    </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->beds))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                        {{ $ad->beds }} Bed</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                        @if($ad->half_bath) {{ $ad->attached_bath + ($ad->half_bath)*0.5 }} @else {{ $ad->attached_bath }} @endif Bath</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Square Footage:</p>
                        {{ $ad->square_unit_space }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				<img src="https://1-800.lenoxproperty.com/assets/img/dogs.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
/><br />

@if($ad->dogs =="Dogs Allowed")
Dogs Allowed
@elseif ($ad->dogs == "Dogs NOT Allowed")
Dogs Not Allowed
@elseif ($ad->dogs == "See Description")
See Description
@else
See Description
@endif
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="https://1-800.lenoxproperty.com/assets/img/cats.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
/><br />

@if($ad->cats =="Cats Allowed")
Cats Allowed
@elseif ($ad->cats == "Cats NOT Allowed")
Cats Not Allowed
@elseif ($ad->cats == "See Description")
See Description
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="https://1-800.lenoxproperty.com/assets/img/top-washer.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
/><br />

@if($ad->laundry =="Laundry on Site")
Laundry Onsite
@elseif ($ad->laundry == "Laundry in Unit")
Laundry in Unit
@elseif ($ad->laundry == "Washer / Dryer Hookups")
Washer / Dryer Hookups
@elseif ($ad->laundry == "See Description")
See Description
@elseif($ad->laundry == "No Laundry")
No Laundry
@else
See Description
@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="https://1-800.lenoxproperty.com/assets/img/heat.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
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
                                <img src="https://1-800.lenoxproperty.com/assets/img/parking.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
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
                                <img src="https://1-800.lenoxproperty.com/assets/img/utilities.png" alt="{{ $ad->city->city_name }} RI Apartments for Rent"
/><br />

@if($ad->utilities =="Heat Included")
Heat & Electric Included
@elseif ($ad->utilities == "Electricity Included")
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
	</div>
</div>
@elseif($ad->type == "pmc")

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
                                
                                $bath_array = array ();
                                
                                if(isset($ad->pmcbaths)) {
                                    $bath_array [] = $ad->pmcbaths;
                                }
                                if(isset($ad->pmcbaths2)) {
                                    $bath_array [] = $ad->pmcbaths2;
                                }
                                if(isset($ad->pmcbaths3)) {
                                    $bath_array [] = $ad->pmcbaths3;
                                }
                                if(isset($ad->pmcbaths4)) {
                                    $bath_array [] = $ad->pmcbaths4;
                                }
                                if(isset($ad->pmcbaths5)) {
                                    $bath_array [] = $ad->pmcbaths5;
                                }
                                if(isset($ad->pmcbaths6)) {
                                    $bath_array [] = $ad->pmcbaths6;
                                }
                                if(isset($ad->pmcbaths7)) {
                                    $bath_array [] = $ad->pmcbaths7;
                                }
                                if(isset($ad->pmcbaths8)) {
                                    $bath_array [] = $ad->pmcbaths8;
                                }
                                if(isset($ad->pmcbaths9)) {
                                    $bath_array [] = $ad->pmcbaths9;
                                }
                                if(isset($ad->pmcbaths10)) {
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
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($rent_min))
                    <div class="col-md-12">
                        <p class="big-price">${{ number_format($rent_min) }}</p>
                    </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($bed_min))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                        {{ $bed_min }} Bed</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                        @if($bath_min) {{ $bath_min }} @endif Bath</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($sqft_min)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Square Footage:</p>
                        {{ $sqft_min }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->category == "commercial_rental")
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
			        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->sqft_price))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/coin.png" />
                    </div>
                    @if($ad->price != 0)<p>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">SQFT Price:</p>
                        ${{ number_format($ad->price) }}</div>
                    </div>
                    @else
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Price per sqft:</p>
                        ${{ number_format($ad->sqft_price) }}</div>
                    </div>
                    @endif
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->space_available))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Space Available:</p>
                        {{ number_format($ad->space_available) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->building_size)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/building-size.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Building Size:</p>
                        {{ number_format($ad->building_size) }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->lease_type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/lease.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Lease Type:</p>
                        {{ $ad->lease_type }}</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->sale_type == "Single-Family")
<div class="container">
        <div class="row top-details">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->beds))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                        {{ $ad->beds }} Bed</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                        @if($ad->half_bath) {{ $ad->attached_bath + ($ad->half_bath)*0.5 }} @else {{ $ad->attached_bath }} @endif Bath</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Square Footage:</p>
                        {{ $ad->square_unit_space }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->sale_type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->sale_type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->sale_type == "Multi-Family")
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                         {{ array_sum($bed_array) }} Bed</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                         {{ array_sum($bath_array) + array_sum($half_array) }} Bath</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Gross Square Footage:</p>
                        {{ $ad->square_unit_space }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->sale_type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->sale_type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->sale_type == "Condo")
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->beds))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                        {{ $ad->beds }} Bed</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                        @if($ad->half_bath) {{ $ad->attached_bath + ($ad->half_bath)*0.5 }} @else {{ $ad->attached_bath }} @endif Bath</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Square Footage:</p>
                        {{ $ad->square_unit_space }} sqft</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->sale_type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->sale_type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->category == "land_sale")
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
        			@endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->lot_sqft))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/lot-size.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Lot sqft:</p>
                        {{ $ad->lot_sqft }} sqft</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->lot_acres)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/acres.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Lot Acres:</p>
                        {{ $ad->lot_acres }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->lot_frontage)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/lot-frontage.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Lot Frontage:</p>
                        {{ $ad->lot_frontage }}</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        Land</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@elseif($ad->sale_type == "Commercial")
<!-- Commercial Sale -->
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
                    @else
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Price per sqft:</p>
                        ${{ number_format($ad->sqft_price) }}</div>
                    </div>
                    @endif
			</div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->building_size))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/building-size.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Building Size:</p>
                        {{ number_format($ad->building_size) }} sqft</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    @if($ad->lot_size)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/lot-size.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Lot Size:</p>
                        {{ number_format($ad->lot_size) }} sqft</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    @if($ad->total_units)
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/num-units.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Total Units:</p>
                        {{ $ad->total_units }}</div>
                    </div>
        			@endif
                        </div>
                    <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        Commercial</div>
                    </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@else
<div class="container">
        <div class="row top-rectangle">
                <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
				@if(isset($ad->price))
                                <div class="col-md-12">
                                    <p class="big-price">${{ number_format($ad->price) }}</p>
                                </div>
        			@endif
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->sale_type))
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/img/home.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Property Type:</p>
                        {{ ucwords($ad->sale_type) }}</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if(isset($ad->beds))
        			<div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bed.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bedrooms:</p>
                        {{ $ad->beds }} Bed</div>
                    </div>
                    @endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->attached_bath != 0 and $ad->attached_bath != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/bath.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Bathrooms:</p>
                        {{ $ad->attached_bath }} Bath</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                @if($ad->square_unit_space != 0 and $ad->square_unit_space != "")
                    <div class="col-md-6">
                        <img src="https://1-800.lenoxproperty.com/assets/images/design.png" />
                    </div>
                    <div class="col-md-6">
                        <div class="row"><p class="small-info">Square Footage:</p>
                        {{ $ad->square_unit_space }} sqft</div>
                    </div>
        			@endif
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-4" align="center">
                                <a href="#" class="button-showing" data-toggle="modal" data-target="#replyByEmail">REQUEST A SHOWING</a>
                        </div>			
		</div>
	</div>
</div>
@endif
&nbsp;&nbsp;&nbsp;&nbsp;
    
    <div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <div class="col-md-9 col-sm-12">
          <div class="col-md-12 left-pane">
            <div class="col-md-7 col-sm-7">
                <div style="color:red";>
                    @if($ad->openhouse_date > Carbon\Carbon::today())
                    Open House Date: {{ date("F jS, Y", strtotime($ad->openhouse_date)) }} @if($ad->openhouse_time) from {{ $ad->openhouse_time }} - {{ $ad->openhouse_finish }} @endif
                    @endif
                </div>
    	        <p class="address">
    	            @if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif @if($ad->unit_no) Unit {{ $ad->unit_no }}@endif @if($ad->floor_no) Floor {{ $ad->floor_no }}@endif
    	        </p>
    	        <p>{{ $ad->new_city }}, {{ $ad->new_state }} {{ $ad->zipcode }}</p>
    	        @if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "single-family" or $ad->type == "loft")
    	        @endif
    	    </div>
    	    <div class="col-md-5 col-sm-5">
    	        <div class="col-md-12 col-sm-12">
    	            <div class="col-md-3 col-sm-3">
            	        <a href="javascript:;" id="save_as_favorite" data-slug="{{ $ad->slug }}"> 
                            @if( ! $ad->is_my_favorite()) <img src="https://realtyri.com/assets/img/save.png" />Save 
                            @else <img src="https://realtyri.com/assets/img/save.png" />Unsave</font>
                            @endif
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <a href="#" data-toggle="modal" data-target="#shareByEmail">
                            <img src="https://realtyri.com/assets/img/share.png" />Share
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3"> 
                        <a href="#" data-toggle="modal" data-target="#replyByEmail">
                            <img src="https://realtyri.com/assets/img/contact.png" />Contact
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3"> 
                        <a href="#" data-toggle="modal" data-target="#reportAdModal">
                            <img src="https://realtyri.com/assets/img/report.png" />Report
                        </a>
                    </div>
                </div>
                <div align="center">
                    @if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "single-family" or $ad->type == "loft")
                    <h4>Residential Real Estate for Rent</h4>
                    @elseif($ad->type == "office" or $ad->type =="flex" or
                                $ad->type =="medical" or $ad->type =="restaurant" or $ad->type
                                =="retail" or $ad->type =="storefront" or $ad->type =="industrial"
                                or $ad->type =="warehouse" or $ad->type =="other" or $ad->type =="commercial")
                    <h4>Commercial Real Estate for Rent</h4>
                    @elseif($ad->sale_type == "Single-Family" or $ad->sale_type == "Condo" or $ad->sale_type == "Multi-Family")
                    <h4>Residential Real Estate for Sale</h4>
                    @elseif($ad->sale_type == "Commercial")
                    <h4>Commercial Real Estate for Sale</h4>
                    @elseif($ad->sale_type == "land_sale")
                    <h4>Land Real Estate for Sale</h4>
                    @endif
                </div>
    	    </div>
    <div class="row">
        @if($ad->ad_status == 'Sold')
        <div class="ribbon-wrapper-red"><div class="ribbon-red">Sold</div></div>
        @endif
        <div class="col-md-12">
            <div class="row">
    	    <hr class="divider">
    	    <div class="col-md-3 col-sm-12">
    	        <p class="header">Property Details</p>
    	    </div>
    	    <div class="col-md-9 col-sm-12">
    		@if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "single-family" or $ad->type == "loft")
            				@if($ad->hfloors == "1" )
            				<div class="col-md-6 col-sm-12 col-xs-12 property-details"><img
            src="https://realtyri.com/assets/img/hardwoods.png" />&nbsp;Hardwood Floors</div>
            				@endif @if($ad->carpet == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/carpet.png" />&nbsp;Carpeted Floors</div>
            				@endif @if($ad->tile == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/tile.png" />&nbsp;Tile Flooring</div>
            				@endif @if($ad->stainless == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/stainless.png" />&nbsp;Stainless Steel Appliances</div>
            				@endif @if($ad->granite == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/granite.png" />&nbsp;Granite Countertops</div>
            				@endif @if($ad->central == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/air.png" />&nbsp;Central Air</div>
            				@endif @if($ad->furnishedapt == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/furnished.png" />&nbsp;Furnished Apartment</div>
            				@endif @if($ad->basementstorage == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/storage.png" />&nbsp;Basement Storage</div>
            				@endif @if($ad->fireplace == "1" )
            				<div class="col-md-6"><img
            src="https://realtyri.com/assets/img/fireplace.png" />&nbsp;Fireplace</div>
            				@endif @if($ad->yard == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/yard.png" />&nbsp;Yard</div>
            				@endif @if($ad->ceiling == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/fan.png" />&nbsp;Ceiling Fan</div>
            				@endif @if($ad->gourmet == "1" )
            				<div class="col-md-6 property-details"><img
            src="https://realtyri.com/assets/img/gourmet.png" />&nbsp;Gourmet Kitchen</div>
            				@endif
            				<div class="col-md-6 property-details">
            				    &nbsp;
            				</div>
            </div>
            @elseif($ad->type == "office" or $ad->type =="flex" or
                                $ad->type =="medical" or $ad->type =="restaurant" or $ad->type
                                =="retail" or $ad->type =="storefront" or $ad->type =="industrial"
                                or $ad->type =="warehouse" or $ad->type =="other" or $ad->type =="commercial")
                                
            <div class="row description">
                        
                        @if($ad->space_available)<div class="col-sm-6 col-md-6">
						<p>
							<b>Space Available:</b> {{ number_format($ad->space_available) }} sqft
						</p>
						</div>
						@endif
						@if($ad->lease_type)<div class="col-sm-6 col-md-6">
						<p>
							<b>Lease Type:</b> {{ $ad->lease_type }}
						</p>
						</div>
						@endif
						@if($ad->year_built)<div class="col-sm-6 col-md-6">
						<p>
							<b>Year Built:</b> {{ $ad->year_built }}
						</p>
						</div>
						@endif
						@if($ad->lot_size)<div class="col-sm-6 col-md-6">
						<p>
							<b>Lot Size:</b> {{ number_format($ad->lot_size) }} sqft
						</p>
						</div>
						@endif
                                               	@if($ad->price != 0)<div class="col-sm-6 col-md-6"><p>
                                                       	<b>Monthly Rent:</b> ${{ number_format($ad->price) }}
                                               	</p>
                                               	</div>
                                                @endif
						                        @if($ad->building_size)<div class="col-sm-6 col-md-6">
                                               	<p>
                                                        <b>Building Size:</b> {{ number_format($ad->building_size) }} sqft
                                                </p>
                                                </div>
                                                @endif
						                        @if($ad->sqft_price)<div class="col-sm-6 col-md-6">
                                               	<p>
                                                       	<b>Price per sqft:</b> ${{ number_format($ad->sqft_price) }}
                                               	</p>
                                               	</div>
                                               	@endif
						@if($ad->comm_use)<div class="col-sm-6 col-md-6">
						<p>
							<b>Use:</b> {{ $ad->comm_use }}
						</p>
						</div>
						@endif
						@if($ad->building_class)<div class="col-sm-6 col-md-6">
						<p>
							<b>Building Class:</b> {{ $ad->building_class }} sqft
						</p>
						</div>
						@endif
				</div>
				</div>

                @elseif($ad->type == "pmc")
                
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
			</div>

				<legend>Apartment Complex Amenities</legend>
				@if($ad->pmcdogs == "1" )
                               		<div class="col-md-3">
						<p><img src="https://1-800.lenoxproperty.com/assets/img/dogs-small.png" />&nbsp;Dogs Allowed</p>
					</div>
                               	@endif @if($ad->pmccats == "1" )
                               		<div class="col-md-3">
						<p><img src="https://1-800.lenoxproperty.com/assets/img/cats-small.png" />&nbsp;Cats Allowed</p>
					</div>
                               	@endif @if($ad->pmcair == "1" )
                               		<div class="col-md-3">
						<p><img src="https://1-800.lenoxproperty.com/assets/img/air-small.png" />&nbsp;Air Conditioning</p>
					</div>
                               	@endif
				@if($ad->pmcbasketball == "1" )
                                       	<div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/basketball-small.png" />&nbsp;Basketball</p>
                                        </div>
                               	@endif
                                @if($ad->pmcbusiness == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/business-small.png" />&nbsp;Business Center</p>
                                        </div>
                                @endif
                                @if($ad->pmccable == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/cable-small.png" />&nbsp;Cable Ready</p>
                                        </div>
                                @endif
                                @if($ad->pmccarpeting == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/carpet-small.png" />&nbsp;Carpeting</p>
                                        </div>
                                @endif
                                @if($ad->pmcclubhouse == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/clubhouse-small.png" />&nbsp;Clubhouse</p>
                                        </div>
                                @endif
                                @if($ad->pmccontrolled == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/controlled-small.png" />&nbsp;Controlled Access</p>
                                        </div>
                                @endif
                                @if($ad->pmcdeck == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/deck-small.png" />&nbsp;Deck / Balcony</p>
                                        </div>
                                @endif
                                @if($ad->pmcelevator == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/elevator-small.png" />&nbsp;Elevator</p>
                                        </div>
                                @endif
                                @if($ad->pmcceiling == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/ceiling-small.png" />&nbsp;Ceiling Fan</p>
                                        </div>
                                @endif
                                @if($ad->pmcfireplace == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/fireplace-small.png" />&nbsp;Fireplace</p>
                                        </div>
                                @endif
                                @if($ad->pmcfitness == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/gym-small.png" />&nbsp;Fitness Center</p>
                                        </div>
                                @endif
                                @if($ad->pmcfurnished == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/furnished-small.png" />&nbsp;Furnished Units Available</p>
                                        </div>
                                @endif
                                @if($ad->pmchandicap == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/handicap-small.png" />&nbsp;Handicap Access</p>
                                        </div>
                                @endif
                                @if($ad->pmchardwood == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/hardwood-small.png" />&nbsp;Hardwood Floors</p>
                                        </div>
                                @endif
                                @if($ad->pmcinternet == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/internet-small.png" />&nbsp;High-Speed Internet</p>
                                        </div>
                                @endif
                                @if($ad->pmcroom == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Laundry Room</p>
                                        </div>
                                @endif
                                @if($ad->pmclaundrypmc == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Laundry in Unit</p>
                                        </div>
                                @endif
                                @if($ad->pmcmedia == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/media-small.png" />&nbsp;Media Center</p>
                                        </div>
                                @endif
                                @if($ad->pmcpool == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/pool-small.png" />&nbsp;Pool
                                        </div>
                                @endif
                                @if($ad->pmcspa == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/spa-small.png" />&nbsp;Spa / Hot Tub</p>
                                        </div>
                                @endif
                                @if($ad->pmcstorage == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/storage-small.png" />&nbsp;Extra Storage</p>
                                        </div>
                                @endif
                                @if($ad->pmctennis == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/tennis-small.png" />&nbsp;Tennis Court</p>
                                        </div>
                                @endif
                                @if($ad->pmcvaulted == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/vaulted-small.png" />&nbsp;Vaulted Ceilings</p>
                                        </div>
                                @endif
                                @if($ad->pmcwalk == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/walk-small.png" />&nbsp;Walk-In Closet</p>
                                        </div>
                                @endif
                                @if($ad->pmcwasher == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/washer-smaller.png" />&nbsp;Washer</p>
                                        </div>
                                @endif
                                @if($ad->pmcyard == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/yard-small.png" />&nbsp;Yard</p>
                                        </div>
                                @endif
                                @if($ad->pmcdish == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/dish-small.png" />&nbsp;Dishwasher</p>
                                        </div>
                                @endif                                @if($ad->pmcplay == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/play-small.png" />&nbsp;Playground</p>
                                        </div>
                                @endif                                @if($ad->pmcheat == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/heat-small.png" />&nbsp;Heat Included</p>
                                        </div>
                                @endif                                @if($ad->pmcwater == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/water-small.png" />&nbsp;Hot Water Included</p>
                                        </div>
                                @endif                                @if($ad->pmcelectric == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/electric-small.png" />&nbsp;Electricity Included</p>
                                        </div>
                                @endif                                @if($ad->pmcgarage == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/garage-small.png" />&nbsp;Garage Parking</p>
                                        </div>
                                @endif                                @if($ad->pmcassigned == "1" )
                                        <div class="col-md-3">
                                                <p><img src="https://1-800.lenoxproperty.com/assets/img/assigned-small.png" />&nbsp;Assigned Parking</p>
                                        </div>
                                @endif
                @elseif($ad->sale_type == "Single-Family" or $ad->sale_type == "Condo")
                    <div class="row">
                    @if($ad->sale_type)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Type:</b> {{ ucwords($ad->sale_type) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->condo_style)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Style:</b> {{ ucwords($ad->condo_style) }}
                    				</p>
                    				</div>
                    				@endif

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

                    @if($ad->taxes)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Taxes: </b> ${{ $ad->taxes }}
                    				</p>
                    				</div>
                    				@endif @if($ad->attached_bath)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Full Baths:</b> {{ $ad->attached_bath }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->attached_bath)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Tax Year:</b> {{ $ad->tax_year }}
                    				</p>
                    				</div>
                    				@endif @if($ad->half_bath)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Half Baths:</b> {{ $ad->half_bath }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->assessment)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Assessment:</b> ${{ $ad->assessment }}
                    				</p>
                    				</div>
                    				@endif @if($ad->lot_size)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Lot Size:</b> {{ number_format($ad->lot_size) }} SQFT
                    				</p>
                    				</div>
                    				@endif

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
                    
                    @if($ad->sale_type == "Condo")
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p><b>Pets Allowed:</b>
                            @if($ad->pets_nopets) No Pets, @endif
                            @if($ad->pets_cats) Cats, @endif
                            @if($ad->pets_large) Large (25 lbs+), @endif
                            @if($ad->pets_norestrict) No Restrictions, @endif
                            @if($ad->pets_negotiable) Negotiable, @endif
                            @if($ad->pets_small) Small Dogs (under 25 lbs) @endif
                        </div>
                    </div>
                    @endif

                    @if($ad->commission)
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                        <p><b>Commission Offered:</b>{{ $ad->commission }}
                        </div>
                    </div>
                    @endif
                    
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

                    
                    @if($ad->hw_fuel)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Hot Water Fuel:</b> {{ ucwords($ad->hw_fuel) }}
                    				</p>
                    				</div>
                    				@endif
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

                    @if($ad->num_garage)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Number of Garage Spaces:</b> {{ ucwords($ad->num_garage) }}
                    				</p>
                    				</div>
                    				@endif

                    
                    @if($ad->garage_type)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Garage Type:</b> {{ ucwords($ad->garage_type) }}
                    				</p>
                    				</div>
                    				@endif
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
                    
                    @if($ad->living_space)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Total Living Space:</b> {{ number_format($ad->living_space) }} sqft
                    				</p>
                    				</div>
                    				@endif
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Number of Levels:</b> {{ $ad->num_levels }}
                    				</p>
                    				</div>

                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Finished Floors 1:</b> @if($ad->ceramic) Ceramic, @endif @if($ad->hardwood) Hardwood @endif @if($ad->laminate), Laminate @endif @if($ad->marble), Marble @endif @if($ad->other), Other @endif @if($ad->parquet) 
                , Parquet @endif @if($ad->particle), Particle @endif @if($ad->pine), Pine @endif @if($ad->plywood), Plywood @endif @if($ad->vinyl), Vinyl @endif @if($ad->wall), Wall-to-Wall Carpeting @endif
                    				</p>
                    				</div>
                    </div>
                    
                    <div align="center"><legend>Included Appliances</legend></div>
                    
                    <div class="row" style="padding: 5px";>
                    @if($ad->owned == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Owned</div> @endif
                    @if($ad->rental == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Rented</div> @endif
                    @if($ad->grill == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/grill.png" height="16px" width="16px" />&nbsp;Barbecue Grill</div> @endif
                    @if($ad->cable == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/cable.png" height="16px" width="16px" />&nbsp;Cable TV</div> @endif
                    @if($ad->carpeting == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/carpet.png" height="16px" width="16px" />&nbsp;Carpeting</div> @endif
                    @if($ad->ceilingfan == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Ceiling Fan</div> @endif
                    @if($ad->vacuum == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/vacuum.png" height="16px" width="16px" />&nbsp;Central Vacuum</div> @endif
                    @if($ad->coal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/coal.png" height="16px" width="16px" />&nbsp;Coal Stove</div> @endif
                    @if($ad->compressor == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/compressor.png" height="16px" width="16px" />&nbsp;Compressor</div> @endif
                    @if($ad->dish == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dishwasher.png" height="16px" width="16px" />&nbsp;Dishwasher</div> @endif
                    @if($ad->dryer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dryer.png" height="16px" width="16px" />&nbsp;Dryer</div> @endif
                    @if($ad->elevator == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/elevator.png" height="16px" width="16px" />&nbsp;Elevator / Freight Elevator</div> @endif
                    @if($ad->exhaust == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Exhaust Fan</div> @endif
                    @if($ad->furniture == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/furniture.png" height="16px" width="16px" />&nbsp;Furniture</div> @endif
                    @if($ad->disposal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/garbage.png" height="16px" width="16px" />&nbsp;Garbage Disposal</div> @endif
                    @if($ad->hood == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hood.png" height="16px" width="16px" />&nbsp;Hood</div> @endif
                    @if($ad->hottub == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hot.png" height="16px" width="16px" />&nbsp;Hot Tub</div> @endif
                    @if($ad->intercom == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/intercom.png" height="16px" width="16px" />&nbsp;Intercom</div> @endif
                    @if($ad->microwave == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/microwave.png" height="16px" width="16px" />&nbsp;Microwave</div> @endif
                    @if($ad->oven == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/oven.png" height="16px" width="16px" />&nbsp;Oven / Range</div> @endif
                    @if($ad->pellet == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/pellet.png" height="16px" width="16px" />&nbsp;Pellet Stove</div> @endif
                    @if($ad->fridge == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fridge.png" height="16px" width="16px" />&nbsp;Refrigerator</div> @endif
                    @if($ad->sat == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dish.png" height="16px" width="16px" />&nbsp;Satellite Dish / TV Antenna</div> @endif
                    @if($ad->sauna == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/sauna.png" height="16px" width="16px" />&nbsp;Sauna</div> @endif
                    @if($ad->trash == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/trash.png" height="16px" width="16px" />&nbsp;Trash Compactor</div> @endif
                    @if($ad->washer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/washer.png" height="16px" width="16px" />&nbsp;Washer</div> @endif
                    @if($ad->woodstove == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/wood.png" height="16px" width="16px" />&nbsp;Wood Stove</div> @endif
                    <div>&nbsp;</div>
                    </div>
                    </div>
                @elseif($ad->sale_type == "Multi-Family")

                    <div class="row">
                    @if($ad->multi_type)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Type:</b> {{ ucwords($ad->multi_type) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->multi_style)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Style:</b> {{ ucwords($ad->multi_style) }}
                    				</p>
                    				</div>
                    				@endif

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

                    @if($ad->assessment)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Assessment:</b> ${{ number_format($ad->assessment) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->lot_size)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Lot Size:</b> {{ number_format($ad->lot_size) }} sqft ({{ sprintf('%0.2f', ($ad->lot_size)/43560) }} Acres)
                    				</p>
                    				</div>
                    				@endif

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
                    
                    <?php
                        $unit_array = array ();
                                        if($ad->multi_beds != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds2 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds3 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds4 != "") {
				                            $unit_array [] = 1;
                                        }
                    ?>
                    
                    @if($ad->multi_beds)
                    <legend>Multi-Family Unit Information - {{ array_sum($unit_array) }} Units</legend>
                    
                    			<table class="table table-bordered">
                    				<tr style="background: #ececec";>
                    					<td><strong>Unit #</strong></td>
                    					<td><strong>Beds</strong></td>
                    					<td><strong>Full Baths</strong></td>
                    					<td><strong>Half Baths</strong></td>
                    					<td><strong>Square Footage</strong></td>
                    					<td><strong>Monthly Rent</strong></td>
                    					<td><strong>Lease</strong></td>
                    				</tr>
                    
                                    @if($ad->multi_beds)
                    				<tr>
                                                            <td>1</td>
                    					@if($ad->multi_beds and $ad->multi_beds != "0.5")
                    					<td>{{$ad->multi_beds}}</td>
                                                            @else
                                                            <td>Studio</td>
                                                            @endif 
                                                            @if($ad->multi_baths)
                    					<td>{{$ad->multi_baths}}</td>
                                                            @endif
                                                            @if($ad->multi_half)
                    					<td>{{$ad->multi_half}}</td>
                    					@else
                    					<td>0</td>
                                                            @endif 
                                                            @if($ad->multi_sqft)
                    					<td>{{number_format($ad->multi_sqft)}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif
                                                            @if($ad->multi_rent)
                    					<td>${{number_format($ad->multi_rent)}}</td>
                                                            @endif
                                                            @if($ad->multi_lease)
                    					<td>{{ucwords($ad->multi_lease)}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif
                    				</tr>
                    				@endif

                                    @if($ad->multi_beds2 and $ad->multi_beds2 != "0.5")
                    				<tr>
                                                            <td>2</td>
                    					@if($ad->multi_beds2 and $ad->multi_beds2 != "0.5")
                    					<td>{{$ad->multi_beds2}}</td>
                                                            @else
                                                            <td>Studio</td>
                                                            @endif 
                                                            @if($ad->multi_baths2)
                    					<td>{{$ad->multi_baths2}}</td>
                                                            @endif
                                                            @if($ad->multi_half2)
                    					<td>{{$ad->multi_half2}}</td>
                    					@else
                    					<td>0</td>
                                                            @endif 
                                                            @if($ad->multi_sqft2)
                    					<td>{{number_format($ad->multi_sqft2)}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif
                                                            @if($ad->multi_rent2)
                    					<td>${{number_format($ad->multi_rent2)}}</td>
                                                            @endif
                                                            @if($ad->multi_lease2)
                    					<td>{{ucwords($ad->multi_lease2)}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif
                    				</tr>
                    				@endif
                                    
                                    @if($ad->multi_beds3 and $ad->multi_beds3 != "0.5")
                    				<tr>
                                                            <td>3</td>
                    					@if($ad->multi_beds3 and $ad->multi_beds3 != "0.5")
                    					<td>{{$ad->multi_beds3}}</td>
                                                            @else
                                                            <td>Studio</td>
                                                            @endif 
                                                            @if($ad->multi_baths3)
                    					<td>{{$ad->multi_baths3}}</td>
                                                            @endif
                                                            @if($ad->multi_half3)
                    					<td>{{$ad->multi_half3}}</td>
                    					@else
                    					<td>0</td>
                                                            @endif 
                                                            @if($ad->multi_sqft3)
                    					<td>{{number_format($ad->multi_sqft3)}}</td>
                                                            @endif
                                                            @if($ad->multi_rent3)
                    					<td>${{number_format($ad->multi_rent3)}}</td>
                                                            @endif
                                                            @if($ad->multi_lease3)
                    					<td>{{ucwords($ad->multi_lease3)}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif
                    				</tr>
                    				@endif
                    				
                    				@if($ad->multi_beds4 and $ad->multi_beds4 != "0.5")
                    				<tr>
                                                            <td>4</td>
                    					@if($ad->multi_beds4 and $ad->multi_beds4 != "0.5")
                    					<td>{{$ad->multi_beds4}}</td>
                                                            @else
                                                            <td>Studio</td>
                                                            @endif 
                                                            @if($ad->multi_baths4)
                    					<td>{{$ad->multi_baths4}}</td>
                                                            @endif
                                                            @if($ad->multi_half4)
                    					<td>{{$ad->multi_half4}}</td>
                    					@else
                    					<td>&nbsp;</td>
                                                            @endif 
                                                            @if($ad->multi_sqft4)
                    					<td>{{number_format($ad->multi_sqft4)}}</td>
                                                            @endif
                                                            @if($ad->multi_rent4)
                    					<td>${{number_format($ad->multi_rent4)}}</td>
                                                            @endif
                                                            @if($ad->multi_lease4)
                    					<td>{{ucwords($ad->multi_lease4)}}</td>
                                                            @endif
                    				</tr>
                    				@endif

                    				<?php 
                    				    $bed_array = array ();
                                        if(isset($ad->multi_beds)) {
				                            $bed_array [] = $ad->multi_beds;
                                        }
                                        if(isset($ad->multi_beds2)) {
				                            $bed_array [] = $ad->multi_beds2;
                                        }
                                        if(isset($ad->multi_beds3)) {
				                            $bed_array [] = $ad->multi_beds3;
                                        }
                                        if(isset($ad->multi_beds4)) {
				                            $bed_array [] = $ad->multi_beds4;
                                        }
                                        
                                        $bath_array = array ();
                                        if(isset($ad->multi_baths)) {
				                            $bath_array [] = $ad->multi_baths;
                                        }
                                        if(isset($ad->multi_baths2)) {
				                            $bath_array [] = $ad->multi_baths2;
                                        }
                                        if(isset($ad->multi_baths3)) {
				                            $bath_array [] = $ad->multi_baths3;
                                        }
                                        if(isset($ad->multi_baths4)) {
				                            $bath_array [] = $ad->multi_baths4;
                                        }
                                        
                                        $half_array = array ();
                                        if(isset($ad->multi_half)) {
				                            $half_array [] = $ad->multi_half;
                                        }
                                        if(isset($ad->multi_half2)) {
				                            $half_array [] = $ad->multi_half2;
                                        }
                                        if(isset($ad->multi_half3)) {
				                            $half_array [] = $ad->multi_half3;
                                        }
                                        if(isset($ad->multi_half4)) {
				                            $half_array [] = $ad->multi_half4;
                                        }
                                        
                                        $sqft_array = array ();
                                        if(isset($ad->multi_sqft)) {
				                            $sqft_array [] = $ad->multi_sqft;
                                        }
                                        if(isset($ad->multi_sqft2)) {
				                            $sqft_array [] = $ad->multi_sqft2;
                                        }
                                        if(isset($ad->multi_sqft3)) {
				                            $sqft_array [] = $ad->multi_sqft3;
                                        }
                                        if(isset($ad->multi_sqft4)) {
				                            $sqft_array [] = $ad->multi_sqft4;
                                        }
                                        
                                        $rent_array = array ();
                                        if(isset($ad->multi_rent)) {
				                            $rent_array [] = $ad->multi_rent;
                                        }
                                        if(isset($ad->multi_rent2)) {
				                            $rent_array [] = $ad->multi_rent2;
                                        }
                                        if(isset($ad->multi_rent3)) {
				                            $rent_array [] = $ad->multi_rent3;
                                        }
                                        if(isset($ad->multi_rent4)) {
				                            $rent_array [] = $ad->multi_rent4;
                                        }
                    				?>
                    				
                    				<tr style="background: #ececec";>
                    					<td><strong>Totals</strong></td>
                    					<td><strong>{{ array_sum($bed_array) }}</strong></td>
                    					<td><strong>{{ array_sum($bath_array) }}</strong></td>
                    					<td><strong>{{ array_sum($half_array) }}</strong></td>
                    					<td><strong>{{ number_format(array_sum($sqft_array)) }}</strong></td>
                    					<td><strong>${{ number_format(array_sum($rent_array)) }}</strong></td>
                    					<td><strong>&nbsp;</strong></td>
                    				</tr>

                    			</table>
                        @endif
                        
                    @if($ad->multi_units)
                    <legend>Multi-Family Information</legend>
                    @endif
                    
                    <div class="row">
                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->multi_units)
                    		<p>
                    			<b>Number of Units:</b> {{ $ad->multi_units }}
                    		</p>
                    		@endif
                    	</div>
                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->square_unit_space)
                    		<p>
                    			<b>Gross Square Footage:</b> {{ number_format($ad->square_unit_space) }} sqft
                    		</p>
                    		@endif
                    	</div>

                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->pandl)
                    		<p>
                    			<b>P and L Statement:</b> {{ ucwords($ad->pandl) }}
                    		</p>
                    		@endif
                    	</div>

                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->owner_exp)
                    		<p>
                    			<b>Owner Annual Expenses:</b> ${{ number_format($ad->owner_exp) }}
                    		</p>
                    		@endif
                    	</div>
                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->owner_inc)
                    		<p>
                    			<b>Owner Annual Income:</b> ${{ number_format($ad->owner_inc) }}
                    		</p>
                    		@ENDif
                    	</div>

                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->num_heat)
                    		<p>
                    			<b>Number of Heating Systems:</b> {{ $ad->num_heat }}
                    		</p>
                    		@endif
                    	</div>
                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->heat_paid)
                    		<p>
                    			<b>Heat Paid By:</b> {{ $ad->heat_paid }}
                    		</p>
                    		@endif
                    	</div>

                    	<div class="col-sm-6 col-md-6">
                    	    @if($ad->mf_laundry)
                    		<p>
                    			<b>Laundry:</b> {{ $ad->mf_laundry }}
                    		</p>
                    		@endif
                    	</div>
                    </div>
                    
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

                    @if($ad->hw_fuel)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Hot Water Fuel:</b> {{ ucwords($ad->hw_fuel) }}
                    				</p>
                    				</div>
                    				@endif
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

                    @if($ad->num_garage)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Number of Garage Spaces:</b> {{ ucwords($ad->num_garage) }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->garage_type)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Garage Type:</b> {{ ucwords($ad->garage_type) }}
                    				</p>
                    				</div>
                    				@endif
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
                    
                    @if($ad->living_space)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Total Living Space:</b> {{ number_format($ad->living_space) }} sqft
                    				</p>
                    				</div>
                    				@endif

                    
                    @if($ad->num_levels)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Number of Levels:</b> {{ $ad->num_levels }}
                    				</p>
                    				</div>
                    				@endif
                    				
                    				    <div class="col-sm-10 col-md-10">
                                            <p>
                                            	<b>Electric:</b> @if($ad->elec_none) None @endif
                                            	                @if($ad->elec_gen) Generator-Whole House, @endif
                                            	                @if($ad->elec_fee) In-Fee, @endif
                                            	                @if($ad->elec_under) Underground, @endif
                                            	                @if($ad->elec_upgrade) Upgradeable @endif
                                            </p>
                                        </div>
                    				    <div class="col-sm-10 col-md-10">
                            				<p>
                            					<b>Finished Floors:</b> @if($ad->ceramic) Ceramic @endif @if($ad->hardwood)  Hardwood @endif @if($ad->laminate)  Laminate @endif @if($ad->marble)  Marble @endif @if($ad->other)  Other @endif @if($ad->parquet) 
                             Parquet @endif @if($ad->particle)  Particle @endif @if($ad->pine)  Pine @endif @if($ad->plywood)  Plywood @endif @if($ad->vinyl)  Vinyl @endif @if($ad->wall)  Wall-to-Wall Carpeting @endif
                            				</p>
                            			</div>

                    </div>
                    			
                    <div align="center"><legend>Included Appliances</legend></div>
                    
                    <div class="row" style="padding: 5px";>
                    @if($ad->owned == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Owned</div> @endif
                    @if($ad->rental == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Rented</div> @endif
                    @if($ad->grill == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/grill.png" height="16px" width="16px" />&nbsp;Barbecue Grill</div> @endif
                    @if($ad->cable == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/cable.png" height="16px" width="16px" />&nbsp;Cable TV</div> @endif
                    @if($ad->carpeting == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/carpet.png" height="16px" width="16px" />&nbsp;Carpeting</div> @endif
                    @if($ad->ceilingfan == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Ceiling Fan</div> @endif
                    @if($ad->vacuum == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/vacuum.png" height="16px" width="16px" />&nbsp;Central Vacuum</div> @endif
                    @if($ad->coal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/coal.png" height="16px" width="16px" />&nbsp;Coal Stove</div> @endif
                    @if($ad->compressor == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/compressor.png" height="16px" width="16px" />&nbsp;Compressor</div> @endif
                    @if($ad->dish == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dishwasher.png" height="16px" width="16px" />&nbsp;Dishwasher</div> @endif
                    @if($ad->dryer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dryer.png" height="16px" width="16px" />&nbsp;Dryer</div> @endif
                    @if($ad->elevator == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/elevator.png" height="16px" width="16px" />&nbsp;Elevator / Freight Elevator</div> @endif
                    @if($ad->exhaust == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Exhaust Fan</div> @endif
                    @if($ad->furniture == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/furniture.png" height="16px" width="16px" />&nbsp;Furniture</div> @endif
                    @if($ad->disposal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/garbage.png" height="16px" width="16px" />&nbsp;Garbage Disposal</div> @endif
                    @if($ad->hood == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hood.png" height="16px" width="16px" />&nbsp;Hood</div> @endif
                    @if($ad->hottub == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hot.png" height="16px" width="16px" />&nbsp;Hot Tub</div> @endif
                    @if($ad->intercom == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/intercom.png" height="16px" width="16px" />&nbsp;Intercom</div> @endif
                    @if($ad->microwave == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/microwave.png" height="16px" width="16px" />&nbsp;Microwave</div> @endif
                    @if($ad->oven == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/oven.png" height="16px" width="16px" />&nbsp;Oven / Range</div> @endif
                    @if($ad->pellet == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/pellet.png" height="16px" width="16px" />&nbsp;Pellet Stove</div> @endif
                    @if($ad->fridge == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fridge.png" height="16px" width="16px" />&nbsp;Refrigerator</div> @endif
                    @if($ad->sat == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dish.png" height="16px" width="16px" />&nbsp;Satellite Dish / TV Antenna</div> @endif
                    @if($ad->sauna == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/sauna.png" height="16px" width="16px" />&nbsp;Sauna</div> @endif
                    @if($ad->trash == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/trash.png" height="16px" width="16px" />&nbsp;Trash Compactor</div> @endif
                    @if($ad->washer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/washer.png" height="16px" width="16px" />&nbsp;Washer</div> @endif
                    @if($ad->woodstove == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/wood.png" height="16px" width="16px" />&nbsp;Wood Stove</div> @endif
                    <div>&nbsp;</div>
                    </div>
                    </div>

                @elseif($ad->sale_type == "Condo")

                    <div class="row">
                    @if($ad->condo_fee)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>HOA Fee:</b> ${{ number_format($ad->condo_fee) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->assoc_fee)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>HOA Fee Frequency:</b> {{ ucwords($ad->assoc_fee) }}
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
                    					<b>Half Baths:</b> {{ ($ad->half_bath)*2 }}
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
                    					<b>Lot Size:</b> {{ number_format($ad->lot_size) }} sqft
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
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					&nbsp;
                    				</p>
                    </div>
                    @endif
                    </div>
                    
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
                    					<b>Total Living Space:</b> {{ number_format($ad->living_space) }} sqft
                    				</p>
                    				</div>
                    				@endif
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Finished Floors:</b> @if($ad->ceramic) Ceramic @endif @if($ad->hardwood)  Hardwood @endif @if($ad->laminate)  Laminate @endif @if($ad->marble)  Marble @endif @if($ad->other)  Other @endif @if($ad->parquet) 
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
                    
                    <div class="row" style="padding: 5px";>
                    @if($ad->owned == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Owned</div> @endif
                    @if($ad->rental == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/alarm.png" height="16px" width="16px" />&nbsp;Alarm Rented</div> @endif
                    @if($ad->grill == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/grill.png" height="16px" width="16px" />&nbsp;Barbecue Grill</div> @endif
                    @if($ad->cable == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/cable.png" height="16px" width="16px" />&nbsp;Cable TV</div> @endif
                    @if($ad->carpeting == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/carpet.png" height="16px" width="16px" />&nbsp;Carpeting</div> @endif
                    @if($ad->ceilingfan == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Ceiling Fan</div> @endif
                    @if($ad->vacuum == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/vacuum.png" height="16px" width="16px" />&nbsp;Central Vacuum</div> @endif
                    @if($ad->coal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/coal.png" height="16px" width="16px" />&nbsp;Coal Stove</div> @endif
                    @if($ad->compressor == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/compressor.png" height="16px" width="16px" />&nbsp;Compressor</div> @endif
                    @if($ad->dish == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dishwasher.png" height="16px" width="16px" />&nbsp;Dishwasher</div> @endif
                    @if($ad->dryer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dryer.png" height="16px" width="16px" />&nbsp;Dryer</div> @endif
                    @if($ad->elevator == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/elevator.png" height="16px" width="16px" />&nbsp;Elevator / Freight Elevator</div> @endif
                    @if($ad->exhaust == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fan.png" height="16px" width="16px" />&nbsp;Exhaust Fan</div> @endif
                    @if($ad->furniture == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/furniture.png" height="16px" width="16px" />&nbsp;Furniture</div> @endif
                    @if($ad->disposal == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/garbage.png" height="16px" width="16px" />&nbsp;Garbage Disposal</div> @endif
                    @if($ad->hood == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hood.png" height="16px" width="16px" />&nbsp;Hood</div> @endif
                    @if($ad->hottub == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/hot.png" height="16px" width="16px" />&nbsp;Hot Tub</div> @endif
                    @if($ad->intercom == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/intercom.png" height="16px" width="16px" />&nbsp;Intercom</div> @endif
                    @if($ad->microwave == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/microwave.png" height="16px" width="16px" />&nbsp;Microwave</div> @endif
                    @if($ad->oven == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/oven.png" height="16px" width="16px" />&nbsp;Oven / Range</div> @endif
                    @if($ad->pellet == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/pellet.png" height="16px" width="16px" />&nbsp;Pellet Stove</div> @endif
                    @if($ad->fridge == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/fridge.png" height="16px" width="16px" />&nbsp;Refrigerator</div> @endif
                    @if($ad->sat == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/dish.png" height="16px" width="16px" />&nbsp;Satellite Dish / TV Antenna</div> @endif
                    @if($ad->sauna == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/sauna.png" height="16px" width="16px" />&nbsp;Sauna</div> @endif
                    @if($ad->trash == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/trash.png" height="16px" width="16px" />&nbsp;Trash Compactor</div> @endif
                    @if($ad->washer == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/washer.png" height="16px" width="16px" />&nbsp;Washer</div> @endif
                    @if($ad->woodstove == "1") <div class="col-md-6"><img src="https://1-800.lenoxproperty.com/assets/img/wood.png" height="16px" width="16px" />&nbsp;Wood Stove</div> @endif
                    <div>&nbsp;</div>
                    </div>
                    </div>
                    
                @elseif($ad->category == "land_sale")

                    <div class="row">
                            @if($ad->taxes)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Taxes:</b> ${{ number_format($ad->taxes) }}
                            				</p>
                            				</div>
                            				@endif @if($ad->tax_year)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Tax Year:</b> {{ $ad->tax_year }}
                            				</p>
                            				</div>
                            				@endif

                            @if($ad->assessment)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Assessment:</b> ${{ number_format($ad->assessment) }}
                            				</p>
                            				</div>
                            				@endif @if($ad->lot_sqft)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Lot Sq Footage:</b> {{ number_format($ad->lot_sqft) }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->lot_acres)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Lot Acres:</b> {{ number_format($ad->lot_acres) }}
                            				</p>
                            				</div>
                            				@endif @if($ad->lot_frontage)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Lot Frontage:</b> {{ number_format($ad->lot_frontage) }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->approved_lots)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b># Approved Lots:</b> {{ $ad->approved_lots }}
                            				</p>
                            				</div>
                            				@endif @if($ad->land_status)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Land Status:</b> {{ ucwords($ad->land_status) }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->approvals_needed)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Approval(s) Needed:</b> {{ $ad->approvals_needed }}
                            				</p>
                            				</div>
                            				@endif @if($ad->prop_zoning)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Property Zoning:</b> {{ ucwords($ad->prop_zoning) }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->proposed_use)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Proposed Use:</b> {{ $ad->proposed_use }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->road)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Road:</b> {{ ucwords($ad->road) }}
                            				</p>
                            				</div>
                            				@endif @if($ad->water)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Water Supply:</b> {{ ucwords($ad->water) }}
                            				</p>
                            				</div>
                            				@endif
        
                            @if($ad->topography)<div class="col-sm-6 col-md-6">
                            				<p>
                            					<b>Topography:</b> {{ ucwords($ad->topography) }}
                            				</p>
                            				</div>
                            				@endif
                    </div>
                    </div>
                    
                @elseif($ad->sale_type == "Commercial")

                    <div class="row">
                    @if($ad->comm_type)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Property Type:</b> {{ ucwords($ad->comm_type) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->comm_sub)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Sub Type:</b> {{ ucwords($ad->comm_sub) }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->building_size)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Building Size:</b> {{ number_format($ad->building_size) }}
                    				</p>
                    				</div>
                    				@endif @if($ad->lot_size)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Lot Size:</b> {{ number_format($ad->lot_size) }} sqft
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->year_built)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Year Built:</b> {{ $ad->year_built }}
                    				</p>
                    				</div>
                    				@endif @if($ad->total_units)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Total Number of Units:</b> {{ $ad->total_units }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->stories)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Number of Stories: </b> {{ $ad->stories }}
                    				</p>
                    				</div>
                    				@endif @if($ad->tenancy)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Tenancy:</b> {{ ucwords($ad->tenancy) }}
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->opercentage)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Occupancy:</b> {{ $ad->opercentage }}%
                    				</p>
                    				</div>
                    				@endif @if($ad->caprate)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Cap Rate:</b> {{ $ad->caprate }}%
                    				</p>
                    				</div>
                    				@endif

                    @if($ad->comm_use)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Property Use:</b> {{ $ad->comm_use }}
                    				</p>
                    				</div>
                    				@endif @if($ad->building_class)
                    				<div class="col-sm-6 col-md-6">
                    				<p>
                    					<b>Building Class:</b> {{ $ad->building_class }}
                    				</p>
                    				</div>
                    				@endif

                    </div>
                    </div>
                    
                    @if($ad->comm_type == "Multi-Family")
                    
                    <?php
                        $unit_array = array ();
                                        if($ad->multi_beds != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds2 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds3 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds4 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds5 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds6 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds7 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds8 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds9 != "") {
				                            $unit_array [] = 1;
                                        }
                                        if($ad->multi_beds10 != "") {
				                            $unit_array [] = 1;
                                        }
                    ?>
                    
                    <div class="col-md-3">
            	        <p class="header">Unit Information</p>
            	    </div>
            	    <div class="col-md-9">
            	        
            	        
            	           
            	        <table class="table table-bordered">
                    				<tr style="background: #ececec";>
                    					<td><strong>Unit Type</strong></td>
                    					<td><strong># Units</strong></td>
                    					<td><strong>Total SQFT</strong></td>
                    					<td><strong>Total Rent</strong></td>
                    				</tr>
                                    
                                    @if($ad->mf_studiou)
                    				<tr>
                                        <td>Studio</td>
                    					<td>{{ $ad->mf_studiou }}</td>
                                        <td>{{ $ad->mf_studios }}</td>
                    					<td>${{ $ad->mf_studior }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->mf_oneu)
                    				<tr>
                                        <td>1 Bed</td>
                    					<td>{{ $ad->mf_oneu }}</td>
                                        <td>{{ $ad->mf_ones }}</td>
                    					<td>${{ $ad->mf_oner }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->mf_twou)
                    				<tr>
                                        <td>2 Beds</td>
                    					<td>{{ $ad->mf_twou }}</td>
                                        <td>{{ $ad->mf_twos }}</td>
                    					<td>${{ $ad->mf_twor }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->mf_threeu)
                    				<tr>
                                        <td>3 Beds</td>
                    					<td>{{ $ad->mf_threeu }}</td>
                                        <td>{{ $ad->mf_threes }}</td>
                    					<td>${{ $ad->mf_threer }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->mf_fouru)
                    				<tr>
                                        <td>4 Beds</td>
                    					<td>{{ $ad->mf_fouru }}</td>
                                        <td>{{ $ad->mf_fours }}</td>
                    					<td>${{ $ad->mf_fourr }}</td>
                    				</tr>
                    				@endif
                    				
                    				<tr style="background: #ececec";>
                    					<td><strong>Totals</strong></td>
                    					<td><strong>{{ ((int)$ad->mf_studiou+(int)$ad->mf_oneu+(int)$ad->mf_twou+(int)$ad->mf_threeu+(int)$ad->mf_fouru) }}</strong></td>
                    					<td><strong>{{ ((int)$ad->mf_studios+(int)$ad->mf_ones+(int)$ad->mf_twos+(int)$ad->mf_threes+(int)$ad->mf_fours) }}</strong></td>
                    					<td><strong>${{ ((int)$ad->mf_studior+(int)$ad->mf_oner+(int)$ad->mf_twor+(int)$ad->mf_threer+(int)$ad->mf_fourr) }}</strong></td>
                    				</tr>
                    		</table>
                    	</div>
                    @endif
                    
                    @if($ad->comm_type == "Mixed Use")
                    <div class="col-md-3">
            	        <p class="header">Unit Information</p>
            	    </div>
            	    <div class="col-md-9">
            	           
            	        <table class="table table-bordered">
                    				<tr style="background: #ececec";>
                    					<td><strong>Unit</strong></td>
                    					<td><strong># Units</strong></td>
                    					<td><strong>Total SQFT</strong></td>
                    					<td><strong>Total Rent</strong></td>
                    				</tr>
                                    
                                    @if($ad->res_units)
                    				<tr>
                                        <td>Residential</td>
                    					<td>{{ $ad->res_units }}</td>
                                        <td>{{ $ad->res_sqft }}</td>
                    					<td>${{ $ad->res_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->flex_units)
                    				<tr>
                                        <td>Flex</td>
                    					<td>{{ $ad->flex_units }}</td>
                                        <td>{{ $ad->flex_sqft }}</td>
                    					<td>${{ $ad->flex_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->industrial_units)
                    				<tr>
                                        <td>Industrial</td>
                    					<td>{{ $ad->industrial_units }}</td>
                                        <td>{{ $ad->industrial_sqft }}</td>
                    					<td>${{ $ad->industrial_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->medical_units)
                    				<tr>
                                        <td>Medical</td>
                    					<td>{{ $ad->medical_units }}</td>
                                        <td>{{ $ad->medical_sqft }}</td>
                    					<td>${{ $ad->medical_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->office_units)
                    				<tr>
                                        <td>Office</td>
                    					<td>{{ $ad->office_units }}</td>
                                        <td>{{ $ad->office_sqft }}</td>
                    					<td>${{ $ad->office_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->other_units)
                    				<tr>
                                        <td>Other</td>
                    					<td>{{ $ad->other_units }}</td>
                                        <td>{{ $ad->other_sqft }}</td>
                    					<td>${{ $ad->other_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->restaurant_units)
                    				<tr>
                                        <td>Restaurant</td>
                    					<td>{{ $ad->restaurant_units }}</td>
                                        <td>{{ $ad->restaurant_sqft }}</td>
                    					<td>${{ $ad->restaurant_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->retail_units)
                    				<tr>
                                        <td>Retail</td>
                    					<td>{{ $ad->retail_units }}</td>
                                        <td>{{ $ad->retail_sqft }}</td>
                    					<td>${{ $ad->retail_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->storefront_units)
                    				<tr>
                                        <td>Storefront</td>
                    					<td>{{ $ad->storefront_units }}</td>
                                        <td>{{ $ad->storefront_sqft }}</td>
                    					<td>${{ $ad->storefront_rent }}</td>
                    				</tr>
                    				@endif
                    				
                    				@if($ad->warehouse_units)
                    				<tr>
                                        <td>Warehouse</td>
                    					<td>{{ $ad->warehouse_units }}</td>
                                        <td>{{ $ad->warehouse_sqft }}</td>
                    					<td>${{ $ad->warehouse_rent }}</td>
                    				</tr>
                    				@endif

                    				<tr style="background: #ececec";>
                    					<td><strong>Totals</strong></td>
                    					<td><strong>{{ ((int)$ad->res_units+(int)$ad->flex_units+(int)$ad->industrial_units+(int)$ad->medical_units+(int)$ad->office_units+
                    					                (int)$ad->other_units+(int)$ad->retail_units+(int)$ad->flex_units+(int)$ad->storefront_units+ (int)$ad->warehouse_units) }}</strong></td>
                    					<td><strong>{{ number_format(((int)$ad->res_sqft+(int)$ad->flex_sqft+(int)$ad->industrial_sqft+(int)$ad->medical_sqft+(int)$ad->office_sqft+
                    					                (int)$ad->other_sqft+(int)$ad->retail_sqft+(int)$ad->flex_sqft+(int)$ad->storefront_sqft+ (int)$ad->warehouse_sqft)) }}</strong></td>
                    				    <td><strong>${{ number_format(((int)$ad->res_rent+(int)$ad->flex_rent+(int)$ad->industrial_rent+(int)$ad->medical_rent+(int)$ad->office_rent+
                    					                (int)$ad->other_rent+(int)$ad->retail_rent+(int)$ad->flex_rent+(int)$ad->storefront_rent+ (int)$ad->warehouse_rent)) }}</strong></td>
                    				</tr>
                    		</table>
                    	</div>
                    @endif

                    <hr class="divider">
                    <div class="col-md-3">
                        <p class="header">Commercial Property Features</p>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                    @if($ad->pf1)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf1) }}
                    				</li>
                    				</div>
                    				@endif @if($ad->pf2)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf2) }}
                    				</li>
                    				</div>
                    				@endif
                    </div>
                    
                    <div class="row">
                    @if($ad->pf3)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf3) }}
                    				</li>
                    				</div>
                    				@endif @if($ad->pf4)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf4) }}
                    				</li>
                    				</div>
                    				@endif
                    </div>
                    
                    <div class="row">
                    @if($ad->pf5)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf5) }}
                    				</li>
                    				</div>
                    				@endif @if($ad->pf6)
                    				<div class="col-sm-6 col-md-6">
                    				<li>
                    					{{ ucwords($ad->pf6) }}
                    				</li>
                    				</div>
                    				@endif
                    </div>
                    </div>
        		@endif
            <hr class="divider">
            
            <!-- PDF Documents -->
            @if($ad->company_pdf)
            <div class="col-md-3">
                <p class="header">Property Documents</p>
            </div>
            <div class="col-md-9">
                @if($ad->company_pdf)
                <div class="col-md-3">
                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf }}" target="_blank" >
                        <img src="https://1-800.lenoxproperty.com/assets/img/pdf-icon.png" width="40px" / >
                        <p>{{ $ad->pdf_title }}</p>
                    </a>
                </div>
                @endif
                @if($ad->company_pdf2)
                <div class="col-md-3">
                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf2 }}" target="_blank" >
                        <img src="https://1-800.lenoxproperty.com/assets/img/pdf-icon.png" width="40px" / >
                        <p>{{ $ad->pdf_title2 }}</p>
                    </a>
                </div>
                @endif
                @if($ad->company_pdf3)
                <div class="col-md-3">
                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf3 }}" target="_blank" >
                        <img src="https://1-800.lenoxproperty.com/assets/img/pdf-icon.png" width="40px" / >
                        <p>{{ $ad->pdf_title3 }}</p>
                    </a>
                </div>
                @endif
            </div>
            <hr class="divider">
            @endif
            
            <div class="col-md-3">
                <p class="header">Description</p>
            </div>
            <div class="col-md-9">
                <p class="description-text">
                {!! $ad->description !!}
                </p>
            </div>
            <hr class="divider">
            
            @if($ad->neighborhood_video_url)
            <div class="col-md-3">
		        <p class="header">The Neighborhood</p>
		    </div>
		    <div class="col-md-9">
				<div class="row" align="center">
                                   <?php
                    				$neighborhood_video_url = $ad->neighborhood_video_url;
                    				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
                    					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
                    					if (! empty ( $matches [1] )) {
                    						echo '<iframe class="embed-responsive-item movie" width="100%" height="400" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
                    					}
                    				}
                    				?>
                    </div>
                </div>
            </div>
            <hr class="divider">
            @else
            </div>
            @endif
            
            @if($ad->matterport)
            <div class="col-md-3">
                <p class="header">Matterport</p>
            </div>
            <div class="col-md-9">
			    <div class="row" style="padding: 15px;">
                    <iframe width="100%" height="480" src="https://my.matterport.com/show/?m={{ $ad->matterport }}" frameborder="0" allowfullscreen allow="xr-spatial-tracking"></iframe>
                </div>
			</div>
            @endif

            <div class="col-md-3">
                <p class="header">Location Information</p>
            </div>
            <div class="col-md-9">
                @if($ad->location)
                <p>{{ $ad->location }}</p>
                @endif
			    <div class="row" style="padding: 15px;">
					<div id="map" style="width: 100%; height: 300px;" class="map"></div> 
			    </div>
			    <p><i class="fa fa-map-marker"></i>&nbsp;Full Address: @if($ad->street_num){{ $ad->street_num}} @endif @if($ad->street_name){{ $ad->street_name }}@endif @if($ad->street_type){{ ucfirst($ad->street_type) }}@endif 
			            @if($ad->city->city_name){{ $ad->city->city_name }} @endif, Rhode Island {{ $ad->zipcode }}</p>
		    </div>
        </div>
    </div>
    
    <hr class="divider">
    <p class="please-note">
        Please Note: All square footage measurements are approximate and should be independently verified and confirmed.  No guarantee, warranty or representation of any kind is made regarding the completeness or accuracy of any such measurement and RealtyRI.com disclaims any liability in connection with any such measurements or any other incorrect information with regards to this listing
    </p>
    </div>
      </div>
      <div class="col-sm-12 col-md-6 col-md-3">
          <div class="row">
            <div class="col-md-11 right-pane">
                    <p class="home-improvement-pros"><a href="https://1-800.lenoxproperty.com/real-estate-professionals">Real Estate Professionals</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../open-houses"><img src="https://1-800.lenoxproperty.com/assets/images/openhouse.png" height="35px" width="35px" />&nbsp; OPEN HOUSES</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../brokers"><img src="https://1-800.lenoxproperty.com/assets/images/mortgage.png" height="35px" width="35px" />&nbsp; MORTGAGE PROS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../photographers"><img src="https://1-800.lenoxproperty.com/assets/images/photographers.png" height="35px" width="35px" />&nbsp; PHOTOGRAPHERS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../videographers"><img src="https://1-800.lenoxproperty.com/assets/images/videographers.png" height="35px" width="35px" />&nbsp; VIDEOGRAPHERS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../real-estate-attorneys"><img src="https://1-800.lenoxproperty.com/assets/images/attorneys.png" height="35px" width="35px" />&nbsp; REAL ESTATE ATTORNEYS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../home-inspection-companies"><img src="https://1-800.lenoxproperty.com/assets/images/inspectors.png" height="35px" width="35px" />&nbsp; HOME INSPECTORS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../home-improvement"><img src="https://1-800.lenoxproperty.com/assets/images/contractors.png" height="35px" width="35px" />&nbsp; HOME IMPROVEMENT PROS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="../insurance-agent"><img src="https://1-800.lenoxproperty.com/assets/images/agents.png" height="35px" width="35px" />&nbsp; INSURANCE AGENTS</a></p>
                    <p class="line"></p>
                    <p class="prof-services"><a href="https://1-800.lenoxproperty.com/home-improvement/moving-companies"><img src="https://1-800.lenoxproperty.com/assets/images/moving-companies.png" height="35px" width="35px" />&nbsp; MOVING COMPANIES</a></p>
            </div>
            <div class="col-md-11 right-bottom-pane">
                <a href="https://1-800.lenoxproperty.com/agent/{{ @$ad->user->id }}">
                     <div class="col-md-12" align="center">
                         <legend>Presented By</legend> 
                         <p class="header">{{ @$ad->user->name }}</p>
    					<p>
                        @if(@$ad->user->photo)
                                        <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $ad->user->photo }}" width="100%" height="100%" />
                                        @else
                                        <img src="http://1-800.lenoxproperty.com/assets/img/default-new.png" width="100%" height="100%" />
                                        @endif
    					</p>
    					@if(@$ad->user->agent_logo)
    					<p><img src="https://1-800.lenoxproperty.com/uploads/avatar/{{ $ad->user->agent_logo }}" alt="RI Property Rentals" class="logo"></p>
    					@endif
    					<p>
    					    <a href="tel:1{{ @$ad->user->mobile }}"><p class="phone-number"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;{{ @$ad->user->mobile }}</p></a>
    					</p>
                        @if(@$ad->user->twitter or @$ad->user->facebook or @$ad->user->instagram)
    					<div class="col-md-12 col-sm-6" align="center">
    					    <div class="col-md-4 col-sm-4">
    					        <a href="{{ @$ad->user->twitter }}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
    					    </div>
    					    <div class="col-md-4 col-sm-4">
                                <a href="{{ @$ad->user->facebook }}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="{{ @$ad->user->instagram }}" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                            </div>
                        </div>
                        &nbsp;
                        @endif
                        <div class="row" align="center">
    						<a href="#" class="button-contact" data-toggle="modal" data-target="#replyByEmail">Contact {{ @$ad->user->first_name }}</a>
    					</div>
    					<br />
    				</div>
    			</a>
        </div>
        @if($ad->type == "apartment" or $ad->type == "commercial")
        <div class="col-md-11 col-sm-12 right-tenant-pane">
            <p class="home-improvement-pros">Tenant Info</p>
            <p class="line"></p>
            <p><a href="https://1-800.lenoxproperty.com/tenant-all-you-need-to-know">Everything you need to know</a></p>
            <p class="line"></p>
            <p><a href="https://1-800.lenoxproperty.com/ri-city-and-town-info">City and Town Info</a></p>
            <p class="line"></p>
            <p><a href="https://1-800.lenoxproperty.com/ri-links-to-local-laws">Links to Local Laws</a></p>
            <p class="line"></p>
            <p><a href="https://1-800.lenoxproperty.com/ri-lead-and-fire-law">Lead and Fire Law Info</a></p>
            <p class="line"></p>
        </div>
        @endif
        @if($ad->sale_type == "Single-Family" or $ad->sale_type == "Multi-Family" or $ad->sale_type == "Condo" or $ad->category == "land_sale" or $ad->sale_type == "commercial_sale" or $ad->category == "mixed_sale" or $ad->category == "commercial_sale")
        <div class="col-md-11 col-sm-12 right-tenant-pane">
            <p class="home-improvement-pros">Mortgage Calculator</p>
            <p align="center">(Please Note: Amount does not include taxes or insurance)</p>
            <div id="calculator"></div>
            <p align="center">
                <a href="https://1-800.lenoxproperty.com/page/mortgage-information">Click here for more mortgage information.</a>
            </p>
        </div>
        @endif
        </div>
      </div>
    </div>
    
</div>
<p>&nbsp;</p>

@section('page-js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.js') }}"></script>
<script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>

<script>
        $(function(){
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
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<script>
        $('.share').ShareLink({
            title: '{{ $ad->title }}', // title for share message
            text: '{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}', // text for share message

            @if($ad->media_img->first())
            image: '{{ media_url($ad->media_img->first(), true) }}', // optional image for share message (not for all networks)
            @else
            image: '{{ asset('uploads/placeholder.png') }}', // optional image for share message (not for all networks)
            @endif
            url: '{{ route('single_ad', $ad->slug) }}', // link on shared page
            class_prefix: 's_', // optional class prefix for share elements (buttons or links or everything), default: 's_'
            width: 640, // optional popup initial width
            height: 480 // optional popup initial height
        })
    </script>
<script>
(function($){
	$.fn.homenote = function(options){

		var settings = $.extend({
			currencysym : '$',
			currency : 'Dollars',
			termtype : "years", // years or months
			term : "30",
			principal : "250,000",
			dptype : 'percentage', // percentage or downlump
			dpamount : '20%',
			rate : '6.5',
			resulttext : 'Your estimated monthly payment is (This amount does not include taxes, insurance or PMI payment if needed.):'
		}, options );
		options = $.extend(settings, options);

		// Change the term type between years and months
		$(document).on('change', 'input[name="termtype"]', function(){
			settings.termtype = $(this).val();
			$('#term').val( convertTermLength() );
		});

		// Change the down type between lump sum and percentage
		$(document).on('change', 'input[name="dptype"]', function(){
			settings.dptype = $(this).val();
			$('#dpamount').val( convertDownPayment() );
		});

		// Perform the calculation
		$(document).on('click', '#calchomenote', function(e){
			e.preventDefault();
			$('#results').hide()
				.html(settings.resulttext + ' <strong>' + settings.currencysym + calculate() + '</strong>')
				.show();
		});

		/**
		* Converts down between percentate and lump sum 
		*/
		function convertDownPayment()
		{
			var total = $('#purchasePrice').val().replace(/[^0-9\.]/g, '');
			var amount = $('#dpamount').val().replace(/[^0-9\.]/g, '');

			if ( settings.dptype === 'percentage' ){
				return (amount / total) * 100 + '%';
			} else {
				var perc = amount / 100;
				return total * perc;
			}
		}

		/**
		* Converts term between years and months
		*/
		function convertTermLength()
		{
			var term = $('#term').val();
			return ( $('input:radio[name="termtype"]:checked').val() === 'months' ) ? term * 12 : term / 12;
		}

		/**
		* Returns total left on loan
		*/
		function amountLeft()
		{
			// Determine amount left on loan
			var type = $('input:radio[name="dptype"]:checked').val();
			var total = $('#purchasePrice').val().replace(/[^0-9\.]/g, '');
			var down = $('#dpamount').val().replace(/[^0-9\.]/g, '');
			
			if ( type === 'percentage' ){
				var percentage =  down / 100;
				return total - (total * percentage);
			} else {
				return total - down;
			}
		}

		/**
		* Returns number of payments left
		*/
		function paymentsLeft()
		{
			var term = $('#term').val();
			return ( $('input:radio[name="termtype"]:checked').val() === 'months' ) ? term : term * 12;
		}


		function calculate()
		{
			// Standard Mortgage Formula:
			// M = P[i(1+i)n] / [(1+i)n - 1]
			// x = (1+i)n

			var P = amountLeft();
			var i = ($('#rate').val().replace(/[^0-9\.]/g, '') / 100) / 12;
			var n = paymentsLeft();
			var x = Math.pow((1 + i ), n);
			var M = ( P * ((i * x) / (x - 1)) ).toFixed(2);
			return M;
		}


		function returnOutput()
		{
			// form to output
			var out = "<form id='homenote' role='form' class='well'>";

			// Purchase Price
			out += "<div class='form-group'><label for='purchasePrice'>Purchase Price (" + settings.currencysym + ")</label>";
			out += "<input type='text' class='form-control' id='purchasePrice' value='" + settings.principal + "'></div></hr>";

			// Down Payment
			out += "<div class=<label for='downPayment'>Down Payment</label><input type='text' class='form-control' id='dpamount' value='" + settings.dpamount + "'></div>";

			// Down Payment Type - Percentage
			out += "<label class='radio-inline'><input type='radio' name='dptype' id='downpercentage' value='percentage'";
			if ( settings.dptype === 'percentage' ){ out += ' checked'; }
			out += ">Percent (%)</label>";

			// Down Payment Type - Lump Sum
			out += "<label class='radio-inline'><input type='radio' name='dptype' id='downlump' value='downlump'";
			if ( settings.dptype === 'downlump' ){ out += " checked"; }
			out += ">" + settings.currency + " (" + settings.currencysym + ")</label>";

			// Interest Rate
			out += "<div class='extra-padding'></div><div class='form-group'><label for='rate'>Interest Rate (%)</label><input type='text' class='form-control' id='rate' value='" + settings.rate + "'></div>";

			// Term
			out += "<div class='form-group'><label for='rate'>Term</label><input type='text' class='form-control' id='term' value='" + settings.term + "'></div>";

			// Term in Years
			out += "<label class='radio-inline'><input type='radio' name='termtype' id='years' value='years' ";
			if ( settings.termtype === 'years' ){ out += 'checked'; }
			out += ">Years</label>";

			// Term in Months
			out += "<label class='radio-inline'><input type='radio' name='termtype' id='months' value='months'";
			if ( settings.termtype === 'months' ){ out += 'checked'; }
			out += ">Months</label>";

			// Resultss
			out += "<div class='alert alert-success' style='display:none;' id='results'></div>";
			
			// Submit Button
			out += "<div class='extra-padding'></div><button type='submit' class='btn btn-primary btn-block' id='calchomenote'>Calculate</button></form>";

			return out;
		}

		$(this).html(returnOutput());
		
	};

}(jQuery));

 $(document).ready(function(){
   $('#calculator').homenote({
            principal: '200,000',
            rate: '5.0'
        });
    });
</script>

<script>

    $('#shareByEmail').submit(function(e){
        e.preventDefault();
        var share_email_form_data = $(this).serialize();

        $('#loadingOverlay').show();
        $.ajax({
            type : 'POST',
            url : '{{ route('share_by_email_post') }}',
            data : share_email_form_data,
            success : function (data) {
                if (data.status == 1){
                    toastr.success(data.msg, '@lang('app.success')', toastr_options);
                }else {
                    toastr.error(data.msg, '@lang('app.error')', toastr_options);
                }
                $('#shareByEmail').modal('hide');
                $('#loadingOverlay').hide();
            }
        });
    });

    $('#replyByEmailForm').submit(function(e){
        e.preventDefault();
        var reply_email_form_data = $(this).serialize();

        $('#loadingOverlay').show();
        $.ajax({
            type : 'POST',
            url : '{{ route('reply_by_email_post') }}',
            data : reply_email_form_data,
            success : function (data) {
                if (data.status == 1){
                    toastr.success(data.msg, '@lang('app.success')', toastr_options);
                }else {
                    toastr.error(data.msg, '@lang('app.error')', toastr_options);
                }
                $('#replyByEmail').modal('hide');
                $('#loadingOverlay').hide();
            }
        });
    });

    $('button#report_ad').click(function(){
        var reason = $('[name="reason"]').val();
        var email = $('[name="email"]').val();
        var message = $('[name="message"]').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var error = 0;
        if(reason.length < 1){
            $('#reason_info').html('<p class="text-danger">Reason required</p>');
            error++;
        }else {
            $('#reason_info').html('');
        }
        if(email.length < 1){
            $('#email_info').html('<p class="text-danger">Email required</p>');
            error++;
        }else {
            if ( ! regex.test(email)){
                $('#email_info').html('<p class="text-danger">Valid email required</p>');
                error++;
            }else {
                $('#email_info').html('');
            }
        }
        if(message.length < 1){
            $('#message_info').html('<p class="text-danger">Message required</p>');
            error++;
        }else {
            $('#message_info').html('');
        }

        if (error < 1){
            $('#loadingOverlay').show();
            $.ajax({
                type : 'POST',
                url : '{{ route('report_ads_pos') }}',
                data : { reason : reason, email: email,message:message, slug:'{{ $ad->slug }}',  _token : '{{ csrf_token() }}' },
                success : function (data) {
                    if (data.status == 1){
                        toastr.success(data.msg, '@lang('app.success')', toastr_options);
                    }else {
                        toastr.error(data.msg, '@lang('app.error')', toastr_options);
                    }
                    $('#reportAdModal').modal('hide');
                    $('#loadingOverlay').hide();
                }
            });
        }
    });

</script>

<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = '{{ $ad->street_num }} {{ $ad->street_name }} {{ $ad->street_type }} {{ $ad->new_state }} {{ $ad->new_city }}';
        geocoder.geocode({'address': address}, function(results, status) {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZX8lkx1Dx4cZxNPicTYfZBNKAxkLhaZM&callback=initMap">
    </script>
@endsection
