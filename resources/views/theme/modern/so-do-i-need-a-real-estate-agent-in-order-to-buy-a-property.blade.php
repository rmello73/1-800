@extends('layout.main')

@section('title'){{trans('Do I need a real estate agent to buy a property')}}@stop
@section('description', 'A real estate agent can be an invaluable resource to help navigate the home buying process, but do you really need one?  This page gives you the pros and cons of working with a professional real estate agent.')
@section('keywords', 'real estate, agent, buy, buying, purchase, professional, home, house, pros, cons')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.bigger{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/do-i-need-an-agent.png");
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
                                            <h1 class="text-white mb20 so">So Do I need a Real Estate Agent in order to buy a property?</h1>
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
 												Decisions, decisions? Buying a house can be a complicated process and if you haven't done it before, a professional real estate agent can be an invaluable resource to help navigate the process. But a common question asked is whether you have to have an agent?
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
                                            	The legal answer to this question is, no you do not need to have a real estate agent to purchase a property, however you should understand the pros and cons of working with one. Whether or not you decide to work with an agent or not you should do the best to educate yourself with the process as well as all of the other professionals you will need to help you complete your transaction.
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
                                        <h3>What If It Is My First Time?</h3>
                                            <p>
                                            	If you are a first time home buyer it is recommended highly that you at least talk with a couple of real estate agents to see if you feel that they can provide value to your search and the ultimate goal of securing a property.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                        <h3>What are the benefits?</h3>
                                            <p>
                                            	Below is a list of pro's and con's of working with a real estate agent. 1-800RealEstate.com has lots of resources and information to help you find a great agent or guide you through the process alone if you feel you can do better yourself.
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
                                                <img src="{{ asset('assets/img/do-i-need-an-agent.jpg') }}" />
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                </div>
								<div class="container pt10 pb10" style="color:#000000; background-color:#ffffff;" text-align:left";>
									<div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-8 mb30" style="text-align:left";>
                                        	<h3 style="text-align:left";>Pros of working with a buyers Agent</h3>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                  	</div>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>1. Buyer agent fees are usually reasonable!<img class="pull-right" src="{{ asset('assets/img/group-2.png') }}" /></h4>
                                            <p>
                                            Oftentimes the seller will pay a portion or all of the buyer’s agent's commission, so it usually won’t cost you much if anything to hire a buyer’s agent. A good buyer’s agent can be an invaluable resource and if they are good should be worth their fee.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>2. Set up appointments<img class="pull-right" src="{{ asset('assets/img/group-3.png') }}" /></h4>
                                            <p>
                                                Buyers agents will set up all of the appointments to view homes and will have valuable insights about the neighborhoods, schools, and what locations have better resale.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>3. Negotiations<img class="pull-right" src="{{ asset('assets/img/group-4.png') }}" /></h4>
                                            <p>
                                            	A good buyers agent is a good negotiator and having someone on your side who is truly looking out for your best interest and understands the nuances of a real estate negotiation can save you thousands.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>4. Home Inspection process<img class="pull-right" src="{{ asset('assets/img/group-5.png') }}" /></h4>
                                            <p>
                                            	A buyers agent will typically attend the home inspection and will council a buyer on how to negotiate the results of the home inspection report.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>5. Understand the contract<img class="pull-right" src="{{ asset('assets/img/group-6.png') }}" /></h4>
                                            <p>
                                            	Every state is different with regards to who writes the purchase and sales agreement for a home but any good buyers agent will be able to explain all of the legal terms and can help you better understand exactly what you are signing.
                                            </p>
                                        </div>
                                        <div class="col-lg-1 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>6. Make sure timelines are met<img class="pull-right" src="{{ asset('assets/img/group-7.png') }}" /></h4>
                                            <p>
                                            	Buyers agents monitor the entire sales cycle and make sure that all of the deadlines are met and will communicate with the sellers side to ensure a smooth closing.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                       	</div>
                                    </div>
    							</div>
    							
    							<div class="container pt10 pb10" style="color:#000000; background-color:#ffffff;" text-align:left";>
                                    <div class="row">
                                        <div class="col-lg-2 mb30">
                                        	&nbsp;
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left; border: 2px solid #979797";>
                                            <h4>7. Set up a smooth closing<img class="pull-right" src="{{ asset('assets/img/group-8.png') }}" /></h4>
                                            <p>
                                            	A buyers agent will often coordinate the closing, with title companies, lawyers, and the sellers team. They will also set up a walk through prior to the closing to ensure you get exactly what was agreed upon.
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
                                            <img src="{{ asset('assets/img/not-working-with-an-agent.png') }}" />
                                        </div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h4>1. Save money -</h4>
                                            <p>
                                            Although sellers often pay a portion or all of a buyer agent’s commission, you may be able to negotiate a lower price if the seller doesn't have to pay a buyer's agent. This is especially the case if you are negotiating directly with the owner of a property.
                                            </p>
                                            <p>&nbsp;</p><p>&nbsp;</p>
                                            <h4>2. Binding contract -</h4>
                                            <p>
                                            	Most buyers agents will ask you to sign a contract with them before they will assist you. If you eventually find that your personalities clash or that you no longer want to work with them you will need to get out of this contract.
                                            </p>
                                            <p>&nbsp;</p><p>&nbsp;</p>
                                            <h4>3. You are a pro -</h4>
                                            <p>
                                            	There are many real estate investors, builders and professionals who work in the real estate business who don't need the advice of a buyer's agent and in many cases save themselves thousands of dollars buy navigating the waters of purchasing property all by themselves.
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
                                            	We would never advise anyone against working with a highly qualified, skilled real estate agent. The majority of people try and go it alone to try and save money but it is pretty rare that you will save money by not using a real estate agent when purchasing property. The biggest mistake people make when selecting a buyer's agent is not picking a good one.
                                            </b>
                                            <p>&nbsp;</p>
                                            <p>
                                            	 Do your research and watch the videos and find someone who you feel is going to represent you the way you deserve. Ultimately if you feel comfortable with what you are looking at, understand the process and feel that you can get a better deal without a buyer's agent than we think you have the choice to decide the best path for your real estate journey. Good luck!
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb10">
                                            <p>	
                                            	<img src="{{ asset('assets/img/img-3.png') }}" />
                                            	<div id="c3"><img src="{{ asset('assets/img/portrait-1.png') }}"></div>
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
