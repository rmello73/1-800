@extends('layout.main')

@section('title'){{trans('Rhode Island screening tools for landlords')}}@stop
@section('description', 'Links to sites which can help landlords in Rhode Island screen potential tenants in RI')
@section('keywords', 'Landlord, tenant, screening, tools, Rhode Island, RI')
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
.fire-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #6c75d9;
  color: #ffffff;
}
.lead-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #3a4b94;
  color: #ffffff;
}
.historic-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #990033;
  color: #ffffff;
}
.fire-rectangle:hover {
  color: #ececec;
}
.lead-rectangle:hover {
  color: #ececec;
}
.historic-rectangle:hover {
  color: #ececec;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Rhode Island screening tools for landlords</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-screening-tools', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-screening-tools', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<img src="{{ asset('assets/img/ri-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://publicportal.courts.ri.gov/PublicPortal/Home/Dashboard/29', '_blank')" class="btn fire-rectangle"><b>Judiciary Public Portal</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.paroleboard.ri.gov/sexoffender/agree.php', '_blank')" class="btn lead-rectangle"><b>Parole Board and Sex Offender Community</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://paroleboard.ri.gov/sexual-offender-community-notification', '_blank')" class="btn historic-rectangle"><b>National Sex Offender Search</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection