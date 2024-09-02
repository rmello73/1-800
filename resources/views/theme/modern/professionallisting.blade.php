@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

@section('page-css')
<style>
body {
    background-color: #f3f2f3;
}
.navbar-default {
    background-color: #ffffff !important;
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px;
  padding-bottom: 15px;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
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
.primary-color {
  background-color: #23326a!important;
  width: 144px;
  height: 42px;
  font-family: Roboto;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
}
.details {
  font-family: Roboto;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #6d6d6d;
}
.grid-container {
  padding: 40px;
}
</style>
@endsection

@if(count($users) > 0)
<div class="container">
        <h1>RHODE ISLAND PHOTOGRAPHERS</h1>
        <div class="ad-box-grid-view">
                @foreach($users as $user)
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="top-rectangle">
        					<div class="ads-thumbnail">
                        		<a href="http://1-800.lenoxproperty.com/agent/{{ $user->id }}">
                                    <p class="colorline">
                                        @if($user->photo)
                                        <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->photo }}" width="100%" height="100%" />
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
                                Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><br />
                            </p>
                            <p class="details" align="center">
                                <a href="http://1-800.lenoxproperty.com/agent/{{ $user->id }}" class="btn btn-primary primary-color">More Info</a>
                            </p>
                            &nbsp;
                            <p align="center">@if($user->agent_logo) <img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->agent_logo }}" height="40%" width="40%" /></a> @else <img src="http://1-800.lenoxproperty.com/uploads/avatar/1586219346v5ygm-logo.jpg" height="40%" width="40%" />
                                                                                        	@endif</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
<div class="grid-container mobile-hide">&nbsp;</div>
@else
<div class="alert alert-warning">
    <h2>
		<a href="http://1-800.lenoxproperty.com/realestateagent"><i class="fa fa-info-circle"></i> @lang('app.search_not_found')</a>
	</h2>
</div>
@endif
</div>
@endsection