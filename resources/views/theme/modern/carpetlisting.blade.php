@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

@section('page-css')
<style>
body {
    background-color: #f3f2f3;
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
a.button-contact{
    display:inline-block;
    padding:1.2em 2.0em;
    border:0.1em solid #000000;
    margin:0 0.3em 0.3em 0;
    border-radius:0.12em;
    box-sizing: border-box;
    text-decoration:none;
    font-family:'Roboto',sans-serif;
    font-size: 12px;
    font-weight:400;
    color:#000000;
    text-align:center;
    transition: all 0.2s;
    background-color:#fc0;
}
a.button-contact:hover{
    border:0.1em solid #fc0;
    color:#000000;
    background-color:#ffffff;
}
@media all and (max-width:30em){
    a.button-contact{
    display:block;
    margin:0.4em auto;
    }
}
</style>
@endsection

<div class="container">
    <h1>Rhode Island Carpet Services </h1>
    <div class="ad-box-grid-view">
                @if($users->count() > 0)
	@foreach($users as $user)
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="top-rectangle">
        					<div class="ads-thumbnail">
                        		<a href="http://1-800.lenoxproperty.com/professional/{{ $user->id }}">
                                    <p class="colorline">
                                        @if($user->photo)
                                        <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->photo }}" height="100%" width="100%" />
                                        @else
                                        <img src="http://1-800.lenoxproperty.com/assets/img/default-new.png" width="100%" height="100%" />
                                        @endif
                                    </p>
                                    <p class="title-header" align="center">
                                {{ $user->company }}
                            </p>
                            <p class="details" align="center">
                                {{ ucwords($user->name) }}<br />
                                {{ ucwords($user->title) }}<br />
                                @if($user->mobile)Mobile: <a href="tel:{{ $user->mobile }}">{{ $user->mobile }}</a>@endif<br />
                            
                            @if($user->averageRating == 5)
                                Rating:
                            <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 4.5)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 4)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 3.5)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 3)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 2.5)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 2)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 1.5)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" style="color:#000099"; aria-hidden="true"></i>
                            @elseif($user->averageRating == 1)
                                Rating:
                                        <i class="fa fa-star" style="color:#000099"; aria-hidden="true"></i>
                            @else
                            No votes yet
                            @endif
                        </p>

                        <p class="details" align="center">
                            <a href="http://1-800.lenoxproperty.com/professional/{{ $user->id }}" target="_blank" class="button-contact">More Info</a>
                        </p>
                            <p align="center">@if($user->agent_logo) <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->agent_logo }}" height="40%" width="40%" /></a> @else <img src="http://1-800.lenoxproperty.com/uploads/avatar/1586219346v5ygm-logo.jpg" height="40%" width="40%" />
                                                                                        	@endif</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="alert alert-warning">
                <h2><i class="fa fa-info-circle"></i> @lang('app.search_not_found') </h2>
            </div>
            @endif
        </div>
    </div>
</div>
<br />
@endsection
