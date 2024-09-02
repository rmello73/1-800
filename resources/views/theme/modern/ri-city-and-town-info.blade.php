@extends('layout.main')

@section('title'){{trans('Information about cities and towns in Rhode Island')}}@stop
@section('description', 'Information about cities and towns in Rhode Island')
@section('keywords', 'Rhode Island, RI, Cities, towns, Information')
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
	<div class="pt30 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
      		<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Rhode Island City and Town Information</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-city-and-town-info', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-city-and-town-info', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<img src="{{ asset('assets/img/ri-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
            <div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/barrington/', '_blank')" class="btn one-button"><b>Barrington</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/bristol/', '_blank')" class="btn two-button"><b>Bristol</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/burrillville/', '_blank')" class="btn three-button"><b>Burrillville</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/central_falls/', '_blank')" class="btn one-button"><b>Central Falls</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/charlestown/', '_blank')" class="btn two-button"><b>Charlestown</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/coventry/', '_blank')" class="btn three-button"><b>Coventry</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/cranston/', '_blank')" class="btn one-button"><b>Cranston</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/cumberland/', '_blank')" class="btn two-button"><b>Cumberland</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/east_greenwich/', '_blank')" class="btn three-button"><b>East Greenwich</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/east_providence/', '_blank')" class="btn one-button"><b>East Providence</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/exeter/', '_blank')" class="btn two-button"><b>Exeter</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/foster/', '_blank')" class="btn three-button"><b>Foster</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/glocester/', '_blank')" class="btn one-button"><b>Glocester</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/hopkinton/', '_blank')" class="btn two-button"><b>Hopkinton</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/jamestown/', '_blank')" class="btn three-button"><b>Jamestown</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/johnston/', '_blank')" class="btn one-button"><b>Johnston</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/little_compton/', '_blank')" class="btn two-button"><b>Little Compton</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/middletown/', '_blank')" class="btn three-button"><b>Middletown</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/narragansett/', '_blank')" class="btn one-button"><b>Narragansett</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/new_shoreham/', '_blank')" class="btn two-button"><b>New Shoreham</button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/newport/', '_blank')" class="btn three-button"><b>Newport</button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/north_kingstown/', '_blank')" class="btn one-button"><b>North Kingstown</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/north_providence/', '_blank')" class="btn two-button"><b>North Providence</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/north_smithfield/', '_blank')" class="btn three-button"><b>North Smithfield</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/pawtucket/', '_blank')" class="btn one-button"><b>Pawtucket</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/portsmouth/', '_blank')" class="btn two-button"><b>Portsmouth</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/providence/', '_blank')" class="btn three-button"><b>Providence</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/richmond', '_blank')" class="btn one-button"><b>Richmond</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/scituate/', '_blank')" class="btn two-button"><b>Scituate</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/smithfield/', '_blank')" class="btn three-button"><b>Smithfield</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/south_kingstown/', '_blank')" class="btn one-button"><b>South Kingstown</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/tiverton/', '_blank')" class="btn two-button"><b>Tiverton</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/warren/', '_blank')" class="btn three-button"><b>Warren</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/warwick/', '_blank')" class="btn one-button"><b>Warwick</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/west_greenwich/', '_blank')" class="btn two-button"><b>West Greenwich</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/west_warwick/', '_blank')" class="btn three-button"><b>West Warwick</b></button>
			</div>
			<div class="col-lg-4 mb20 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/westerly/', '_blank')" class="btn one-button"><b>Westerly</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.ri.gov/towns/view/woonsocket/', '_blank')" class="btn two-button"><b>Woonsocket</b></button>
           	</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection