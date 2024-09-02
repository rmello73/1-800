<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title') | 1-800RealEstate.com</title>
   	<meta name="description" content="@yield('description')">
  	<meta name="keywords" content="@yield('keywords')">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- load page specific css -->

    <!-- main select2.css -->
    <link href="{{ asset('assets/select2-3.5.3/select2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/select2-3.5.3/select2-bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/nprogress/nprogress.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jssocials.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jssocials-theme-flat.css') }}" />

    <!-- Conditional page load script -->
    @if(request()->segment(1) === 'dashboard')
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.css') }}">
        @endif

                <!-- main style.css -->

        <?php $default_style = get_option('default_style'); ?>
        @if($default_style == 'default')
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset("assets/css/style-{$default_style}.css") }}">
        @endif
	
        @yield('page-css')

        @if(get_option('additional_css'))
            <style type="text/css">
                {{ get_option('additional_css') }}
            </style>
        @endif

        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
        <style>
            /* MEGA MENU STYLE
            ********************************/ 
            .mega-menu-3 {
                padding: 10px 0px ! important;
            	width: 740px;
                border-radius: 0;
                margin-top: 0px;
            }
        	.mega-menu-3 li {
        		display: inline-block;
        		float: left;
        		padding: 3px 0px;
        	}
    		.mega-menu-3 li.mega-menu-column {
    			margin-right: 20px;
    			width: 220px;
    		}
    		.mega-menu-3 .nav-header {
    			padding: 0 !important;
    			margin-bottom: 10px;
    			display: inline-block;
    			width: 100%;
    		}
            .mega-menu-2 {
                padding: 10px 0px ! important;
            	width: 740px;
                border-radius: 0;
                margin-top: 0px;
            }
        	.mega-menu-2 li {
        		display: inline-block;
        		float: left;
        		padding: 3px 0px;
        	}
    		.mega-menu-2 li.mega-menu-column {
    			margin-right: 20px;
    			width: 250px;
    		}
    		.mega-menu-2 .nav-header {
    			padding: 0 !important;
    			margin-bottom: 10px;
    			display: inline-block;
    			width: 100%;
    		}
            .top-text {
              font-family: Roboto;
              font-size: 15px;
              font-weight: normal;
              font-stretch: normal;
              font-style: normal;
              line-height: normal;
              letter-spacing: normal;
              color: #2B308B;
            }
            @media(min-width: 400px) {
                .button-menu-mobile {
                    display:none;
                }
            }
            #navbarSupportedContent1 {
                color: red;
            }
            @media only screen and (max-width: 600px) {
              .navbar-brand {
                  margin-top: -55px;
                }
            }
            #searchTerms {
            	width:100%;
                    border-radius:5px;
                  -moz-border-radius:5px;
                  -webkit-border-radius:5px;
            }
            #category {
            	width:300px;
            	border-radius:5px;
                  -moz-border-radius:5px;
                  -webkit-border-radius:5px;
            }
            .grid-container {
              padding: 10px;
            }
	    .grid-container-admin {
		padding: 40px;
	    }
            .grid-container-bottom {
              padding: 200px;
            }
            #single {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #single:hover {
              top: -10px;
            }
            #apartment {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #apartment:hover {
              top: -10px;
            }
            #condo {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #condo:hover {
              top: -10px;
            }
            #commercial {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #commercial:hover {
              top: -10px;
            }
            #multi {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #multi:hover {
              top: -10px;
            }
            #land {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #land:hover {
              top: -10px;
            }
            #pros {
              position: relative;
              top: 0;
              transition: top ease 0.5s;
            }
            #pros:hover {
              top: -10px;
            }
            .btn-transparent {
                background: transparent;
                color: #F2F2F2;
                -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
                -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
                -o-transition: background .2s ease-in-out, border .2s ease-in-out;
                transition: background .2s ease-in-out, border .2s ease-in-out;
                border: 2px solid #F2F2F2;
                border-radius: 60px;
                width: 251px;
                height: 68px;
            }
            .btn-transparent:hover {
                color: white;
                background-color: rgba(255,255,255,0.2);
            }
            .btn-main {
                background: transparent;
                color: #F2F2F2;
                -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
                -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
                -o-transition: background .2s ease-in-out, border .2s ease-in-out;
                transition: background .2s ease-in-out, border .2s ease-in-out;
                border: 2px solid #F2F2F2;
                border-radius: 60px;
                width: 251px;
                height: 42px;
            }
            .btn-main:hover {
                color: white;
                background-color: rgba(255,255,255,0.2);
            }
            .btn-solid {
                border-radius: 60px;
                width: 251px;
                height: 68px;
            }
            .photo-background {
                background-image: url("https://1-800.lenoxproperty.com/assets/img/photo-bottom.jpg");
            	background-attachment: fixed;
            	background-position: 0 50%;
            	background-repeat: no-repeat;
            	background-size: cover;
            	position: relative;
            }
            .product-slide .step-buttons a {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 15px;
    height: 124px;
    width: 166px;
    text-decoration: none;
    border-radius: 16px;
    box-shadow: 2px 2px 5px 0 rgba(0,0,0,.1);
    background-color: #fff;
    border: solid 1px #ccc;
}
#navbar {
    background-color: #ffffff;
}
.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
.logo-brand {
    margin-top: -40px;
}
.navbar-brand {
              transform: translateX(-50%);
              left: 50%;
              position: absolute;
            }
.admin-container {
    padding-top: 250px;
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 5px;
  padding-bottom: 5px;
  height: 100%;
  margin-bottom: 5px;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
}
.modal-content {
    padding: 20px;
}
.modal-title {
    color: #000;
}
@media(max-width: 600px) {
    .mobile-hide {
        display:none;
    }
}
@media(max-width: 768px) {
    .mobile-hide {
        display:none;
    }
}
.video-responsive{
    overflow:hidden;
    padding-bottom:66.25%;
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
.responsive {
  width: 100%;
  height: auto;
}
@media only screen and (min-width: 601px) and (max-width: 1000px) {
 .desktop-nav, .mobile-nav {
   display: none;
 }
}
@media only screen and (max-width: 600px) {
 .desktop-nav, .tablet-nav {
   display: none;
 }
}
        </style>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container" style="text-align:center;padding:5px;">
    <div class="col-md-12 col-sm-12">
        @if(Auth::check())
            <i class="fa fa-user"></i>
            @lang('app.hi') {{ $logged_user->first_name }}! ({{$logged_user->user_type }})
        &nbsp;
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i>
            Dashboard
        </a>&nbsp;
        <a href="{{ route('logout') }}">
            <i class="fa fa-sign-out"></i>
            @lang('app.logout')
        </a>
		@endif
    </div>
</div>

<nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="logo-brand navbar-brand">
                <a href="{{ route('home') }}">
                    <!--<img src="{{ logo_url() }}">-->
		    <img src="https://1-800.lenoxproperty.com/assets/img/logo.jpg" width="200px" height="100px" />
                </a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown" style="background-color: #ffffff";>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="nav-header">Residential</p></a>
                        <ul class="dropdown-menu mega-menu-3">
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>For Sale</li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=single-family&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new=">Homes for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=condo&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new=">Condos for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?sale_type%5B%5D=multi-family&min_price=&max_price=&min_sqft=&max_sqft=&beds=&attached_bath=&q_new=">Multi-Family for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?land_type%5B%5D=residential&min_price=&max_price=&q_new=">Land for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?category=residential_sale&q=">All Residential for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/open-houses">Open Houses</a></li>
    						    </ul>
						    </li>    
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>For Rent</li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=apartment&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Apartments for Rent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=single-family&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Houses for Rent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=condo&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Condos for Rent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?category=residential_rental&q=">All Residential for Rent</a></li>
    						    </ul>
						    </li> 
						    <li class="mega-menu-column">
						        <ul>                            
    						        <li class="nav-header" style="color:#C31D21";>Information</li>
    						        <li><a href="{{ route('login') }}">List Your Property</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/realestateagent">Agent Finder</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-professionals">Industry Professionals</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/brokers">Mortgage Information</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/home-buyer-information">Buyer Education</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/home-sale-information">Seller Education</a></li>
    						    </ul>
						    </li> 
					    </ul>
				    </li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="nav-header">Commercial</p></a>
						<ul class="dropdown-menu mega-menu-3">
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>For Sale</li>
    								<li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=retail&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Retail for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=multi-family&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Multi-Family for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=industrial&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Industrial for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=healthcare&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Healthcare for Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=hotel&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Hotel for Sale&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?comm_type%5B%5D=mixed use&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Mixed Use For Sale</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?land_type%5B%5D=commercial&min_price=&max_price=&q_new=">Land for Sale&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?category=commercial_sale&q=">All for Sale</a></li>
    						    </ul>
						    </li>    
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>For Rent</li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=retail&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Retail for Rent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=industrial&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Industrial for Rent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?beds=&attached_bath=&type%5B%5D=office&min_price=&max_price=&min_sqft=&max_sqft=&q_new=">Office for Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-properties?category=commercial_rental&q=">All for Rent</a></li>
    						    </ul>
						    </li> 
						    <li class="mega-menu-column">
						        <ul>                            
    						        <li class="nav-header" style="color:#C31D21";>Information</li>
    						        <li><a href="{{ route('login') }}">List Your Property</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/realestateagent">Agent Finder</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/real-estate-professionals">Industry Professionals</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/page/mortgage-information">Mortgage Information</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/home-buyer-information">Buyer Education</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/home-sale-information">Seller Education</a></li>
    						    </ul>
						    </li> 
					    </ul>
				</li>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="nav-header">Seller</p></a>
						<ul class="dropdown-menu mega-menu-3">
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>Seller Information</li>
    						        <li><a href="{{ route('login') }}">List Your Property</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/home-selling-tips">Home Selling Tips</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/what-is-my-home-worth">What's My Home Worth?</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/realestateagent">How to Select an Agent</a></li>
    						        <li><a href="https://1-800.lenoxproperty.com/home-sale-information">Seller Education</a></li>
    						    </ul>
						    </li>
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>Professionals</li>
    						        <li><a href="https://1-800.lenoxproperty.com/photographers">Photographers</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/videographers">Videographers</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/real-estate-attorneys">Real Estate Attorneys</a></li>
                    			    <li><a href="https://1-800.lenoxproperty.com/appraisers">Appraisers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    						    </ul>
						    </li>
					    </ul>
				</li>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="nav-header">Buyer</p></a>
						<ul class="dropdown-menu mega-menu-3">
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>Buyer Information</li>
    						        <li><a href="https://1-800.lenoxproperty.com/buyer-information">Buyer Information</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/open-houses">Open Houses</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/realestateagent">How to Select an Agent</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/home-inspection-companies">Home Inspectors</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/brokers">Mortgage professionals</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/real-estate-attorneys">Real Estate Attorney's</a></li>
                				    <li><a href="https://1-800.lenoxproperty.com/home-buyer-information">Buyer Education&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
    						    </ul>
						    </li>    
					    </ul>
				</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="https://1-800.lenoxproperty.com/realestateagent"><p class="nav-header">Agent Finder</p></a></li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="nav-header">Landlord/Tenant Info</p></a>
						<ul class="dropdown-menu mega-menu-2">
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>Landlord Info</li>
    								    <li><a href="https://1-800.lenoxproperty.com/landlord-all-you-need-to-know">Everything you need to know</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-city-and-town-info">City and Town Info</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-links-to-local-laws">Links to Local Laws</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-lead-and-fire-law">Lead and Fire Law Info</a></li>
                        				<li><a href="https://www.rentometer.com" target="_blank">Did I price my apartment right?</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-screening-tools">Screening Tools&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-eviction">Eviction</a></li>
                        				<li><a href="https://1-800.lenoxproperty.com/ri-free-leases-and-other-documents">Free Leases and Other Documents</a></li>
    						    </ul>
						    </li>    
						    <li class="mega-menu-column">
    						    <ul>
    						        <li class="nav-header" style="color:#C31D21";>Tenant Info</li>
    								<li><a href="https://1-800.lenoxproperty.com/tenant-all-you-need-to-know">Everything you need to know</a></li>
                			 		<li><a href="https://1-800.lenoxproperty.com/ri-utility-information">Utility Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                			 		<li><a href="https://1-800.lenoxproperty.com/ri-links-to-local-laws">Local Laws&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                	                <li><a href="https://1-800.lenoxproperty.com/ri-city-and-town-info">City and Town Info</a></li>
                	                <li><a href="https://www.rentometer.com" target="_blank">Is your rent too high?</a></li>
                			 		<li><a href="https://moversguide.usps.com/mgo/disclaimer?referral=MG80" target="_blank">Get your mail forwarded</a></li>
                			 		<li><a href="https://1-800.lenoxproperty.com/ri-lead-and-fire-law">Lead and Fire Law Info</a></li>
    						    </ul>
						    </li> 
					    </ul>
				</li>
              @if(!Auth::check())
              <li><a href="https://1-800.lenoxproperty.com/user/create"><p class="nav-header">Sign Up</p></a></li>
              @endif
              @if(Auth::check())
                <li><a href="{{ route('logout') }}"><p class="nav-header">Logout</p></a></li>
                @else
                <li>
                    <a href="{{ route('login') }}" >Login</a>
						<!--<a href="#" style="cursor: pointer" data-toggle="modal" data-target="#modal">Login</a>-->
                </li>
                @endif
    </nav>

<!-- Modal HTML Markup -->
<!--<div id="modal" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title">Login</h1>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="email" class="control-label">E-Mail Address</label>
						<div>
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="control-label">Password</label>
						<div>
							<input id="password" type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">
						<div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div>
							<button type="submit" class="btn btn-primary">
								Login
							</button>
							<a class="btn btn-link" href="{{ url('/password/reset') }}">
								Forgot Your Password?
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!-- /.modal -->
</div>
