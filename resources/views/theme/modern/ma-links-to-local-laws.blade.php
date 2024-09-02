@extends('layout.main')

@section('title'){{trans('Massachusetts Landlord and tenant laws')}}@stop
@section('description', 'Massachusetts landlord and tenant laws and apartment associations')
@section('keywords', 'Massachusetts, MA, landlord, tenant. laws, apartments, commercial, rentals')
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
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#f3f3f3; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-6 mb30" align="center">
      			<h2 style="text-align: center";><b>Massachusetts Landlord and tenant laws</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-links-to-local-laws', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-links-to-local-laws', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<img src="{{ asset('assets/img/ma-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<button type="button" onclick="window.open('https://www.mass.gov/guides/the-attorney-generals-guide-to-landlord-and-tenant-rights', '_blank')" class="btn fire-rectangle">Landlord Tenant Guide</button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.massfairhousing.org/', '_blank')" class="btn lead-rectangle">Fair Housing</button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<button type="button" onclick="window.open('https://malegislature.gov/Laws/GeneralLaws/PartII/TitleI/Chapter186/Section15B', '_blank')" class="btn fire-rectangle">Security Deposit Law</button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.mass.gov/doc/consumer-guide-to-tenants-rights-and-responsibilities/download', '_blank')" class="btn lead-rectangle">Tenant Rights</button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
             	<button type="button" onclick="window.open('https://www.mass.gov/guides/landlord-responsibilities', '_blank')" class="btn fire-rectangle">Landlord Rights</button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.northeastern.edu/offcampus/pdf/Good_Neighbor_Handbook_Mar_2013_Revised_tcm3-36631.pdf', '_blank')" class="btn lead-rectangle">Boston Rental Guide</button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection