@extends('layout.main')

@section('title'){{trans('Rhode Island utility company information for tenants moving')}}@stop
@section('description', 'Links to the contact information for utility companies in Rhode Island  for tenants who are moving')
@section('keywords', 'Gas service, Electric company, Cable company, Rhode Island, tenant, utility, contact')
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
  background-color: #dc9f3e;
  color: #ffffff;
}
.lead-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #4665f4;
  color: #ffffff;
}
.general-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #000000;
  color: #ffffff;
}
.carbon-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #3a4b94;
  color: #ffffff;
}
.fire-rectangle:hover {
  color: #ececec;
}
.lead-rectangle:hover {
  color: #ececec;
}
.general-rectangle:hover {
  color: #ececec;
}
.carbon-rectangle:hover {
  color: #ececec;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Rhode Island utility company information for tenants moving</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-utility-information', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-utility-information', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<img src="{{ asset('assets/img/ri-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.nationalgridus.com/', '_blank')" class="btn fire-rectangle"><b>Electric Company</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.nationalgridus.com/', '_blank')" class="btn lead-rectangle"><b>Natural Gas Company</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.verizon.com/', '_blank')" class="btn carbon-rectangle"><b>Phone Company</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.cox.com/residential/support.html', '_blank')" class="btn general-rectangle"><b>Cable Company</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection