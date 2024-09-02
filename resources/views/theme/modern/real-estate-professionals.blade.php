@extends('layout.main')

@section('title'){{trans('Research Rhode Island real estate professionals')}}@stop
@section('description', 'Research Rhode Island real estate professionals who can guide you through the home buying  process such as Real Estate agents, mortgage professionals, real estate attorneys, home inspectors, photographers, videographers, insurance agents and appraisers')
@section('keywords', 'Rhode Island, real estate, professionals, real estate agent, mortgage broker, mortgage banker, real estate attorney, home inspector, home inspection, photographer, videographer, insurance agent, appraiser, appraisal')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.bigger{
  width:100%;
  height:700px;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("http://1-800.lenoxproperty.com/assets/img/prof-cover.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.smaller{
  width:100%;
  height:50px;
  position:relative;
  bottom:0;
  text-align:center;
}
.grid-container-top {
    padding-top: 100px;
}
.background01 {
    background-color: #F2F1EF;
}
.btn-primary {
    background-color: #25357f;
    color: #ffffff;
}
.btn-lg {
    color: #25357f;
}
.large-header {
  width: 160px;
  height: 191px;
  font-family: Roboto;
  font-size: 140px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
#div1 {
  position: relative;
  top: -25px;
  border-radius: 10px;
  width: 300px;
  height: 64px;
  z-index: 1;
  background-repeat: no-repeat;
  background-position: top;
  opacity: 0.4;
  font-family: Roboto;
  font-size: 140px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
}
#overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
<div class
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
                <div class="row">
                    <div class="col-lg-12"> 
                    	<div class="bigger">
                                <div class="container pt60 pb30">
                                <div class="grid-container-top mobile-hide">&nbsp;</div>
                                    <div class="row align-items-center">
                                    <div class="col-lg-2 mb30">
                                        	&nbsp;
                    					</div>
                                        <div class="col-lg-8 mb30 text-center">
                                            <h1 class="mb20" style="color: #ffffff";>Research Your Real Estate Team</h1>
                                            <h3 style="color: #ffffff";>"Research doesn't assure definite rewards, but it assures lesser risk." - Amit Kalantri</h3>
                                            <p style="color: #ffffff";>
                                            	Whether you are buying or selling a property it is extremely important to assemble the right team of professionals you will need ensure that your transaction goes smooth.  1-800RealEstate.com encourages you to research the people you are going to be hiring and have provided you with a wealth of knowledge to help you make wise decisions.  We have asked all of the various professionals to provide videos with information about their services as well as helpful tips to help you better understand the process and educated decisions.  Below are some of the main players you will encounter on your real estate journey along with links to their individual pages.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                    					</div>
                                    </div>
                                </div>
						</div>
                    </div>
                </div>
                <div class="grid-container-top mobile-hide">&nbsp;</div>
            					<div id="div1">01</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h1>
                                                	<a href="https://1-800.lenoxproperty.com/realestateagent">Real Estate Agent</a>
                                                </h1>
                                                <p>
                                                	Not all real estate agents are the same, so finding out as much as you can about your potential agent can make a big difference in your experience as a seller, buyer, landlord, or tenant. You want somebody you can trust and who has experience with both the neighborhoods and specific type of transaction you are looking to engage in.
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<a href="https://1-800.lenoxproperty.com/realestateagent"><img src="{{ asset('assets/img/agent-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container pt60 pb30" style="background-color:#ffffff; text-align:left";>
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											<a href="https://1-800.lenoxproperty.com/brokers"><img src="{{ asset('assets/img/broker-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                    					</div>
                                        <div class="col-lg-6 mb30">
                                            <h1 class="large-header">
                                                        02    
                                            </h1>
                                            <h1><a href="https://1-800.lenoxproperty.com/brokers">Mortgage Professional</a></h1>
                                            <p>
                                            	Finding a mortgage lender involves more than just getting a good interest rate.  A refinance is different than a purchase and rate alone doesn't always tell the story. Finding a lender who is willing to provide financial education and willing to take the time to ensure that their buyers financial health is in order should be a must when researching who you feel comfortable with.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <div id="div1">03</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h1>
                                                	<a href="https://1-800.lenoxproperty.com/real-estate-attorneys">Real Estate Attorney</a>
                                                </h1>
                                                <p>
                                                	It is always important to have a completely objective third party acting on your behalf.  Having a lawyer who specializes in real estate law is highly recommended. Real property law is complicated, and a real estate lawyer is trained to deal with the unique problems and issues that can, and often do arise for home sellers and buyers.
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<a href="https://1-800.lenoxproperty.com/real-estate-attorneys"><img src="{{ asset('assets/img/attorney-prof.jpg') }}" width="550px" height="auto" /></a>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="container pt60 pb30">
                                    <div class="row">
                                    	<div class="col-lg-6 mb30">
											<a href="https://1-800.lenoxproperty.com/home-inspection-companies"><img src="{{ asset('assets/img/inspector-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                    					</div>
                                        <div class="col-lg-6 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        04    
                                            </h1>
                                            <h1><a href="https://1-800.lenoxproperty.com/home-inspection-companies">Home Inspectors</a></h1>
                                            <p>
                                            	Buying a home is a major investment. The home inspection provides a big-picture analysis of the state of the prospective home. The inspection report gives the homeowner the opportunity to understand what to monitor, what requires maintenance and how to ensure their home is safe and sound.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="div1">05</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h1>
                                                	<a href="https://1-800.lenoxproperty.com/home-improvement">Home Improvement Pro's</a>
                                                </h1>
                                                <p>
                                                	The most common time people look for contractors is when they are buying or selling a house.  You're not ordering a cup of coffee to go. While Website ratings are helpful, you really need to do your homework before hiring a contractor.  Click here to view every type of home improvement professional imaginable!
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<a href="https://1-800.lenoxproperty.com/home-improvement"><img src="{{ asset('assets/img/home-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="container pt60 pb30">
                                    <div class="row">
                                    	<div class="col-lg-6 mb30">
											<a href="https://1-800.lenoxproperty.com/photographers"><img src="{{ asset('assets/img/photographer-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                    					</div>
                                        <div class="col-lg-6 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        06   
                                            </h1>
                                            <h1><a href="https://1-800.lenoxproperty.com/photographers">Photographer</a></h1>
                                            <p>
                                            	Humans are visual by nature.  We process images 60,000 times faster than text and recall images with 90% accuracy. Now more than ever, choosing the right photographer is an essential step in selling your home.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="div1">07</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h1>
                                                	<a href="https://1-800.lenoxproperty.com/videographers">Videographer</a>
                                                </h1>
                                                <p>
                                                	Pay a pro to get that Wow  factor, and you're more likely to impress buyers and sell the home quickly, possibly even for a higher price. Making your own listing videos is like changing your own oil. It sounds like an easy money-saver, until you get halfway into it and realize just how complicated and time-consuming it really is.
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<a href="https://1-800.lenoxproperty.com/videographers"><img src="{{ asset('assets/img/videographer-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="container pt60 pb30">
                                    <div class="row">
                                    	<div class="col-lg-6 mb30">
											<a href="https://1-800.lenoxproperty.com/insurance-agent"><img src="{{ asset('assets/img/insurance-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                    					</div>
                                        <div class="col-lg-6 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        08   
                                            </h1>
                                            <h1><a href="https://1-800.lenoxproperty.com/insurance-agent">Insurance Professional</a></h1>
                                            <p>
                                            	Finding the best insurance company only takes a bit of homework and research to ensure long-lasting peace of mind. The first thing to understand is that researching insurance is more than simply finding the lowest price. There is no one size fits all option when it comes to coverage. You need to determine the amount of coverage you will need to rebuild your structure and replace your belongings.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="div1">09</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h1>
                                                	<a href="https://1-800.lenoxproperty.com/appraisers">Appraisers</a>
                                                </h1>
                                                <p>
                                                	The biggest mistake that any person selling their property can make is overpricing it. A home appraisal is an UNBIASED report on the worth of a house in the fair market, performed by a trained and licensed individual.
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<a href="https://1-800.lenoxproperty.com/appraisers"><img src="{{ asset('assets/img/appraiser-prof.jpg') }}" width="550px" height="auto" class="responsive" /></a>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
    </div>
@endsection
