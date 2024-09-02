@extends('layout.main')

@section('page-css')
<style>
.top-background{
  width:100%;
  height:700px;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("http://1-800.lenoxproperty.com/assets/img/tenant-top.jpg");
  background-size:cover;
  background-position:center;
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
                                            	Tenant Resources
 											</h3>
 											<h1 style="color: #ffffff; text-align: left;">
 												Information to help tenants find apartments and houses for rent
 											</h1>
 											<br /><br />
                                            <p style="color: #ffffff; text-align: left;">
                                            	Finding a great apartment takes a lot of hard work.  There is a lot to know and we have provided you with a wealth of information as well as an easy way to search for properties with videos on most of the ads.  Whether you are a seasoned veteran or someone who is leasing their first apartment we suggest you read the page about everything a tenant needs to know and then check out all of the other resources we have provided.  The more organized you are with your search the better chance you have of securing a great place!
											</p>
                                        </div>
                                        <div class="col-lg-4 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                    <div class="row">
                	<div class="col-xs-12 col-sm-6 col-md-12 align="center"">
                    	<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/real-estate-properties?category=residential_rental&q=&x=94&y=37', '_blank')" class="btn btn-lg btn-transparent">SEARCH FOR PROPERTY</button>
                 	</div>
               	</div>
   		</div>
                                
    <div class="pt10 pb10" style="background-color: #ececec";>
    	<div class="container">
        	<div class="row">
                <h3 style="color: #1C3881;">Everything a tenant needs to know </h3>
                <h1 style="color: #1C3881;">Information to help tenants find apartments and houses for rent</h1>
                <p>&nbsp;</p>
             	<div class="row" align="center">
              		<button type="button" onclick="window.open('https://realtyri.com/page/everything-to-consider-when-looking-for-an-apartment', '_blank')" class="btn btn-primary btn-solid">READ MORE</button>
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

    <div class=" pt50 pb10" style="text-align: center; color: white; background-color: #1C3881";>
            <div class="container">
                <div class="row">
                <h1>Local Laws</h1>
                <h3>Understand your rights and your responsibilities as either a landlord or a tenant!  We have provided you with links to the actual laws which you should be aware of.</h3><br />
				<div class="row">
                	<div class="col-xs-12 col-sm-6 col-md-12 align="center">
                    	<button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-links-to-local-laws', '_self')" class="btn btn-lg btn-transparent">LOCAL LAWS</button>
                 	</div>
               	</div>
                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
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
                            <h3 style="text-align: left; color: #1C3881;">Utility Information</h3>
                                        <p style="color: #1C3881; text-align: left";>We have provided links to all of the local utility companies and Internet providers in your area.</p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://1-800.lenoxproperty.com/ri-utility-information', '_self')" class="btn btn-primary btn-solid">READ MORE</button>
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
                                <img src="{{ asset('assets/img/utility-info.jpg') }}" width="100%" alt="" class="img-fluid">
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
                                <img src="{{ asset('assets/img/mail-info.jpg') }}" width="100%" alt="" class="img-fluid">
                                <span class="thumb-hover ti-back-right"></span>
                        </div>
                    </div><!--/.col-->
                    <div class="col-md-1">
                		&nbsp;
                	</div>
                <div class="col-md-1">
                		&nbsp;
                	</div>
                    <div class="col-md-4 mb30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="entry-card ">
                            <div class="entry-content">
                            <h3 style="text-align: left; color: #1C3881;">Mail Forwarding</h3>
                                        <p style="color: #1C3881; text-align: left";>When you move don't forget to have your mail forwarded.  You can do it automatically </p>
                                        <p>&nbsp;</p>
                                        <div class="row" align="center">
                                                <button type="button" onclick="window.open('https://moversguide.usps.com/mgo/disclaimer?referral=MG80', '_blank')" class="btn btn-primary btn-solid">READ MORE</button>
                                            </div>
                            </div><!--/entry content-->
                        </div>
                    </div><!--/.col-->
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
