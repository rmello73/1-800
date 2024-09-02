@extends('layout.main')

@section('page-css')
<style>
.bigger{
  width:100%;
  height:700px;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("http://1-800.lenoxproperty.com/assets/img/lt-top.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #ffffff;
}
.parent{
    position: relative;
}
.over-img{
    position: absolute;
    top: 50%;
    left: 12.5%;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
    <div class="row parent">
   		<div class="col-lg-12 col-md-12 col-sm-12"> 
        	<div class="bigger">
            	<div class="container pt60 pb30">
                	<div class="row align-items-center">
                    	<div class="col-lg-2 mb30">
                       		&nbsp;
                    	</div>
                       	<div class="col-lg-8 mb30 text-center">
                        	<h1 style="color: #ffffff";><b>LANDLORD / TENANT INFORMATION</b></h1>
                            	<h3 style="color: #ffffff";>
                                	Whether you are a landlord or a tenant<br /> we have loads of information for you!
                               	</h3>
                      	</div>
                        <div class="col-lg-2 mb30">
                        	&nbsp;
             			</div>
                	</div>
              	</div>
			</div>
     	</div>
     	<div class="pt10 pb10 over-img">
            <div class="container">
                <div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4">
                        	<div class="centered">
                        		<a href="https://1-800.lenoxproperty.com/landlord-information" class="entry-thumb">
                        		<h3 style="color: #ffffff";>Landlord Specific Information</h3>
                        	</a>	
                        	</div>
                            <a href="https://1-800.lenoxproperty.com/landlord-information">
                                <img src="{{ asset('assets/img/new-landlord-info.jpg') }}" width="100%" alt="" class="img-fluid">
                            </a>
                    </div>
                    <div class="col-md-2">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb10">
                        	<div class="centered">
                        		<a href="https://1-800.lenoxproperty.com/tenant-information">
                        		<h3 style="color: #ffffff";>Tenant Specific Information</h3>
                        	</a>	
                        	</div>
                            <a href="https://1-800.lenoxproperty.com/tenant-information" class="entry-thumb">
                                <img src="{{ asset('assets/img/new-tenant-info.jpg') }}" width="100%" alt="" class="img-fluid">
                            </a>
                    </div>
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
  	</div>
</div>
@endsection
