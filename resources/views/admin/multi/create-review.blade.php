@extends('layout.main')

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    2. Enter Basic Info&nbsp;-&nbsp;
                    3. Enter Property Details&nbsp;-&nbsp;
                    <font color="red">4. Review Info&nbsp;-&nbsp;</font>
                    5. Add Images & Publish Listing</h5>
            </div>
    <hr>
    <h3>Review Property Details</h3>
            <div class="container">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
    <form action="./create-review" method="post">
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td><b>Property Info</b></td>
                <td>&nbsp;</td>
            </tr>
            @if($ad->title)
            <tr>
                <td>Property Title:</td>
                <td><strong>{{ $ad->title }}</strong></td>
            </tr>
            @endif
            @if($ad->slug)
            <tr>
                <td>Property Slug:</td>
                <td><strong>{{ $ad->slug }}</strong></td>
            </tr>
            @endif
            @if($ad->description)
            <tr>
                <td>Property Description:</td>
                <td><strong>{{ $ad->description }}</strong></td>
            </tr>
            @endif
            @if($ad->comment)
            <tr>
                <td>Property Comment:</td>
                <td><strong>{{ $ad->comment }}</strong></td>
            </tr>
            @endif
            @if($ad->type)
            <tr>
                <td>Property Type:</td>
                <td><strong>{{ $ad->type }}</strong></td>
            </tr>
            @endif
            @if($ad->price)
            <tr>
                <td>Property Price:</td>
                <td><strong>${{ number_format($ad->price) }}</strong></td>
            </tr>
            @endif
            <tr>
                <td><b>Property Location</b></td>
                <td>&nbsp;</td>
            </tr>
            @if($ad->street_num)
            <tr>
                <td>Property Street Num:</td>
                <td><strong>{{ $ad->street_num }}</strong></td>
            </tr>
            @endif
            @if($ad->street_name)
            <tr>
                <td>Property Street Name:</td>
                <td><strong>{{ $ad->street_name }}</strong></td>
            </tr>
            @endif
            @if($ad->street_type)
            <tr>
                <td>Property Street Type:</td>
                <td><strong>{{ $ad->street_type }}</strong></td>
            </tr>
            @endif
            @if($ad->new_state)
            <tr>
                <td>Property State:</td>
                <td><strong>{{ $ad->new_state }}</strong></td>
            </tr>
            @endif
            @if($ad->new_city)
            <tr>
                <td>Property City:</td>
                <td><strong>{{ $ad->new_city }}</strong></td>
            </tr>
            @endif
            @if($ad->neighborhood)
            <tr>
                <td>Property Neighborhood:</td>
                <td><strong>{{ $ad->neighborhood }}</strong></td>
            </tr>
            @endif
            @if($ad->zipcode)
            <tr>
                <td>Property Zip:</td>
                <td><strong>{{ $ad->zipcode }}</strong></td>
            </tr>
            @endif
            <tr>
                <td><b>Property Details</b></td>
                <td>&nbsp;</td>
            </tr>
            @if($ad->square_unit_space)
            <tr>
                <td>Property Square Footage:</td>
                <td><strong>{{ $ad->square_unit_space }}</strong></td>
            </tr>
            @endif
            @if($ad->beds)
            <tr>
                <td>Property Bedrooms:</td>
                <td><strong>{{ $ad->beds }}</strong></td>
            </tr>
            @endif
            @if($ad->attached_bath)
            <tr>
                <td>Property Bathrooms:</td>
                <td><strong>{{ $ad->attached_bath }}</strong></td>
            </tr>
            @endif
            @if($ad->pmcdogs)
            <tr>
                <td>Dogs Allowed:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmccats)
            <tr>
                <td>Cats Allowed:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmchardwood)
            <tr>
                <td>Hardwood Floors:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmccarpeting)
            <tr>
                <td>Carpet:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcair)
            <tr>
                <td>Central Air:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcfurnished)
            <tr>
                <td>Furnished Apartment:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcstorage)
            <tr>
                <td>Basement Storage:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcfireplace)
            <tr>
                <td>Fireplace:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcyard)
            <tr>
                <td>Yard:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcceiling)
            <tr>
                <td>Ceiling Fans:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcbasketball)
            <tr>
                <td>Basketball Court:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcbusiness)
            <tr>
                <td>Business Center:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmccable)
            <tr>
                <td>Cable Ready:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcclubhouse)
            <tr>
                <td>Clubhouse:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmccontrolled)
            <tr>
                <td>Controlled Access:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcdeck)
            <tr>
                <td>Deck / Balcony:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcelevator)
            <tr>
                <td>Elevator:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcfitness)
            <tr>
                <td>Fitness Center:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmchandicap)
            <tr>
                <td>Handicap Access:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcinternet)
            <tr>
                <td>High Speed Internet Available:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcroom)
            <tr>
                <td>Laundry Room:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmclaundrypmc)
            <tr>
                <td>Laundry in Unit:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcmedia)
            <tr>
                <td>Media Center:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcpool)
            <tr>
                <td>Pool:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcspa)
            <tr>
                <td>Spa / Hot Tub:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmctennis)
            <tr>
                <td>Tennis Court:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcwalk)
            <tr>
                <td>Walk-in Closet:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif            
            @if($ad->pmcwasher)
            <tr>
                <td>Washer / Dryer hookups:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcvaulted)
            <tr>
                <td>Vaulted Ceilings :</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcdish)
            <tr>
                <td>Dishwasher:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcplay)
            <tr>
                <td>Playground:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcheat)
            <tr>
                <td>Heat Included:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcwater)
            <tr>
                <td>Hot Water Included:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcelectric)
            <tr>
                <td>Electricity Included:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcgarage)
            <tr>
                <td>Garage Parking:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->pmcassigned)
            <tr>
                <td>Assigned Parking:</td>
                <td><strong>Yes</strong></td>
            </tr>
            @endif
            @if($ad->officephone)
            <tr>
                <td>Office Phone:</td>
                <td>{{ $ad->officephone }}</td>
            </tr>
            @endif
            @if($ad->mh)
            <tr>
                <td>Monday Hours:</td>
                <td>{{ $ad->mh }}</td>
            </tr>
            @endif
            @if($ad->th)
            <tr>
                <td>Tuesday Hours:</td>
                <td>{{ $ad->th }}</td>
            </tr>
            @endif
            @if($ad->wh)
            <tr>
                <td>Wednesday Hours:</td>
                <td>{{ $ad->wh }}</td>
            </tr>
            @endif
            @if($ad->rh)
            <tr>
                <td>Thursday Hours:</td>
                <td>{{ $ad->rh }}</td>
            </tr>
            @endif
            @if($ad->fh)
            <tr>
                <td>Friday Hours:</td>
                <td>{{ $ad->fh }}</td>
            </tr>
            @endif
            @if($ad->sh)
            <tr>
                <td>Saturday Hours:</td>
                <td>{{ $ad->sh }}</td>
            </tr>
            @endif
            @if($ad->uh)
            <tr>
                <td>Sunday Hours:</td>
                <td>{{ $ad->uh }}</td>
            </tr>
            @endif
            <tr>
                <td><b>Property Videos</b></td>
                <td>&nbsp;</td>
            </tr>
            @if($ad->property_video_url)
            <tr>
                <td>Property Video:</td>
                <td>
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
                </td>
            </tr>
            @endif
            @if($ad->neighborhood_video_url)
            <tr>
                <td>Property Neighborhood Video:</td>
                <td>
                    <?php
				$neighborhood_video_url = $ad->neighborhood_video_url;
				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<div><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $matches [1] . 
'" frameborder="0" width="520" height="400" allowfullscreen></iframe></div>';
					}
				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {

						if (! empty ( $regs [3] )) {
							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
						}
					}
				}
				?>
                </td>
            </tr>
            @endif
        </table>
        <a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="./create-detail" class="btn btn-warning">Back to Step 2</a>
        @if($ad->sale_type =="Multi-Family")
        <a type="button" href="./multi-units" class="btn btn-warning">Back to Step 3</a>
        @endif
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <br />
<p>&nbsp;</p>
@endsection