@extends('layout.main') 

<title>Find home improvement specialists| 1-800RealEstate.com</title>
<meta name="description" content="Get lots of information and watch videos about how to find the best home improvement specialist then research home improvement companies." />
<meta property="og:email" content="info@1800RealEstate.com" />
<meta property="og:url" content="https://1800RealEstate.com/home-improvement" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://1800RealEstate.com/uploads/logo/1579570407gmlyz-logo.JPG" />
<meta property="og:description" content="Get lots of information and watch videos about how to find the best home improvement specialist then research home improvement companies." />
<meta name="google" content="nositelinkssearchbox" />
<link rel="canonical" href="https://www.1800RealEstate.com/" />
<link rel="shortlink" href="https://www.1800RealEstate.com/" />
<meta property="og:site_name" content="1800RealEstate.com: Real Estate Listings, Homes For Sale, Housing Data" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://1800RealEstate.com/home-improvement" />

@section('page-css')
<style>
.grid-container {
  padding: 40px;
}
@import url('https://fonts.googleapis.com/css?family=Amatic+SC');
.button_container {
	position: absolute;
  left: 0;
  right: 0;
  top: 30%;
}

.description, .link {
  font-family: 'Amatic SC', cursive;
  text-align: center;
}

.description {
	font-size: 35px;
}

.link {
  font-size: 20px;
  margin-top: 30px;
}

.link a {
  color: #000;
  font-size: 25px; 
}

.btn-large {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #1C3881;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
width: 100%;
font-size: 22px;
}

.btn-large:hover {
background: red;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
</style>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div class="container" align="center">
    <div class="row">
        <h1 align="center">Click below to find your Home Improvement Pro today!</h1>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
    <div class="container">
        
      <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/alarm-companies"><button class="btn-large"><span>Alarm Companies</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/appliance-repair"><button class="btn-large"><span>Appliance & Repair</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/carpet-install-cleaning"><button class="btn-large"><span>Carpet Install/Cleaning</span></button></a>
        </div>
      </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/driveway-paving-sealing"><button class="btn-large"><span>Driveway Paving/Sealing</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/electrical-contractors"><button class="btn-large"><span>Electrical Contractors</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/fencing-companies"><button class="btn-large"><span>Fencing Companies</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/garage-door-companies"><button class="btn-large"><span>Garage Doors</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/general-contractors"><button class="btn-large"><span>General Contractors</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/gutter-install-cleaning"><button class="btn-large"><span>Gutter Install/Cleaning</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/handyman"><button class="btn-large"><span>Handymen</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/home-theater"><button class="btn-large"><span>Home Theater</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/hvac-specialists"><button class="btn-large"><span>HVAC Specialists</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/landscaping-tree-service"><button class="btn-large"><span>Landscaping/Tree Service</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/moving-companies"><button class="btn-large"><span>Moving Companies</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/painting-companies"><button class="btn-large"><span>Painting Companies</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/pest-control"><button class="btn-large"><span>Pest Control</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/plumbing-companies"><button class="btn-large"><span>Plumbing Companies</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/pool-companies"><button class="btn-large"><span>Pool Companies</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/roofing-companies"><button class="btn-large"><span>Roofing Companies</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/septic-services"><button class="btn-large"><span>Septic Services</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/siding-companies"><button class="btn-large"><span>Siding Companies</span></button></a>
        </div>
        </div>
        
        <div class="row">
            &nbsp;
        </div>
        
        <div class="row">
        <div class="col-sm-4">
            <a href="./home-improvement/tile-contractors"><button class="btn-large"><span>Tile Contractors</span></button></a>
        </div>
        <div class="col-sm-4">
            <a href="./home-improvement/window-contractors"><button class="btn-large"><span>Window Contractors</span></button></a>
        </div>
        <div class="col-sm-4">
            &nbsp;
        </div>
      </div>

    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection