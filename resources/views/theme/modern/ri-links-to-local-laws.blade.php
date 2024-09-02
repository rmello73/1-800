@extends('layout.main')

@section('title'){{trans('Rhode Island Landlord and tenant laws')}}@stop
@section('description', 'Rhode Island landlord and tenant laws and apartment associations')
@section('keywords', 'Rhode Island, RI, landlord, tenant. laws, apartments, commercial, rentals')
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
.three-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #25357f;
  color: #ffffff;
}
.three-button:hover {
  color: #ececec;
}
.fire-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #25357f;
  color: #ffffff;
}
.lead-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #4665f4;
  color: #ffffff;
}
.historic-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #000000;
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
      			<h2 style="text-align: center";><b>Rhode Island Landlord and Tenant laws</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-links-to-local-laws', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-links-to-local-laws', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<img src="{{ asset('assets/img/ri-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.courts.ri.gov/Courts/districtcourt/PDF/Handbook.pdf', '_blank')" class="btn one-button"><b>Landlord Tenant Handbook</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.rils.org/documents/tenant_rights.pdf', '_blank')" class="btn two-button"><b>Tenant Rights</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.hud.gov/states/rhode_island', '_blank')" class="btn three-button"><b>Rhode Island HUD</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.naahq.org/', '_blank')" class="btn one-button"><b>National Apartment Association</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.providenceapartmentassociation.com/', '_blank')" class="btn two-button"><b>Providence Apartment Association</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.propublica.org/article/what-you-need-to-know-about-how-section-8-really-works', '_blank')" class="btn three-button"><b>Section 8 Information</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.justice.gov/crt/fair-housing-act-2', '_blank')" class="btn one-button"><b>Federal Fair Housing Act</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://en.wikipedia.org/wiki/Civil_Rights_Act_of_1968', '_blank')" class="btn two-button"><b>Civil Rights Act</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection