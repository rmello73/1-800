@extends('layout.main')

@section('title'){{trans('Massachusetts screening tools for landlords')}}@stop
@section('description', 'Links to sites which can help landlords in Massachusetts screen potential tenants in MA')
@section('keywords', 'Landlord, tenant, screening, tools, Massachusetts, MA')
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
      			<h2 style="text-align: center";><b>Massachusetts screening tools for landlords</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-screening-tools', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-screening-tools', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
     			<img src="{{ asset('assets/img/ma-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://ma-appellatecourts.org/index.php', '_blank')" class="btn fire-rectangle"><b>Judiciary Public Portal</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.mass.gov/eopss/agencies/sorb/', '_blank')" class="btn lead-rectangle"><b>Parole Board and Sex Offender Community</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.nsopw.gov/?AspxAutoDetectCookieSupport=1', '_blank')" class="btn historic-rectangle"><b>National Sex Offender Search</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection