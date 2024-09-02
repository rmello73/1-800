@extends('layout.main')

@section('title'){{trans('What is my home worth and how do I set a price')}}@stop
@section('description', 'Pricing real estate is a complex process and the price which you put on your house is the most important piece of the sales process.  Read these helpful tips about how to price your home.')
@section('keywords', 'real estate, price, house, home, value, pricing, sale, sales, tips, worth')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.bottom{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/home-worth-bottom.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.bigger{
  width:100%;
  height:700px;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("http://1-800.lenoxproperty.com/assets/img/what-is-my-home-worth-top.jpg");
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
.so2 {
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
<div class
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12"> 
                    	<div class="bigger">
                                <div class="container pt60 pb30">
                                <div class="grid-container-top mobile-hide">&nbsp;</div>
                                    <div class="row align-items-center">
                                    <div class="col-lg-3 mb30">
                                        	&nbsp;
                    					</div>
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="text-white mb20 so">What's My Home Worth?</h1>
                                            <p class="so2">	
 												The bottom line for the value of any home is that it is worth what someone is willing to pay for it and what someone is willing to sell it for.
                                            </p>
                                        </div>
                                        <div class="col-lg-3 mb30">
                                        	&nbsp;
                    					</div>
                                    </div>
                                </div>
						</div>
                    </div>
                </div>
                <div class="grid-container-top mobile-hide">&nbsp;</div>
                                <div class="container pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <h3>The biggest mistake that any person selling their property can make is overpricing it.</h3>
                                            <br />
                                            <p>
                                            	There are a variety of reasons that people over value their property and we don't want you to make these mistakes. The best way to get a good estimate on the value of your property is to get an independent third party professional such as a real estate agent or an appraiser who does this every day give you their opinion of value. Below we have listed the main reasons that people make mistakes when trying to value their properties. Don't make these mistakes as they can cost you tens of thousands of dollars.
                                            </p>
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
            					<div class="grid-container-extra mobile-hide">&nbsp;</div>
            					<div id="div1">01</div>
            					<div class="background01">
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3>
                                                	<b>The number one mistake people is that they take the values that online websites give them as the value of their property.</b> 
                                                </h3>
                                                <p>
                                                	These sites use algorithms which don't take into account whether or not your house has been updated, and are easily manipulated. Don't use these sites as gospel!
                                                </p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row" align="center">
                                        	<div class="col-lg-4 mb30">
                                        		<img src="http://1-800.lenoxproperty.com/assets/img/hwicon1.png" />
                                        		<br /><br />  
                                            	<p style="text-align:left";>These sites don't know that you need a new roof while your neighbors roof is brand new.</p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                            	<img src="http://1-800.lenoxproperty.com/assets/img/hwicon2.png" />
                                            	<br /><br />
                                            	<p style="text-align:left";>These sites don't see that your house sits right on the street and that your neighbors have a right of way on your property to access their properties in the back.</p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                            	<img src="http://1-800.lenoxproperty.com/assets/img/hwicon3.png" />
                                            	<br /><br />
                                        		<p style="text-align:left";>These sites don't know that you just replaced all of your windows and had central A/C installed.</p>
                                        	</div>
                                        </div>
                                        <div class="row" align="center">
                                        	<div class="col-lg-4 mb30">
                                        		<img src="http://1-800.lenoxproperty.com/assets/img/hwicon4.png" />
                                        		<br /><br />
                                            	<p style="text-align:left";>These sites may see that the city has your house listed as a two bedroom on their data records when you actually have a three bedroom with an office.</p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                            	<img src="http://1-800.lenoxproperty.com/assets/img/hwicon5.png" />
                                            	<br /> <br />
                                            	<p style="text-align:left";>These sites don't know that you need major structural repairs to your basement and the foundation has major settlement cracks.</p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container pt60 pb30" style="background-color:#ffffff; text-align:left";>
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-6 mb30">
                                            <h1 class="large-header">
                                                        02    
                                            </h1>
                                            <h3>Don't mistake the actual value of the house with the sentimental value that you have. </h3>
                                            <p>
                                            	Just because you have lived there and raised your kids there don't fall into the trap of thinking everyone will think your house is worth a billion dollars because of your experience in the property.  Today's buyer is more educated than ever; smart sellers understand that crunching the numbers is always the best path to an accurate sales price.  It is highly recommended that you get an unbiased opinion from a professional.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="container pt60 pb30">
                                    <div class="row">
                                        <div class="col-lg-6 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        03    
                                            </h1>
                                            <h3>Renovations are for your comfort.</h3>
                                            <p>
                                            	Don't think that you are going to get a dollar for dollar return for any home improvements that you have made while you were in the property. Most professionals will tell you that an upgraded kitchen or bathroom will add value to your property and make it more marketable but this is not true with every upgrade you make. Doing renovations to make you more comfortable while living in a property is human nature but don't make the mistake of thinking that when you sell the property that you will get a dollar for dollar return on your improvements.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/hw3.jpg') }}" width="350px" height="250px" />
                    					</div>
                                    </div>
                                </div>
            
                                <div class="container pt60 pb30">
                                    <div class="row">
                                    	<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/hw4.jpg') }}" width="350px" height="250px" />
                    					</div>
                                        <div class="col-lg-6 mb30" style="background-color:#ffffff; text-align:left";>
                                            <h1 class="large-header">
                                                        04    
                                            </h1>
                                            <h3>Set your price, observe the reaction, and adjust your price accordingly.</h3>
                                            <p>
                                            	Once you set your price you need to observe the reaction from the public and adjust your price accordingly. When you actually start advertising your property you need to see the reaction from buyers to your price and be ready to react.
                                            </p>
                                            <hr />
                                            <b>
                                                <p>
                                                	- If you start advertising and do not get a call in the first month, you have probably made the mistake of overpricing your house.
    											</p>
    												- If you are advertising your house and have 10 people walk through it but receive no offers you have probably overpriced your house.
                                                </p>
                                            </b>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="container pt60 pb30 bottom">
                                <div class="grid-container-top mobile-hide">&nbsp;</div>
                                    <div class="row align-items-center">
                                    	<div class="col-lg-4 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30 text-center">
                                            <h3>
                                            	Be honest with yourself and watch the buyers' reaction to your property both while they are in it and whether or not they want to make an offer.
 											</h3>
 											<br /><br />
                                            <h3>
                                            	Pricing a home is complex.	
											</h3>
                                        </div>
                                        <div class="col-lg-4 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-3 mobile-hide">
                                                &nbsp;
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3" align="center">
                                                <button type="button" onclick="location.href='https://1-800.lenoxproperty.com/home-selling-tips'" class="btn btn-primary btn-solid">Home Selling Tips</button>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3 align="center"">
                                                <button type="button" onclick="location.href='https://1-800.lenoxproperty.com/buyer-information'" class="btn btn-lg btn-transparent">Buyer Information</button>
                                            </div>
                                            <div class="col-md-3 mobile-hide">
                                                &nbsp;
                                            </div>
                                        </div>
                                </div>
    </div>
@endsection
