@extends('layout.main')

@section('title'){{trans('Massachusetts eviction information and free eviction forms')}}@stop
@section('description', 'Massachusetts information about the eviction process and free MA eviction forms')
@section('keywords', 'eviction, tenant, landlord, forms, information, residential, commercial, Massachusetts, MA')
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
.ma-court-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #4665f4;
  color: #ffffff;
}
.ma-court-button:hover {
  color: #ececec;
}
.ma-eviction-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #25357f;
  color: #ffffff;
}
.ma-eviction-button:hover {
  color: #ececec;
}
.ma-more-button {
  object-fit: contain;
  border-radius: 6px;
  background-color: #000000;
  color: #ffffff;
}
.ma-more-button:hover {
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
      			<h2 style="text-align: center";><b>Massachusetts eviction information and free eviction forms</b></h2>
      			<br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ma-eviction', '_self')" class="btn one-button"><h4>Massachusetts</h4></button>
      			<br /><br />
      			<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-eviction', '_self')" class="btn two-button"><h4>Rhode Island</h4></button>
      			<img src="{{ asset('assets/img/ma-background.jpg') }}" width="550px" height="auto" class="responsive" />
          	</div>
          	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            <div class="col-lg-4 mb30 top-rectangle">
            	<div class="col-lg-6">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.mass.gov/courts/selfhelp/housing/eviction.html', '_blank')" class="btn ma-eviction-button"><b>Eviction Process</b></button>
				</div>
            	<div class="col-lg-6">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('http://www.mass.gov/courts/forms/', '_blank')" class="btn ma-court-button"><b>Massachusetts Court System</b></button>
				</div>
           	</div>
       		<div class="col-lg-4 mb30 top-rectangle">
       			<div class="col-lg-12">
             		<img src="{{ asset('assets/img/oval.png') }}" />&nbsp;&nbsp;&nbsp;<button type="button" onclick="window.open('https://www.mass.gov/eviction-for-landlords?_gl=1*l9w8vg*_ga*MTY3NjA1NDUyNi4xNzIzMDQxMDky*_ga_MCLPEGW7WM*MTcyMzQ4MjUxMC4xLjEuMTcyMzQ4MzgzMi4wLjAuMA', '_blank')" class="btn ma-more-button"><b>More Information on Evictions</b></button>
				</div>
       		</div>
    	</div>
	</div>
</div>
@endsection