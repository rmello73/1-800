@extends('layout.main')

@section('title'){{trans('How it works')}}@stop
@section('description', '1-800RealEstate.com is a different way to look at the real estate process.  It is free to advertise properties and encourages the use of video on all of our ads.  We aim to educate users about real estate and let them connect directly with either owners or real estate agents.')
@section('keywords', 'Free, real estate, listing, advertising, listings, video, professionals, agents,  mortgage companies, home inspectors, photographers, videographers, insurance agents, real estate agents, and closing attorneys, research, education')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.bottom-background{
  width:100%;
  height:650px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/bottom-background.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.top-image{
  width:100%;
  height:650px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/howitworks-top.png");
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
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
                <div class="row">
                    	<div class="col-lg-12">
                        	<img src="http://1-800.lenoxproperty.com/assets/img/howitworks-top.png" class="responsive" />
                        </div>
                </div>
                
            					<div>
                                    <div class="container pt90 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                            <img src="{{ asset('assets/img/howitworks-1.png') }}" />
                                                <h1 class="header-text">
                                                	Multiple properties
                                                </h1>
                                                <p>
                                                	Real estate agents or property owners can post their residential or commercial properties on 1-800RealEstate for FREE.  We only charge apartment complex's with over 25 units to advertise.
                                                </p>
                                                <img src="{{ asset('assets/img/multiple-properties.jpg') }}" class="responsive" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                
            					<div>
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                            <div id="div1"><img src="{{ asset('assets/img/howitworks-2.png') }}" /></div>
                                                <h1 class="header-text">
                                                	Collection of Ads
                                                </h1>
                                                <p>
                                                	Contractors, mortgage companies, home inspectors, photographers, videographers, insurance agents, real estate agents, and closing attorneys can post ads with videos.
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<img src="{{ asset('assets/img/collection-of-ads.jpg') }}" class="responsive" />
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container pt60 pb30" style="background-color:#ffffff; text-align:left";>
                                    <div class="row align-items-center">
                                    	<div class="col-lg-8 mb30">
											<img src="{{ asset('assets/img/attractive-information.jpg') }}" class="responsive" />
                    					</div>
                                        <div class="col-lg-4 mb30">
                                            <h1 class="large-header">
                                                        <img src="{{ asset('assets/img/howitworks-3.png') }}" />    
                                            </h1>
                                            <h1 class="header-text">Attractive information</h1>
                                            <p>
                                            	Users browse listings with lots of video and get lots of helpful information about real estate.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="container pt60 pb30">
                                    <div class="row">
                                        <div class="col-lg-3 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        <img src="{{ asset('assets/img/howitworks-4.png') }}" />   
                                            </h1>
                                            <h1 class="header-text">Connect directly</h1>
                                            <p>
                                            	Users contact the listing agent or the owner directly to set up a showing or to ask questions
                                            </p>
                                        </div>
                                        <div class="col-lg-9 mb30">
											<img src="{{ asset('assets/img/connect-directly.jpg') }}" class="responsive" />
                    					</div>
                                    </div>
                                </div>
                                
            					<div>
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        <div class="col-lg-6 mb30">
                                        		<img src="{{ asset('assets/img/professionals-available.jpg') }}" class="responsive" />
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <div id="div1"><img src="{{ asset('assets/img/howitworks-5.png') }}" /></div>
                                                <h1 class="header-text">
                                                	Professionals available
                                                </h1>
                                                <p>
                                                	Users can research real estate agents and professionals who can help you with the transaction.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container pt60 pb30 bottom-background">
                                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                    <div class="row align-items-center">
                                    	<div class="col-lg-3 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-6 mb30 text-center join">
                                            <h1>
                                            	Join <span class="text-style-1">1-800RealEstate.com</span> today to have a better search experience and to fill your head with real estate knowledge!
 											</h1>
                                        </div>
                                        <div class="col-lg-3 mb30">
											&nbsp;
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
