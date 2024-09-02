@extends('layout.main')

@section('title'){{trans('Free Leases, applications and other forms for Apartment rentals or house rentals')}}@stop
@section('description', 'Free documents for renting apartments or houses. We provide free leases, applications, pet addendums and other forms for apartment rentals')
@section('keywords', 'lease, application, pet addendum, lead disclosure,  move in inspection report, landlord, apartment, rental, form, document')
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
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Free Leases, applications and other forms for Apartment rentals or house rentals</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-free-leases-and-other-documents', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-free-leases-and-other-documents', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
     			<img src="{{ asset('assets/img/ma-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/assets/documents/free-rental-lease.pdf', '_blank')" class="btn one-button"><b>Free Rental Lease</b></button>
           	</div>
           	<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/assets/documents/free-rental-application.pdf', '_blank')" class="btn two-button"><b>Free Rental Application</b></button>
            </div>
           	<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/assets/documents/free-move-in.pdf', '_blank')" class="btn three-button"><b>Free Move In Inspection Report</b></button>
            </div>
           	<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/assets/documents/free-pet-addendum.pdf', '_blank')" class="btn one-button"><b>Free Pet Addendum</b></button>
            </div>
           	<div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/assets/documents/free-lead-disclosure.pdf', '_blank')" class="btn two-button"><b>Free Lead Disclosure</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection