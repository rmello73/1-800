@extends('layout.main')

@section('page-css')
<style>
.top-background{
  width:100%;
  height:700px;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("http://1-800.lenoxproperty.com/assets/img/landlord-top.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.blue-background {
  width:100%;
  height:500px;
  background-color: #1C3881;
  position:relative;
}
.smaller{
  width:100%;
  height:50px;
  position:relative;
  bottom:0;
  text-align:left;
}
.grid-container-top {
    padding-top: 300px;
}
.grid-container-extra {
    padding-top: 100px;
}
.nav-side {
    position: absolute;
    left: 0;
    right; 0;
    
    display: block;
    width: 40px;
    padding: 4px 0;
    height: 100px;
    z-index: 100;
    color:#ffffff !important;
}

.nav-side a {
    font-family: helvetica;
    color:#ffffff !important;
    background-color: rgba(0, 0, 0, 0.3) !important;   
    padding: 2px; 4px;
    display: block;
    float: left;
    text-decoration: none;
    margin-right: 4px;
    
    width: 100%;
    
	font-size:20px;
	text-align:center;
}

.nav-side a:hover,
.nav-side a.active {
    color:gray; 
}

.fixed {
    position: fixed;
    top: 0
}
.background01{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/bi1.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.underline {
  text-decoration: underline;
  color: #000000;
}
#c3{
width:100px;
height:50px;
border:#000 1px solid;
top:200px;
left:200px;
position:absolute;
}
.decisions {
  font-family: Roboto;
  font-size: 20px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.6;
  letter-spacing: normal;
  color: #000000;
}
.legal {
  font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.75;
  letter-spacing: normal;
  color: #000000;
}
.so {
  font-family: Roboto;
  font-size: 34px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.bottomDiv{
       position:relative;
       top:200px;
       box-shadow: 1px 3px #ececec;
    }
.line {
  width: 636px;
  height: 1px;
  object-fit: contain;
  opacity: 0.38;
  border: solid 1px #979797;
}
.real {
  font-family: Roboto;
  font-size: 24px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.63;
  letter-spacing: normal;
  color: #ffffff;
  text-align: left;
}
.line {
  width: 479px;
  height: 1px;
  object-fit: contain;
  border: solid 1px #ffffff;
}
.how-it-works {
  font-family: Roboto;
  font-size: 30px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
}
.join {
  font-family: Roboto;
  font-size: 30px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.join .text-style-1 {
  font-weight: bold;
  color: #25357f;
}
.header-text {
  font-family: Roboto;
  font-size: 30px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 0.87;
  letter-spacing: normal;
  color: #25357f;
}
.btn-solid {
    background-color: #1C3881;
}
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
        
        <div class="container pt30 pb20 top-background">
                                    <div class="row align-items-center">
                                    	<div class="col-lg-4 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30 text-center">
                                            <h3 style="color: #ffffff; text-align: left;">
                                            	Landlord Resources
 											</h3>
 											<h1 style="color: #ffffff; text-align: left;">
 												Being a landlord is not as easy as people think.
 											</h1>
 											<br /><br />
                                            <p style="color: #ffffff; text-align: left;">
                                           		There is a lot to know and we have provided you with a wealth of information as well as an easy way to post your properties with videos that tenants want to see.  Whether you are a seasoned veteran or someone who is leasing their first property we suggest you read the page about everything a landlord needs to know and then check out all of the other resources we have provided.	
											</p>
                                        </div>
                                        <div class="col-lg-4 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                    <div class="row">
                	<div class="col-xs-12 col-sm-6 col-md-12 align="center"">
                    	<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/user/create', '_self')" class="btn btn-lg btn-transparent">POST YOUR PROPERTY</button>
                 	</div>
               	</div>
   		</div>
                                
    <div class="pt10 pb10" style="background-color: #ececec";>
    	<div class="container">
        	<div class="row">
                <h3 style="color: #1C3881;">Everything a landlord needs to know </h3>
                <h1 style="color: #1C3881;">How to advertise, price and manage your apartment.</h1>
                <p>&nbsp;</p>
             	<div class="row" align="center">
              		<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/landlord-all-you-need-to-know', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
              	</div>
            </div>
        </div>
	</div>
        
    <div class=" pt50 pb10">
            <div class="container">
               	<div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Lead Paint and Fire Law Information</h3>
                                        <p style="color: #1C3881; text-align: left";>Lead Paint exposure can cause irreversible brain damage and is something everyone should be aware of.  Each state has different fire codes and they are put there for tenant safety.  Whether you are a tenant or a landlord you should understand these laws.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-lead-and-fire-law', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-5 mb30 wow fadeInUp" data-wow-delay=".3s">
                    <p>&nbsp;</p>
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/lead-paint.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
	</div>
	
	<div class=" pt50 pb10">
            <div class="container">
               	<div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                	<div class="col-md-5 mb30 wow fadeInUp" data-wow-delay=".3s">
                    <p>&nbsp;</p>
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/landlord-laws.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Local Laws</h3>
                                        <p style="color: #1C3881; text-align: left";>Understand your rights and your responsibilities as either a landlord or a tenant!  We have provided you with links to the actual laws which you should be aware of.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-screening-tools', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
	
	    <div class=" pt10 pb10">
            <div class="container">
                <div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">RENTAL ESTIMATE REPORTS</h3>
                <h1 style="text-align: left; color: #1C3881;">Is Your Rental Priced Correctly?</h1>
                                        <p style="text-align: left";>By looking at the rent amount at comparable properties in your area and staying up-to-date on market trends, you’ll make sure you price your rental correctly.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://www.rentometer.com/', '_blank')" class="btn btn-primary btn-solid">CHECK YOUR PRICE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-5 mb30 wow fadeInUp" data-wow-delay=".3s">
                    <p>&nbsp;</p><p>&nbsp;</p>
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/rent-estimate.png') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
                		
	<div class=" pt50 pb10">
            <div class="container">
               	<div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                	<div class="col-md-5 mb30 wow fadeInUp" data-wow-delay=".3s">
                    <p>&nbsp;</p>
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/screening-tools.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Screening Tools</h3>
                                        <p style="color: #1C3881; text-align: left";>Choosing the right tenant is hard work and the wrong choice can cost you thousands.  Make sure you run each of your tenants information through the tools provided and check each and every reference!</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-screening-tools', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
		
	<div class=" pt50 pb10">
            <div class="container">
               	<div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Eviction Information</h3>
                                        <p style="color: #1C3881; text-align: left";>Hopefully you never have to go through the painful eviction process.  In the event that you do we want you to know everything about the process and have also provided you with all the forms you will need along the way.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-eviction', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-5 mb30 wow fadeInUp" data-wow-delay=".3s">
                    <p>&nbsp;</p>
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/eviction-today.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
	</div>
	
	<div class=" pt10 pb10">
            <div class="container">
                <div class="row">
                <div class="col-md-1">
                		&nbsp;
                	</div>
                	<div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="entry-card">
                                <img src="{{ asset('assets/img/forms-pack.png') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-2">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Free Leases and Rental Forms</h3>
                                        <p style="text-align: left";>We have provided you with free leases and forms for you to complete your rental. You are welcome to download them to use or simply look them over for ideas.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-free-leases-and-other-documents', '_self')" class="btn btn-primary btn-solid">VIEW FORMS</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
	
	<div class=" pt10 pb10">
            <div class="container">
                <div class="row">
                <h3 style="color: #1C3881;">City and Town Information</h3>
                <h1 style="color: #1C3881;">Click the links to get local information about every city and town in Rhode Island and Massachusetts</h1>
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <a href="https://1-800.lenoxproperty.com/ri-city-and-town-info" class="entry-thumb">
                                <img src="{{ asset('assets/img/ri.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h4 class="entry-title text-capitalize" align="center">
                                    <a href="https://1-800.lenoxproperty.com/ri-city-and-town-info">
                                        Rhode Island
                                    </a>
                                </h4>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-2">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="entry-card">
                            <a href="https://1-800.lenoxproperty.com/ma-city-and-town-info" class="entry-thumb">
                                <img src="{{ asset('assets/img/ma.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h4 class="entry-title text-capitalize" align="center">
                                    <a href="https://1-800.lenoxproperty.com/ma-city-and-town-info">
                                        Massachusetts
                                    </a>
                                </h4>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                </div>
            </div>
        </div>
        
</div>
@endsection

@section('page-js')
<script>
$('.nav-side a').on('click', function() {

    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

    $('body,html').animate({
        scrollTop: scrollPoint
    }, 500);

    return false;

})

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('.nav-side').addClass('fixed');
        $('.wrapper section').each(function(i) {
            if ($(this).position().top <= windscroll - 20) {
                $('nav-side a.active').removeClass('active');
                $('nav-side a').eq(i).addClass('active');
            }
        });

    } else {

        $('.nav-side').removeClass('fixed');
        $('.nav-side a.active').removeClass('active');
        $('.nav-side a:first').addClass('active');
    }

}).scroll();
</script>
@endsection
