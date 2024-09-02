@extends('layout.main')

@section('title'){{trans('Rhode Island eviction information and free eviction forms')}}@stop
@section('description', 'Rhode Island information about the eviction process and free RI eviction forms')
@section('keywords', 'eviction, tenant, landlord, forms, information, residential, commercial, Rhode Island, RI')
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
.ri-leasing-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #4665f4;
  color: #ffffff;
}
.ri-leasing-button:hover {
  color: #ececec;
}
.ri-eviction-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #8b85c1;
  color: #ffffff;
}
.ri-eviction-button:hover {
  color: #ececec;
}
.five-day-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #000000;
  color: #ffffff;
}
.five-day-button:hover {
  color: #ececec;
}
.complaint-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #3a4b94;
  color: #ffffff;
}
.complaint-button:hover {
  color: #ececec;
}
.court-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #990033;
  color: #ffffff;
}
.court-button:hover {
  color: #ececec;
}
.vacate-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #495ed8;
  color: #ffffff;
}
.vacate-button:hover {
  color: #ececec;
}
.helpful-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #25357f;
  color: #ffffff;
}
.helpful-button:hover {
  color: #ececec;
}
.top-rectangle {
  width: 600px!important;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Rhode Island Eviction Information <br />and Eviction Forms</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-eviction', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-eviction', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<img src="{{ asset('assets/img/ri-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
          	
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-6">
          			<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://webserver.rilin.state.ri.us/Statutes/title34/34-18.1/index.htm', '_blank')" class="btn ri-eviction-button"><b>RI Eviction Forms</b></button>
          		</div>
          		<div class="col-lg-6">
          			<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://webserver.rilin.state.ri.us/Statutes/title34/34-18.1/index.htm', '_blank')" class="btn ri-leasing-button"><b>Commercial Leasing in RI</b></button>
          		</div>
          	</div><!--  -->
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-12">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.courts.ri.gov/PublicResources/forms/District%20Court%20Forms/Five%20(5)%20Day%20Demand%20Notice%20for%20Non-payment%20of%20Rent.pdf', '_blank')" class="btn five-day-button"><b>5 Day Demand Notice for Non-Payment of Rent</b></button>
          		</div>
          	</div><!--  -->
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-12">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.courts.ri.gov/Forms/Complaint%20for%20Eviction%20for%20Non-payment%20of%20Rent.pdf', '_blank')" class="btn complaint-button"><b>Complaint for Eviction for Non-Payment of Rent</b></button>
				</div>
          	</div><!--  -->
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-6">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://webserver.rilin.state.ri.us/Statutes/title34/34-18/34-18-37.HTM', '_blank')" class="btn vacate-button"><b>30 Day to Vacate form</b></button>
          		</div>
          		<div class="col-lg-6">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.courts.ri.gov/publicresources/forms/district%20court%20forms/forms/allitems.aspx', '_blank')" class="btn court-button"><b>Court forms</b></button>
          		</div>
          	</div><!--  -->
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-12">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.courts.ri.gov/Courts/districtcourt/Pages/Landlord%20Tenant.aspx', '_blank')" class="btn helpful-button"><b>Helpful definitions in landlord/tenant matters</b></button>
				</div>
          	</div><!--  -->
          	<div class="col-lg-4 mb30 top-rectangle">
          		<div class="col-lg-12">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.helprilaw.org/sites/helprilaw.org/files/Evictions%20for%20Reasons%20Other%20Than%20Non-Payment%20of%20Rent%20Handbook.pdf', '_blank')" class="btn vacate-button"><b>Eviction Procedures for Reasons Other Thank Non-Payment of Rent</b></button>
				</div>
          	</div><!--  -->
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection