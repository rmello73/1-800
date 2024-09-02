@extends('layout.main')

@section('title'){{trans('Massachusetts lead paint and fire code laws')}}@stop
@section('description', 'Information and links to Massachusetts laws pertaining to Lead paint and fire codes in MA')
@section('keywords', 'Massachusetts, MA, laws, lead paint, fire codes, real estate, rentals, houses, apartments, rentals')
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
.general-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #000000;
  color: #ffffff;
}
.carbon-rectangle {
  object-fit: contain;
  border-radius: 6px;
  background-color: #b01f24;
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
      			<h2 style="text-align: center";><b>Massachusetts lead paint and fire code laws</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-lead-and-fire-law', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-lead-and-fire-law', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
     			<img src="{{ asset('assets/img/ma-background2.jpg') }}" width="450px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
             	<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://search.mass.gov/?q=fire+safety+code', '_blank')" class="btn fire-rectangle"><b>Fire Safety Code</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://search.mass.gov/all?q=lead%20paint', '_blank')" class="btn lead-rectangle"><b>Lead Paint Laws</b></button>
       		</div>
       		<div class="col-lg-4 mb30 top-rectangle">
				<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://malegislature.gov/Laws/GeneralLaws/PartI/TitleXX/Chapter148', '_blank')" class="btn general-rectangle"><b>General Laws</b></button>
             	&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://malegislature.gov/Laws/GeneralLaws/PartI/TitleXX/Chapter148/Section26F1~2', '_blank')" class="btn carbon-rectangle"><b>Carbon Monoxide Laws</b></button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
</div>
@endsection