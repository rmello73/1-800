@extends('layout.main')

@section('title'){{trans('Do I need a real estate agent to sell a property')}}@stop
@section('description', 'A real estate agent can be an invaluable resource to help navigate the home selling process, but do you really need one?  This page gives you the pros and cons of working with a professional real estate agent.')
@section('keywords', 'real estate, agent, sell, selling, professional, home, house, pros, cons')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.bigger{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/agent-sell.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.lower{
  width:100%;
  height:600px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/do-i-need-an-agent-background.png");
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
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
                <div class="row">
                    <div class="col-lg-12"> 
                    	<div class="bigger">
                                <div class="container pt60 pb30" style="color:#ffffff"; text-align:left";>
                                <div class="grid-container-extra mobile-hide">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-12 mb30" style="text-align:center";>
                                            <h1 class="text-white mb20 so">So Do I need a Real Estate Agent in order to sell a property?</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="container pt10 pb10" style="color:#ffffff"; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30 bottomDiv" style="color:#000000; background-color: #ffffff; padding: 40px; text-align:left";>
                                            <p class="decisions">
                                            	Decisions, decisions? Selling a house can be a complicated process and if you haven't done it before, a professional real estate agent can be an invaluable resource to help navigate the process. But a common question asked is whether you have to have an agent?
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
                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                <div class="line"></div>
                <p>&nbsp;</p><p>&nbsp;</p>
                                <div class="container pt60 pb30" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30" style="text-align:left";>
                                            <p class="legal">
                                            	The legal answer to this question is, no you do not need to have a real estate agent to sell a property, however you should understand the pros and cons of working with one. Whether or not you decide to work with an agent or not you should do the best to educate yourself with the process as well as all of the other professionals you will need to help you complete your transaction.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                
                <div class="container pt60 pb30" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                        <h3>What are the first steps?</h3>
                                            <p>
                                            	The first thing that anyone who is thinking about selling their house without an agent should do is research your state laws with regards to what type of paperwork needs to be completed in order to complete the transfer and whether or not your state has any kind of mandatory disclosure laws.  
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                        <h3>&nbsp;</h3>
                                            <p>
                                            	It would be a wise decision to reach out to a real estate attorney in your area before you decide to sell a house 
on your own.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
				<div class="container pt60 pb30" style="color:#000000; background-color:#ffffff;">
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-8 mb30">
                                                <img src="{{ asset('assets/img/agent-sell-woman.jpg') }}" />
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                </div>
                                
                                <div class="container pt60 pb30" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30" style="text-align:left";>
                                            <p class="legal">
                                            	Most people that want to try and sell their property do so because they believe that they can save money.  Before you decide to go this route understand that selling a home is work and will take up a lot of your time.  
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h2>People who decide to sell a house on their own actually make less money</h2>
                                            <p>
                                            	Also understand that many people who decide to sell a house on their own actually make less money because they don't fully understand the market.  The biggest tip we can give anyone who is thinking about selling on their own is to do as much research about the process as you can and put a great team around you to make you successful.   
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <img src="{{ asset('assets/img/money-sell.jpg') }}" />
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <img src="{{ asset('assets/img/resources-sell.jpg') }}" />
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h2>Let our resources and information help you</h2>
                                            <p>
                                            	Below is a list of pro's and con's of working with a real estate agent.  1-800RealEstate.com has lots of resources and information to help you find a great agent or guide you through the process alone if you feel you can do better yourself.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
                                
                                <div style="background-color:#f6f8f5;";>
								<div class="container pt10 pb10" style="color:#000000; background-color:#f6f8f5;" text-align:left";>
									<div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-8 mb30" style="text-align:left";>
                                        	<h3 style="text-align:center";>Pros of working with a real estate agent</h3>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                  	</div>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-2-sell.png') }}" />
                                            <h4>1. Pricing</h4>
                                            <p>
                                            	A good agent has access to the most up to the minute data about recent comparable sales in your neighborhood as well homes you will be competing against.  
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-3-sell.png') }}" />
                                            <h4>2. Marketing</h4>
                                            <p>
                                            	A real estate agent will be able to give you tips on how to best sell your home. They will also arrange to have your pictures and video work done by their team.  Lastly they will market your property in cooperation with other real estate agents to get you in front of a large audience of potential buyers.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#f6f8f5;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-4-sell.png') }}" />
                                            <h4>3. Time</h4>
                                            <p>
                                            	Although it may look easy to sell a house it can take up a lot of your time.  You will need to do a lot of research, set up your photos, videos, and then show the property to prospective buyers.  Then you will need to arrange home inspections and coordinate everything to ensure a smooth closing.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-5-sell.png') }}" />
                                            <h4>4. Qualify the buyers</h4>
                                            <p>
                                            	One of the often overlooked aspects of what a real estate agent does is to ensure that people coming to look at the house or purchase the property have the means to actually close on it.  
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#f6f8f5;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-6-sell.png') }}" />
                                            <h4>5. Understand the laws</h4>
                                            <p>
                                            	Every state has its own set of laws with regards to real estate transfers.  Some states require sellers to fill out certain disclosure paperwork which agents usually know inside and out.  An agent should also know who to contact if there was an encumbrance on the property or if there was any other legal snag which could hold up your sale.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-7-sell.png') }}" />
                                            <h4>6. Negotiations</h4>
                                            <p>
                                            	A good sellers agent is a good negotiator and having someone on your side who is truly looking out for your best interest and understands the nuances of a real estate negotiation can earn you thousands of extra dollars.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#f6f8f5;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; background-color:#ffffff";>
                                        <img src="{{ asset('assets/img/group-8-sell.png') }}" />
                                            <h4>7. Paperwork</h4>
                                            <p>
                                            	A real estate agent will know exactly what kinds of disclosures you and paperwork you will need in order to sell your home.  They will also provide the contract and any addenda needed to sell the home.  They will make sure that you don't lose a potential buyer or risk legal action following the sale by not having the correct paperwork. 
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            &nbsp;
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#ffffff;" text-align:left";>
									<div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-8 mb30" style="text-align:left";>
                                        	<h3 style="text-align:left";>Pros of not working with a real estate agent</h3>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                  	</div>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <img src="{{ asset('assets/img/not-working-with-an-agent-sell.jpg') }}" />
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h4>1. Money -</h4>
                                            <p>
                                            	Let's face it the biggest reason people would rather sell their house on their own is money.  A typical real estate agent charges a 6% commission and in certain red hot markets where properties sell in less than 30 days it can add up to a lot of money. 
                                            </p>
                                            <p>&nbsp;</p><p>&nbsp;</p>
                                            <h4>2. Control -</h4>
                                            <p>
                                            	If you are a sales person or work as a builder, developer, investor or in one of the other services in the real estate business you may feel you could do a better job of selling the home you know better than anyone else.  If you understand the process and know the laws, paperwork and how to market a property this may be a good option for you.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
                                    </div>
    							</div>
    							
    							<div class="row">
                    <div class="col-lg-12"> 
                    	<div class="lower">
                                <div class="container pt60 pb10">
                                <h1 class="text-white mb20" style="text-align:center";>Up to you</h1>
                                    <div class="row">
                                    	<div class="col-lg-2 mb10">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb10">
                                            <b>
                                            	     We would never advise anyone against working with a highly qualified, skilled real estate agent.   The biggest mistake people make when selecting a real estate agent is not picking a good one. 
                                            </b>
                                            <p>&nbsp;</p>
                                            <p>
                                            	Do your research and watch the videos and find someone who you feel is going to represent you the way you deserve.  Ultimately if you feel comfortable with the process and feel that you can get a do as good of a job without an agent than we think you have the choice to decide the best path for your real estate journey.  Good luck!
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb10">
                                            <p>	
                                            	<img src="{{ asset('assets/img/img-3.png') }}" />
                                            	<div id="c3"><img src="{{ asset('assets/img/portrait-1.png') }}"></div>
                                            	<img src="{{ asset('assets/img/img-5.png') }}" />
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb10">
                                    		&nbsp;
                                    	</div>
                                    </div>
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
