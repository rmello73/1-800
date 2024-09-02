@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
<!--<link rel="stylesheet"
	href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">-->
<!-- bxSlider CSS file -->
<link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css">

<link rel="stylesheet"
	href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
<style>
body {overflow-x: hidden;}
.h1-video {
    color:#fff;
}
.img-logo {
	max-width:100%;
	height:28px;
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 10000;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: black;
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    height: 100%:
    width: 100%;
    text-align: center;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 5px;
    right: 15px;Happy Birthday!!!
    font-size: 60px;
    z-index: 10001;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
.modern-details-img-indicator {
        z-index:100;
        background: rgba(6, 66, 136, 0.7);
        color: white;
        font-size: 14px;
        position: relative;
        left: 20px;
        padding:10px;
	top: -100px;
}
.new-share-buttons
{
    z-index:100;
    position:relative;
    color:white;
    font-size:24px;
    font-weight:bold;
    left:20px;
    top:20px;
}
.bx-wrapper img {
    height: 400px;
    width: auto;
    max-width: auto;
    display: inline;
}
.top-bar {
    width: 100%;
    background-color: #222;
}
.description {
    font-size: 1.4em; /* 14px/16=0.875em */
    wrap-text: true;
}
img { 
    max-width: none !important; 
}rented
td {
    vertical-align:top;
    padding:10px;
}
.outer-container {
        padding:15px;
}
.h2-top {
        line-height: 85%;
        color:#064288;
        margin-top: 15px;
        margin-bottom: 5px;
}
.h2-bottom {
        line-height: 85%;
        color:#064288;
        margin-top: 0px;
        margin-bottom: 0px;
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
<link rel="stylesheet" href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
@endsection

@section('main')

	<div class="container" style="background-color:#064288">
		<div class="row">
                    <div class="col-md-6">
                        <h4 style="color:#fff">{{ $user->city }} {{ $user->state }} {{ ucwords($user->category) }}</h4>
                    </div>
                    <div class="col-md-6" style="margin-top: 2px;">
                        <input type="text" class="form-control" id="searchTerms" name="q"
                                                        value="{{ request('q') }}" placeholder="@lang('app.search___')" />
                    </div>
                </div>
        </div>
<br />
    <div class="container">

    <div id="wrapper">

    <div id="page-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            @if($user->photo) <p><img src="{{ $user->get_photo() }}" height="345" width=100%" /></p> @else <p><img
                                                                            src="http://1-800.lenoxproperty.com/uploads/avatar/face.jpg" height="345" width=100%" /></p> @endif
            </div>
            <div class="col-md-3">
            @if($user->name) <h2>{{ $user->name }}</h2> @endif
            @if($user->title) <p><b>{{ $user->title }} at @endif @if($user->company) {{ $user->company }}</b></p> @endif
            <p>@if($user->address) {{ $user->address }} @endif @if($user->city) {{ $user->city }},@endif @if($user->state){{ $user->state }} @endif @if($user->zip) {{ $user->zip }}</p> @endif
            @if($user->email) <p>Email: <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></p> @endif
            @if($user->mobile) <p>Cell: {{ $user->mobile }}</p> @endif
            @if($user->office) <p>Office: {{ $user->office }}</p> @endif
            @if($user->website) <p>Website: <a href="http://{{ $user->website }}" target="_blank">{{ $user->website }}</a></p> @endif
<br />            @if($user->name) <p><a href="#" class="btn btn-info btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Contact {{ $user->name }}</a></p> @endif
            </div>
            <div class="col-md-6">
            @if($user->video) <p><?php
				$neighborhood_video_url = $user->video;
				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
					if (! empty ( $matches [1] )) {
						echo '<iframe class="embed-responsive-item" width="550" height="345" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
					}
				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {

						if (! empty ( $regs [3] )) {
							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
						}
					}
				}
				?></p> @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <p>@if($user->agent_logo) <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->agent_logo }}" height="60%" width="60%" /></a> @else <p>&nbsp;</p>
                                                                        	@endif</p>
            </div>
            <div class="col-md-3">
            <p><img src="http://1-800.lenoxproperty.com/uploads/avatar/ratings.png" /></p>
            </div>
            <div class="col-md-2">
                        <p><a href="#" class="btn btn-primary btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i
                class="fa fa-share-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
            </div>
            <div class="col-md-2">
            <p><a href="#" class="btn btn-primary btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i
                class="fa fa-thumbs-up"></i>&nbsp;&nbsp;Recommend&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
            </div>
            <div class="col-md-2">
            <p><a href="#" class="btn btn-primary btn-lg"
                                                data-toggle="modal" data-target="#replyByEmail"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;Write a Review&nbsp;&nbsp; </a></p>
            </div>
        </div>
    </div>

    @if($user->description) <div class="container">
        <div class="row" style="background-color:#ececec">
            <div class="col-md-9">
            <legend>About {{ $user->company }}</legend>
            @if($user->asp) <p>Specialties: @if($user->asp){{ $user->asp }} @else None listed. @endif @if($user->asp2),{{ $user->asp2 }} @endif @if($user->asp3),{{ $user->asp3 }}@endif @if($user->asp4),{{ $user->asp4 }}@endif @if($user->asp5),{{ $user->asp5 }}@endif</p>@endif
            <p>{{ $user->description }}</p>
            </div>
            @if($user->tsa)<div class="col-md-3">
            @if($user->tsa)<h3>Areas Serviced</h3>
            <p style="line-height:30px;">@if($user->tsa){{ $user->tsa }}@endif @if($user->tsa2)<br />{{ $user->tsa2 }}@endif @if($user->tsa3)<br />{{ $user->tsa3 }}@endif @if($user->tsa4)<br />{{ $user->tsa4 }}@endif @if($user->tsa5)<br />{{ $user->tsa5 }}@endif</p> @else <p>&nbsp;</p> @endif
            @if($user->mh)<h3>Hours</h3>
            <p style="line-height:30px;">@if($user->mh)Monday: {{ $user->mh }}@endif @if($user->th)<br /> Tuesday: {{ $user->th }}@endif @if($user->wh)<br />Wednesday: {{ $user->wh }}@endif @if($user->rh)<br />Thursday: {{ $user->rh }}@endif @if($user->fh)<br />Friday: {{ $user->fh }}@endif @if($user->sh)<br /> Saturday: {{ $user->sh }}@endif @if($user->uh)<br /> Sunday: {{ $user->uh }}@endif</p>@endif
            </div>
        </div>@endif
    </div> @endif

    <div class="container">
        <div class="row">
<legend>Special Offers:</legend>
            <div class="col-md-4">
                <img src="http://1-800.lenoxproperty.com/uploads/avatar/coupon-holder.png" />
            </div>
            <div class="col-md-4">
                <img src="http://1-800.lenoxproperty.com/uploads/avatar/coupon-holder.png" />
            </div>
            <div class="col-md-4">
                <img src="http://1-800.lenoxproperty.com/uploads/avatar/coupon-holder.png" />
            </div>
        </div>
    </div>

    @if($user->address) <div class="container">
        <div class="row">
            <div class="col-md-12"
                <div class="row" style="padding: 15px;">
	        <div id="map" style="width: 100%; height: 300px;"></div> 
                </div> 
           </div>
    </div>
</div> @endif

<div class="modal fade" id="replyByEmail" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>

                {!! Form::open(['id' => 'replyByEmailForm']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="control-label">@lang('app.name'):</label>
                        <input type="text" class="form-control" id="name" name="name" data-validation="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">@lang('app.email'):</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="phone_number" class="control-label">@lang('app.phone_number'):</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="control-label">@lang('app.message'):</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="agent_id" value="{{ $user->id }}" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('app.close')</button>
                    <button type="submit" class="btn btn-primary" id="reply_by_email_btn">@lang('app.send_email')</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

</div>

@endsection

@section('page-js')
<script>
$('.print').click(function(){
	window.print();
});
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

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

<script src="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.js') }}"></script>
<script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>
<script
	src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
<script
	src="{{ asset('assets/plugins/form-validator/form-validator.min.js') }}"></script>

<script>
        $.validate();
    </script>
<!-- bxSlider Javascript file -->
<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.js') }}"></script>
<script>
        $(document).ready(function(){
        	$('.bxslider').bxSlider({
        		minSlides: 1,
        		maxSlides: 1,
        		slideWidth: 600,
        		slideMargin: 3,
			adaptiveHeight: true,
			pager: false
        	});
		$('#sortBySelect').change(function () {
                	var form_input = $('#listingFilterForm').serialize();
                	location.href = '{{ route('listing') }}?' + form_input + '&sortBy=' + $(this).val();
            	});
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
        var address = '{{ $user->address }} {{ $user->city }} {{ $user->state }} {{ $user->zip }}';
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
    src="https://maps.googleapis.com/maps/api/js?key={{get_option('google_map_api_key')}}&callback=initMap">
    </script>

<script>
        $(function(){
            $('#onClickShowPhone').click(function(){
                $('#ShowPhoneWrap').html('<i class="fa fa-phone"></i> {{ $user->mobile }}');
            });

	    $("#close").click(function (e) {
                $("#overlay").hide();
		$("#close").hide();
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

	    $('#shareByEmailForm').submit(function(e){
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

            $(document).on('change past keyup', '#embedded_width', function(){
                var width = $(this).val();
                var height = $('#embedded_height').val();
                $('iframe').css('width', width+'px');

                var iframe_code = '<iframe src="http://localhost/real-estate/source/embedded/2-beds-nice-apertment-in-ny-united-states" style="border:0;width:'+width+'px;height:'+height+'px;"></iframe> ';

                $('#embedded_code').val(iframe_code);
            });
            $(document).on('change past keyup', '#embedded_height', function(){
                var height = $(this).val();
                var width = $('#embedded_width').val();
                $('iframe').css('height', height+'px');

                var iframe_code = '<iframe src="http://localhost/real-estate/source/embedded/2-beds-nice-apertment-in-ny-united-states" style="border:0;width:'+width+'px;height:'+height+'px;"></iframe> ';

                $('#embedded_code').val(iframe_code);
            });

        });
    </script>

<script src="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.js') }}"></script>

@endsection