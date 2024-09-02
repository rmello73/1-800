@extends('layout.main')

@section('title'){{trans('Information about cities and towns in Massachusetts')}}@stop
@section('description', 'Information about cities and towns in Massachusetts')
@section('keywords', 'Massachusetts, MA, Cities, towns, Information')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.one-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #990033;
  color: #ffffff;
}
.one-button:hover {
  color: #ececec;
}
.two-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #495ed8;
  color: #ffffff;
}
.two-button:hover {
  color: #ececec;
}
.three-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #25357f;
  color: #ffffff;
}
.three-button:hover {
  color: #ececec;
}
.top-rectangle {
  width: 650px !important;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
      		<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Information about cities and towns in Massachusetts</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-city-and-town-info', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-city-and-town-info', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<img src="{{ asset('assets/img/ma-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.cityofattleboro.us/%C2%A0', '_blank')" class="btn one-button"><b>Attleboro</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.brockton.ma.us/%C2%A0', '_blank')" class="btn two-button"><b>Brockton</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.town.dartmouth.ma.us/%C2%A0', '_blank')" class="btn three-button"><b>Dartmouth</b></button>
            </div>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://fairhaven-ma.gov/pages/fairhavenma_webdocs/about%C2%A0', '_blank')" class="btn one-button"><b>Fairhaven</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.fallriverma.org/', '_blank')" class="btn two-button"><b>Fall River</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.middleborough.com/', '_blank')" class="btn three-button"><b>Middleborough</b></button>
            </div>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.newbedford-ma.gov/%C2%A0', '_blank')" class="btn one-button"><b>New Bedford</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.nattleboro.com/%C2%A0', '_blank')" class="btn two-button"><b>North Attleboro</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.townofsomerset.org/%C2%A0', '_blank')" class="btn three-button"><b>Somerset</b></button>
            </div>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.taunton-ma.gov/%C2%A0', '_blank')" class="btn one-button"><b>Taunton</b></button>
           	</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection