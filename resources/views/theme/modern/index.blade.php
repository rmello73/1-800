@extends('layout.main') @section('page-css')
<link rel="stylesheet"
        href="{{ asset('assets/cubeportfolio/css/cubeportfolio.min.css') }}">
<style>
html {
  scroll-behavior: smooth;
}
.back-to-top {
  position: fixed;
  display: block;
  width: 50px;
  height: 50px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  bottom: 10px;
  right: 10px;
  background: #eee;
  color: #333;
  line-height: 50px;
  opacity: 0;
  visibility: hidden;
  z-index: 9;
  -webkit-transition: -webkit-transform 0.2s ease-out;
  -moz-transition: -moz-transform 0.2s ease-out;
  transition: transform 0.2s ease-out;
  transform: translate3d(0, 15px, 0);
  -webkit-transform: translate3d(0, 15px, 0); }
  .back-to-top i {
    display: block;
    font-size: 25px;
    line-height: 50px;
    text-align: center; }
  .back-to-top:hover, .back-to-top:focus {
    color: #4782d3; }
  .back-to-top.show {
    opacity: 1;
    visibility: visible;
    transform: translate3d(0, 0px, 0);
    -webkit-transform: translate3d(0, 0px, 0); }
#searchTerms {
	width:100%;
        border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
.img-logo {
	max-width:100%;
	height:28px;
}
h1-top, h2-top, h3-top {
    color:#ffffff;
}
h1.top {
    font-family: "Times New Roman", Times, serif;
        font-size:2.8em;
        font-weight: bold;
        color: #ffffff;
	/*text-shadow: -1px -1px 0 #081F51, 1px -1px 0 #081F51, -1px 1px 0 #081F51,
		1px 1px 0 #081F51;*/
}
h1.why {
        font-family: "Times New Roman", Times, serif;
        font-size:2.8em;
        font-weight: bold;
        color:#081F51;
}
h2.bottom {
        font-size:1.6em;
        font-weight: bold;
        color:#081F51;
}
h1.large {
        font-family: "Times New Roman", Times, serif;
        font-size:3.0em;
        font-weight: bold;
        color:#fff;
}
h3.why {
        font-family: "Times New Roman", Times, serif;
        font-size:1.8em;
        font-weight: bold;
        color:#081F51;
}
.bottom-spacing {
    padding-top: 10px;
}
select option {
  background-color: #23326a;
}
#main-category {
    width:300px;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
}
.dropdown-white {
    background: transparent !important;
    color: #ffffff;
    border: 1px solid white;
    height: 42px;
}
input::-webkit-input-placeholder {
    color: #ffffff !important;
}
.tagline {
  font-family: Roboto;
  font-size: 20px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.grid-container-top {
    padding-top: 20px;
}
.grid-container-arrow {
    padding-top: 250px;
}
.bottom-header {
    font-family: Roboto;
    font-size: 20px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.3;
    letter-spacing: normal;
    color: #42438e;
}
div.col-sm-7.five-three {
    width: 60% !important;
}

div.col-sm-5.five-two {
    width: 40% !important;
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px;
  padding-bottom: 15px;
}
.top-rectangle:hover {
     box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
}
</style>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div class="modern-top-intoduce-section">

<div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="modern-top-hom-cat-section">
                        <div class="modern-home-search-bar-wrap">
                            <div class="search-wrapper">
                                <div class="grid-container-top mobile-hide">&nbsp;</div>
                                <h1 class="top">FIND EVERYTHING REAL ESTATE!</h1>
                                <div class="grid-container mobile-hide">&nbsp;</div>
				                <div class="col-md-12">
				                    <div class="row mobile-hide">
                                        <div class="col-xs-5">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div id="single">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=single-family&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new="><img src="{{ asset('assets/img/single.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff";>Houses</p></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div id="apartment">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties?category=residential_rental&q="><img src="{{ asset('assets/img/apartment.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Apartments</p></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div id="commercial">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties?category=commercial_sale&q="><img src="{{ asset('assets/img/commercial.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Commercial</p></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div id="condo">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=condo&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new="><img src="{{ asset('assets/img/condo.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Condos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div id="multi">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=multi-family&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new="><img src="{{ asset('assets/img/multi.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Multi-Family</p></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div id="land">
                                				        <a href="http://1-800.lenoxproperty.com/real-estate-properties/land-sales"><img src="{{ asset('assets/img/land.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Land</p></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div id="pros">
                                				        <a href="https://1-800.lenoxproperty.com/real-estate-professionals"><img src="{{ asset('assets/img/pros.png') }}" height="50px" width="50px" />
                                				    </div>
                                				    <p style="color:#ffffff">Professionals</p></a>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
        				</div>
                        <div class="grid-container mobile-hide">&nbsp;</div>
				        <div class="col-md-12">
                            <form class="form-inline" action="{{ route('listing') }}" method="get">
                                <select class="form-control dropdown-white" name="category" id="main-category">
                                            <option value="">Property Type</option>
                                            <option name="residential_rental" id="category_residential" value="residential_rental">Residential Properties for Rent</option>
                                            <option name="residential_sale" id="category_residential_sale" value="residential_sale">Residential Properties for Sale</option>
                                            <option name="commercial_rental" id="category_commercial" value="commercial_rental">Commercial Properties for Rent</option>
                                            <option name="commercial_sale" id="category_commercial_sale" value="commercial_sale">Commercial Properties for Sale</option>
                                            <option name="land_sale" id="category_land_sale" value="land_sale">Land for Sale</option>
                                </select>
                                <div class="form-group">
						            <input type="text" id="searchTerms" class="form-control dropdown-white"  name="q" value="{{ request('q') }}" placeholder="Enter Address, City or Zip Code" />
					            </div>
                                <div class="form-group">
                                    <input type="image" src="{{ asset('assets/img/new-search.jpg') }}" />
                                </div>
                            </form>
                            <div class="grid-container-arrow mobile-hide">&nbsp;</div>
                            <div align="center" class="tagline">THE REAL ESTATE SUPERSITE</div><br />
                            <div align="center"><a href="#why"><img src="{{ asset('assets/img/downarrow@2x.png') }}" /></a></div>
                            <div class="bottom-spacing mobile-hide">&nbsp;</div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
</div>

        <div class="container pt60 pb60">
            <h1 style="color: #42438e";>A One Stop Shop For Everything Real Estate
                <span class="pull-right">
                    <a href="https://1-800.lenoxproperty.com/how-it-works">
                    	<img type="submit" src="{{ asset('assets/img/how-it-works.jpg') }}" />
                    </a>
                </span>
            </h1>
            <br /><br />
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="clearfix">
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".150ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/ads.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize bottom-header">Post Ads For Free</h4>
                                Real estate agents or property owners can post their Residential or Commercial properties for FREE.
                            </div>
                        </div>
                        <br />
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".250ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/videos.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize bottom-header">More Video</h4>
                                We encourage creative videos of both the properties and the neighborhoods on every type of property listing.
                            </div>
                        </div>
                        <br />
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".150ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/empowerment.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize bottom-header">Empowerment</h4>
                                We give both buyers and sellers the freedom to decide the best path for them to buy, sell or lease Real Estate
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="col-lg-6 mb30">
                    <div id="js-grid-slider-thumbnail" class="cbp">
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                	<div class="video-responsive">
                                		<iframe width="650" height="350" src="https://www.youtube.com/embed/lhe7T_NNhFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=" pt10 pb10">
            <div class="container">
                <div class="row">
                <div class="col-md-1" style="max-width:6%;flex-basis:6%";>
                		&nbsp;
                	</div>
                    <div class="col-md-3 mb30 wow fadeInUp top-rectangle" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <a href="https://1-800.lenoxproperty.com/home-buyer-information" class="entry-thumb">
                                <img src="{{ asset('assets/img/buyer-information.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h4 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/home-buyer-information">
                                        Buyer Information
                                    </a>
                                </h4>
                                <p>
                                	<a href="https://1-800.lenoxproperty.com/home-buyer-information" class="entry-thumb">
                                		Educate yourself about the property buying process
                                	</a>
                                </p>
                                <div class="text-right">
                                    <a href="https://1-800.lenoxproperty.com/home-buyer-information" class="btn-link btn">Read More</a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-3 mb30 wow fadeInUp top-rectangle" data-wow-delay=".3s">
                        <div class="entry-card">
                            <a href="https://1-800.lenoxproperty.com/home-sale-information" class="entry-thumb">
                                <img src="{{ asset('assets/img/seller-information.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h4 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/home-sale-information">
                                        Seller Information
                                    </a>
                                </h4>
                                <p>
                                	<a href="https://1-800.lenoxproperty.com/home-sale-information" class="entry-thumb">
                                		Educate yourself about the property selling process
                                	</a>
                                </p>
                                <div class="text-right">
                                    <a href="https://1-800.lenoxproperty.com/home-sale-information" class="btn-link btn">Read More</a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
					<div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-3 mb30 wow fadeInUp top-rectangle" data-wow-delay=".4s">
                        <div class="entry-card">
                            <a href="https://1-800.lenoxproperty.com/landlord-tenant-information" class="entry-thumb">
                                <img src="{{ asset('assets/img/landlord-tenant-information.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h4 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/landlord-tenant-information">
                                        Landlord / Tenant Information
                                    </a>
                                </h4>
                                <p>
                                	<a href="https://1-800.lenoxproperty.com/landlord-tenant-information" class="entry-thumb">
                                		Educate yourself about the renting property process
                                	</a>
                                </p>
                                <div class="text-right">
                                    <a href="https://1-800.lenoxproperty.com/landlord-tenant-information" class="btn-link btn">Read More</a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1" style="max-width:12.499999995%;flex-basis:12.499999995%";>
                		&nbsp;
                	</div>
                </div>
            </div>
        </div><!--news-->

        <div class="container pt60 pb60" style="background-color: #D8D3C5"; id="why">
            <h1 align="center" style="color: #000000";>Find it all on the<br />
                Real Estate Supersite!</h1>
            <p align="center">Real estate agents or property owners can post their<br /> Residential or Commercial properties for FREE.</p>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 five-three">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=single-family&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new=">
                                        <img src="{{ asset('assets/img/houses.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=condo&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new=">
                                    <img src="{{ asset('assets/img/condos.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/real-estate-properties/land-sales">
                                    <img src="{{ asset('assets/img/land2.png') }}" width="200px" height="auto" />
                                    </a>
                                </div><!-- end inner row -->
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 five-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/real-estate-properties?category=residential_rental&q=">
                                    <img src="{{ asset('assets/img/apartments.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-6">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-properties?category=commercial_sale&q=">
                                    <img src="{{ asset('assets/img/investment.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                            </div><!-- end inner row -->
                        </div>
                    </div><!-- end outer row -->
                </div>
            <p>&nbsp;</p>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 five-three">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/real-estate-properties?category=commercial_sale&q=">
                                    <img src="{{ asset('assets/img/commercial2.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="https://1-800.lenoxproperty.com/realestateagent">
                                    <img src="{{ asset('assets/img/agents.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <a href="http://1-800.lenoxproperty.com/home-improvement">
                                    <img src="{{ asset('assets/img/home-improvement.png') }}" width="200px" height="auto" />
                                    </a>
                                </div><!-- end inner row -->
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 five-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 col-xs-6">
                                    <a href="https://1-800.lenoxproperty.com/brokers">
                                    <img src="{{ asset('assets/img/mortgages.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-6">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-professionals">
                                    <img src="{{ asset('assets/img/professional.png') }}" width="200px" height="auto" />
                                    </a>
                                </div>
                            </div><!-- end inner row -->
                        </div>
                    </div><!-- end outer row -->
                </div>
        </div>

        <div class="container pt60 pb60">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="clearfix">
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".150ms">
                            <div class="d-flex mr-3">

                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize" style="font-size: 28px";>Knowledge is Power</h4>
                                <p style="font-weight: bold; color: #000000";>Get an insider's look from professionals about every aspect of buying or selling real estate.</p>
                            </div>
                        </div>
                        <a href="https://1-800.lenoxproperty.com/how-it-works">
                            <img type="submit" src="{{ asset('assets/img/start-here.jpg') }}" />
                        </a>
                    </div>
                </div>
                <br />
                <div class="col-lg-6">
                    <div class="clearfix">
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".150ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/laptop.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize"><a href="https://1-800.lenoxproperty.com/buyer-information">Buying</a> and <a href="https://1-800.lenoxproperty.com/home-selling-tips">Selling</a> Tips&nbsp;<img src="{{ asset('assets/img/arrow-1.png') }}" width="27px" height="16px" /></h4>
                                Extensive information about everything you need to know when buying or selling Real Estate
                            </div>
                        </div>
                        <br />
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".250ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/clipboard.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize">The Process&nbsp;<img src="{{ asset('assets/img/arrow-1.png') }}" width="27px" height="16px" /></h4>
                                Information and loads of videos about the professionals needed to help with everything Real Estate.
                            </div>
                        </div>
                        <br /><br />
                        <div class="media mb30 wow fadeInUp" data-wow-delay=".150ms">
                            <div class="d-flex mr-3 pull-left">
                                <img src="{{ asset('assets/img/hands.png') }}" />
                            </div>
                            <div class="media-body">
                                <h4 class="mt-0 mb10 text-capitalize">Transparency&nbsp;<img src="{{ asset('assets/img/arrow-1.png') }}" width="27px" height="16px" /></h4>
                                We believe that people want to talk directly to the person who is advertising the property for Sale or Rent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<br />
@endsection @section('page-js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
<script>
$( "#searchTerms" ).autocomplete({
	source: [ "providence", 
		"cranston", 
		"central falls", 
		"newport", 
		"barrington", 
		"bristol", 
		"burrillville", 
		"charlestown", 
		"coventry", 
		"cumberland", 
		"east greenwich", 
		"east providence", 
		"attleboro", 
		"exeter", 
		"hopkinton", 
		"jamestown", 
		"johnston", 
		"lincoln", 
		"little compton", 
		"narragansett", 
		"north kingstown", 
		"pawtucket", 
		"north providence", 
		"north smithfield", 
		"portsmouth", 
		"Richmond", 
		"scituate", 
		"smithfield", 
		"south kingstown", 
		"tiverton", 
		"warren", 
		"warwick", 
		"west warwick", 
		"westerly", 
		"woonsocket", 
		"taunton", 
		"abington", 
		"webster", 
		"whitinsville", 
		"grafton", 
		"fall river", 
		"swansea", 
		"westport", 
		"dartmouth", 
		"new bedford", 
		"freetown", 
		"seekonk", 
		"Rehoboth", 
		"Raynham", 
		"lakeville", 
		"middleborough", 
		"norton", 
		"plainville", 
		"wrentham", 
		"foxboro", 
		"bridgewater", 
		"east bridgewater", 
		"west bridgewater", 
		"brockton", 
		"whitman", 
		"easton", 
		"hanson", 
		"halifax", 
		"oxford", 
		"southbridge", 
		"millbury", 
		"medfield", 
		"medway", 
		"millis", 
		"walpole", 
		"canton", 
		"stoughton", 
		"Randolph", 
		"holbrook", 
		"avon", 
		"Rockland", 
		"hanover", 
		"plympton", 
		"plymouth", 
		"carver", 
		"Rochester", 
		"fairhaven", 
		"marion", 
		"mattapoisett", 
		"norwood", 
		"bellingham", 
		"milford", 
		"hopedale", 
		"mendon", 
		"uxbridge", 
		"upton", 
		"hopkinton", 
		"holliston", 
		"dover", 
		"north attleboro", 
		"millville", 
		"blackstone", 
		"wakefield", 
		"quincy", 
		"braintree", 
		"boston", 
		"mansfield", 
		"cambridge", 
		"south boston", 
		"somerville", 
		"dorchester", 
		"brookline", 
		"jamaica plain", 
		"newton", 
		"chestnut hill", 
		"waltham", 
		"watertown", 
		"belmont", 
		"weymouth", 
		"needham", 
		"wellesley", 
		"dedham", 
		"somerset", 
		"salem", 
		"marblehead", 
		"beverly", 
		"swampscott", 
		"franklin", 
		"brimfield", 
		"middletown", 
		"lowell", 
		"south dartmouth", 
		"foster", 
		"gloucester", 
		"melrose"
		]
});
</script>

<script>

        $(document).ready(function(){
            $(".themeqx_new_regular_ads_wrap").owlCarousel({
                loop: true,
                autoplay : true,
                autoplayTimeout : 2000,
                margin:10,
                autoplayHoverPause : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:3,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:true
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });
        $(document).ready(function(){
            $(".home-latest-blog").owlCarousel({
                loop: true,
                autoplay : true,
                autoplayTimeout : 3000,
                margin:10,
                autoplayHoverPause : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:3,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:true
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });

    </script>
<script>
        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_state') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('<option value="" selected> @lang('app.select_state') </option>');
                    $('#state_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }
        }

        $(document).ready(function(){
            $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#loaderListingIcon').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_state_by_country') }}',
                    data : { country_id : country_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'country_to_state');
                    }
                });
            });

	    $('#save_as_favorite').click(function(){
                var selector = $(this);
                var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '{{ route('save_ad_as_favorite') }}',
                    data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.status == 1){
                            selector.html(data.msg);
                        }else {
                            if (data.redirect_url){
                                location.href= data.redirect_url;
                            }
                        }
                    }
                });
            });
        });
    </script>

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script> 

        <!-- load cubeportfolio -->
        <script type="text/javascript" src="{{ asset('assets/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
        <script>
            //testimonials
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-slider-testimonials').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: true,
                    showPagination: true,
                    rewindNav: true,
                    scrollByPage: false,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                            width: 0,
                            cols: 1
                        }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'default'
                });
            })(jQuery, window, document);
            //thumbnail slider
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-slider-thumbnail').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: false,
                    showPagination: false,
                    rewindNav: true,
                    scrollByPage: true,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                            width: 0,
                            cols: 1
                        }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 400,
                    plugins: {
                        slider: {
                            pagination: '#js-pagination-slider',
                            paginationClass: 'cbp-pagination-active'
                        }
                    }
                });
            })(jQuery, window, document);
        </script>

<script>
if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
</script>

@endsection


