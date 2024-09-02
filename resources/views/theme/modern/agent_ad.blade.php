@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
<style>
body {
    background-color: #f3f2f3;
}
.mkdf-btn.mkdf-btn-outline {
        color: #ffffff;
        background-color: transparent;
        border: 1px solid #25357F;
    }
    .mkdf-btn {
        font-family: "Josefin Sans",sans-serif;
        position: relative;
        width: auto;
        outline: 0;
        font-size: 11px;
        line-height: 2em;
        letter-spacing: .15em;
        font-weight: 400;
        text-transform: uppercase;
        box-sizing: border-box;
        margin: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        -moz-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        padding: 11px 53px 7px;
        cursor: pointer;
    }
    .mkdf-btn, .mkdf-btn.mkdf-btn-simple .mkdf-btn-text {
        display: inline-block;
        vertical-align: middle;
    }
.title-header {
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.btn-new {
                border-radius: 30px;
                width: 150px;
                height: 40px;
            }
.Areas-Served {
  font-family: Lato;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.63;
  letter-spacing: normal;
  color: #8a8a8a;
}
.Hours {
  font-family: Lato;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.63;
  letter-spacing: normal;
  color: #8a8a8a;
}
.img-round {
  border-radius: 50%;
}
.left-pane {
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 1px 30px 0 #dfdfdf;
  background-color: #ffffff;
  box-model: border-box;
  border: 10px solid #ffffff;
  background-clip:padding-box;
  padding: 10px;
}
.right-pane {
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 3px 15px 0 rgba(198, 198, 198, 0.5);
  background-color: #ffffff;
  box-model: border-box;
  border: 10px solid #ffffff;
  background-clip:padding-box;
  padding: 20px;
  margin-left: 20px;
}
.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #000099;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

.modern-details-img-indicator {
    z-index: 100;
    background: rgba(6, 66, 136, 0.7);
    color: white;
    font-size: 14px;
    position: relative;
    padding: 10px;
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
    right: 15px;
    font-size: 60px;
    z-index: 10001;
}
.centered {
  position: absolute;
  top: 59%;
  left: 45%;
  transform: translate(-50%, -50%);
  font-family: Roboto;
  font-size: 18px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.circular-logo {
    clip-path: circle();
}
</style>
@endsection

@section('main')
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
	    <div class="fotorama" data-width="100%" data-height="100%">
        @foreach($agent_images as $img)
        	<img src="http://1-800.lenoxproperty.com/files/{{ $img->media_name }}" alt="Professional Photo">
        @endforeach
        </div>
  </div>
</div>

<br />
<div class ="container">
    <div class="row left-pane">
        <div class="col-md-3">
            <div align="center">
            @if($user->photo)
            <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->photo }}" width="100%" height="100%" class="circular-logo" />
            @else
            <img src="http://1-800.lenoxproperty.com/assets/img/default-new.png" width="100%" height="100%" />
            @endif
            <br />
            @if($user->name)
            <h3>{{ $user->name }}</h3>
            <p class="details" align="center" style="color:#999999";>
                {{ $user->company }}<br />
                {{ $user->mobile }}<br />
            </p>
            @endif    

            @if($user->averageRating != 0)
            <p style="color:#000099;">Rating:</p>
            @else
            (No ratings yet)
            @endif

			@if($user->averageRating == 5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 4.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 4)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 3.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 3)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 2.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 2)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 1.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 1)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@endif
            <br />
            <p align="center">@if($user->agent_logo) <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->agent_logo }}" height="40%" width="40%" /></a> @else <img src="http://1-800.lenoxproperty.com/uploads/avatar/1586219346v5ygm-logo.jpg" height="40%" width="40%" />
                                                                                        	@endif</p>
            </div>
        </div>
        <div class="col-md-6">
        @if($user->video) <p><?php
        				$neighborhood_video_url = $user->video;
        				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
        					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
        					if (! empty ( $matches [1] )) {
        						echo '<iframe class="embed-responsive-item" width="530px" height="400px" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
        					}
        				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
        					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {
        
        						if (! empty ( $regs [3] )) {
        							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
        						}
        					}
        				}
        				?></p>
        			@else
        			<p>No Video Uploaded</p>
        			@endif
        </div>
        <div class="col-md-3" style="background-color: #ececec";>
            <h4 align="center">Ask {{ $user->first_name }} a Question</h4>
        {!! Form::open(['id' => 'replyByEmailForm']) !!}
                            <div class="form-group">
                                <label for="name" class="control-label">@lang('app.name'):</label>
                                <input type="text" class="form-control" id="name" name="name" data-validation="required">
                            </div>
        
                            <div class="form-group">
                                <label for="email" class="control-label">@lang('app.email'):</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
        
                            <div class="form-group">
                                <label for="phone_number" class="control-label">Phone:</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number">
                            </div>
        
                            <div class="form-group">
                                <label for="message-text" class="control-label">@lang('app.message'):</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>
        
                            <input type="hidden" name="agent_id" value="{{ $user->id }}" />
                            <button type="submit" class="btn btn-primary" id="reply_by_email_btn">@lang('app.send_email')</button>
                        </form>
        </div>
    </div>
</div>
<br />
<div class ="container">
    <div class="row">
        <div class="col-md-12 left-pane">
            <h3>Meet {{ $user->first_name }}</h3>
                <p>{!! $user->description !!}</p>
            <h3>{{ $user->first_name }}'s Specialties</h3>
                @if($user->asp){{ ucwords($user->asp) }}@endif 
                @if($user->asp2), {{ ucwords($user->asp2) }}@endif 
                @if($user->asp3), {{ ucwords($user->asp3) }}@endif 
                @if($user->asp4), {{ ucwords($user->asp4) }}@endif 
                @if($user->asp5), {{ ucwords($user->asp5) }}@endif
        </div>
    </div>
</div>
<br />
<div class ="container left-pane">
    <div class="row">
        <div class="col-md-12">
            <h3>Properties {{ $user->first_name }} Has Sold</h3>
                <div class="col-md-4" align="center">
                    @foreach($agent_images1 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold)
                    <b>${{ number_format($user->agent_sold) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy)
                    {{ $user->agent_addy }}
                    <br />
                    @endif
                    @if($user->agent_rep)
                    Represented {{ ucwords($user->agent_rep) }}
                    <br />
                    @endif
                </div>
                <div class="col-md-4" align="center">
                    @foreach($agent_images2 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold2)
                    <b>${{ number_format($user->agent_sold2) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy2)
                    {{ $user->agent_addy2 }}
                    <br />
                    @endif
                    @if($user->agent_rep2)
                    Represented {{ ucwords($user->agent_rep2) }}
                    <br />
                    @endif
                </div>
                <div class="col-md-4" align="center">
                    @foreach($agent_images3 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold3)
                    <b>${{ number_format($user->agent_sold3) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy3)
                    {{ $user->agent_addy3 }}
                    <br />
                    @endif
                    @if($user->agent_rep3)
                    Represented {{ ucwords($user->agent_rep3) }}
                    <br />
                    @endif
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
                <div class="col-md-4" align="center">
                    @foreach($agent_images4 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold4)
                    <b>${{ number_format($user->agent_sold4) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy4)
                    {{ $user->agent_addy4 }}
                    <br />
                    @endif
                    @if($user->agent_rep4)
                    Represented {{ ucwords($user->agent_rep4) }}
                    <br />
                    @endif
                </div>
                <div class="col-md-4" align="center">
                    @foreach($agent_images5 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold5)
                    <b>${{ number_format($user->agent_sold5) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy5)
                    {{ $user->agent_addy5 }}
                    <br />
                    @endif
                    @if($user->agent_rep5)
                    Represented {{ ucwords($user->agent_rep5) }}
                    <br />
                    @endif
                </div>
                <div class="col-md-4" align="center">
                    @foreach($agent_images6 as $image)
                    @if(!empty($image))
                    <div class="creating-ads-img-wrap">
                        <img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="100%"></a>
                    </div>
                    @else
                    <div class="creating-ads-img-wrap">
                        <img src="https://realtyri.com/assets/img/default-ri-property.png" />
                    </div>
                    @endif
                    @endforeach
                    @if($user->agent_sold6)
                    <b>${{ number_format($user->agent_sold6) }}</b>
                    <br />
                    @endif
                    @if($user->agent_addy6)
                    {{ $user->agent_addy6 }}
                    <br />
                    @endif
                    @if($user->agent_rep6)
                    Represented {{ ucwords($user->agent_rep6) }}
                    <br />
                    @endif
                </div>
        </div>
    </div>
</div>
<br />
<div class ="container">
    <div class="row">
        <div class="col-md-12 left-pane">
            <h3>Helpful Tips From {{ $user->first_name }}</h3>
            <div class="col-md-4">
                @if($user->video2)
                <?php
        				$neighborhood_video_url = $user->video2;
        				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
        					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
        					if (! empty ( $matches [1] )) {
        						echo '<iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
        					}
        				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
        					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {
        
        						if (! empty ( $regs [3] )) {
        							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
        						}
        					}
        				}
        				?>
                @endif
            </div>
            <div class="col-md-4">
                @if($user->video3)
                <?php
        				$neighborhood_video_url = $user->video3;
        				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
        					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
        					if (! empty ( $matches [1] )) {
        						echo '<iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
        					}
        				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
        					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {
        
        						if (! empty ( $regs [3] )) {
        							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
        						}
        					}
        				}
        				?>
                @endif
            </div>
            <div class="col-md-4">
                @if($user->video4)
                <?php
        				$neighborhood_video_url = $user->video4;
        				if (strpos ( $neighborhood_video_url, 'youtube' ) > 0) {
        					preg_match ( "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $neighborhood_video_url, $matches );
        					if (! empty ( $matches [1] )) {
        						echo '<iframe class="embed-responsive-item" width="100%" src="https://www.youtube.com/embed/' . $matches [1] . '" frameborder="0" allowfullscreen></iframe>';
        					}
        				} elseif (strpos ( $neighborhood_video_url, 'vimeo' ) > 0) {
        					if (preg_match ( '%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $neighborhood_video_url, $regs )) {
        
        						if (! empty ( $regs [3] )) {
        							echo '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/' . $regs [3] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
        						}
        					}
        				}
        				?>
                @endif
            </div>
    </div>
</div>
                    </div>
<br />
<div class ="container">
    <div class="row">
        <div class="col-md-12 left-pane">
            <h3>{{ ucwords($user->first_name) }}'s Reviews</h3>
            <?php $count = 1; ?>
            @foreach($user->ratings as $rate)
            <p>{{ $count }}. {{ $rate->comment }}</p>
            <?php $count++; ?>
            @endforeach
            @if($user->averageRating != 0)
            <p style="color:#000099;">Rating:</p>
            @else
            (No ratings yet)
            @endif

			@if($user->averageRating == 5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 4.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 4)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 3.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 3)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 2.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@elseif($user->averageRating == 2)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 1.5)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
            @elseif($user->averageRating == 1)
            <div style="color:#000099;">
                <i class="fa fa-star" aria-hidden="true"></i>
                &nbsp;&nbsp;({{ $user->timesRated() }} votes)
            </div>
			@endif
                
            @if(Auth::check())
                    @if($user->ratings->contains('user_id', auth()->user()->id) and $user->ratings->contains('rateable_id', $user->id) )
                    <div class="container" align="center">
                        Already voted. Thank you!
                    </div>
                    @elseif(($user->id == auth()->user()->id))
                    <div class="container" align="center">
                        You cannot vote for yourself.
                    </div>
                    @else
                        <div class="container">
                            <h3>Leave a review for {{ $user->first_name }}</h3>
                            <form action="{{ route('set-rating') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="rateable_id" value="{{ $user->id }}" />
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                Your rating:
                                <br />
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                                <br /><br /><br />
                                Comment (optional):
                                <br />
                                <textarea rows="20" cols="80" name="comment"></textarea>
                                <br /><br />
                                <input type="submit" value="Submit Rating" />
                                <br /><br />
                            </form>
                        </div>
                    @endif
                @else
                    <div class="container" align="center">
                        <p>Not logged in. Please <a href="{{ route('login') }}">login</a> to write a review.</p>
                    </div>
                @endif
        </div>
    </div>
</div>

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

        <div class="modal fade" id="clickToShare" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div id="shareRoundIcons" align="center"></div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="recommend" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
                
                        {!! Form::open(['id' => 'recommendForm']) !!}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="control-label">@lang('app.name') To Send Info:</label>
                                <input type="text" class="form-control" id="name" name="name" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">@lang('app.email') To Send Info:</label>
                                <input type="text" class="form-control" id="email" name="email" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label for="name" class="control-label">@lang('app.name') From Send Info:</label>
                                <input type="text" class="form-control" id="from_name" name="from_name" data-validation="required">
                            </div>
        
                            <div class="form-group">
                                <label for="email" class="control-label">@lang('app.email') From Send Info:</label>
                                <input type="text" class="form-control" id="from_mail" name="from_mail" data-validation="required">
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


        <div class="modal fade" id="review" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
        
                        @if(Auth::check())
                        @if($user->ratings->contains('user_id', auth()->user()->id) and $user->ratings->contains('rateable_id', $user->id))
                        <div class="container">
                            Already voted. Thank you!
                        </div>
                        @else
                        <div class="container">
                        <h3>Leave a review for {{ $user->name }}</h3>
                        <form action="{{ route('set-rating') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="rateable_id" value="{{ $user->id }}" />
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            Your rating:
                            <br />
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                            <br /><br /><br />
                            Comment (optional):
                            <p>Note: For more space, please click and drag the arrow on the bottom right.</p>
                            <br />
                            <textarea rows="20" cols="60" name="comment"></textarea>
                            <br /><br />
                            <input type="submit" value="Submit Rating" />
                            <br /><br />
                        </form>
                        </div>
                        @endif
                        @else
                        <div class="container">
                            <p>Not logged in. Please <a href="{{ route('login') }}">login</a> to write a review.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
    
      </div>
    </div>

</div>
<p>&nbsp;</p>
@endsection

@section('page-js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>
<script
	src="{{ asset('assets/plugins/form-validator/form-validator.min.js') }}"></script>

<script>
        $.validate();
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
            
            $('#recommendForm').submit(function(e){
                e.preventDefault();
                var recommend_form_data = $(this).serialize();

                console.log(recommend_form_data);

                $('#loadingOverlay').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('recommend_post') }}',
                    data : recommend_form_data,
                    success : function (data) {
                        if (data.status == 1){
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }else {
                            toastr.error(data.msg, '@lang('app.error')', toastr_options);
                        }
                        $('#recommend').modal('hide');
			$('#loadingOverlay').hide();
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
@endsection