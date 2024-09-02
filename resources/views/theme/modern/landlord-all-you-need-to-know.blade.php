@extends('layout.main')

@section('title'){{trans('Landlord Information on how to keep apartments occupied')}}@stop
@section('description', 'Landlord information about how to keep your Apartments and Houses rented and always leased')
@section('keywords', 'Landlord, Information, apartment, house for rent, Advertising tips, lease, marketing')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.btn-purple {
                background: transparent;
                color: #8b85c1;
                -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
                -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
                -o-transition: background .2s ease-in-out, border .2s ease-in-out;
                transition: background .2s ease-in-out, border .2s ease-in-out;
                border: 2px solid #8b85c1;
                border-radius: 29px;
                width: 172px;
                height: 38px;
            }
p {
    font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.75;
  letter-spacing: normal;
  color: #000000;
}
.bottomDiv{
       position:relative;
       top:-200px;
    }
.top-rectangle{
    width: 871px;
}
</style>
@endsection

@section('main')
<div id="wrapper" align="center">
	<div class="pt60 pb30" style="background-color:#eff1f9; text-align:left";>
		<div class="row align-items-center">
      		<div class="col-lg-6 mb30">
      			<img src="{{ asset('assets/img/landlord-all-top.png') }}" width="550px" height="auto" class="responsive" />
          	</div>
            <div class="col-lg-4 mb30">
            	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            	<h1><b>Whether you are a new landlord or someone that has been in the business for years, it always helps to do research</b></h1>
            	<br />
            	<p>
            		Few of us would argue that the rental landscape has changed in the last few years and that change is going to continue. The internet is currently giving potential tenants more knowledge about what is available to them as well as their rights. As a landlord you should also try to keep up to date with the market, and continue to have your properties fully occupied with satisfied tenants. Below are some tips that 1-800RealEstate.com.com has found to be helpful in achieving these goals.
            	</p>
            	<br />
             	<button type="button" onclick="location.href='#'" class="btn btn-purple">Begin Researching</button>
       		</div>
       		<div class="col-lg-2 mb30">
				&nbsp;
          	</div>
    	</div>
	</div>
	<div class="container pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30">
                                            <h3 style="text-align:center";><b>How to advertise your apartment</b></h3>
                                            <br />
                                            <p>
                                           		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In no area has the landscape changed more then the rise of the internet to advertise properties. There are many sites where you can market your vacancies, and we consider 1-800RealEstate.com.com to be the premiere site to get your property viewed by the most people in the areas that we cover. 1-800RealEstate.com.com is absolutely free to advertise and very easy to use. There are many other rental sites available and we recommend you to advertise on as many as possible. Many of them are also free and tenants are increasingly looking to the net to find their place to live. It takes hard work to maintain occupied properties with great tenants and being vacant for a month or more can be costly. So here is some advice when advertising your property.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                               
	<div class="pt60 pb30" style="color:#000000; background-color:#eff1f9; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <h3 style="text-align:center";><b>Advertising Tips</b></h3>
                                            <br />
                                            <p style="text-align:center";>
                                            	When posting any of your ads make sure that you include as many pictures and as much relevant information as possible.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <p class="row" style="color:#000000; background-color:#ffffff; text-align:left; padding: 25px";>
                                            	Be as descriptive and include the address. Too much information is better than to little.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <p class="row" style="color:#000000; background-color:#ffffff; text-align:left; padding: 25px";>
                                            	The best way to advertise is via the internet. Advertise on as many sites as possible as this increases your odds of finding the kind of tenant you want.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <p class="row" style="color:#000000; background-color:#ffffff; text-align:left; padding: 25px";>
                                            	Post flyers in places where the types of tenants you are looking to attract congregate. Example: If you are trying to attract students at a particular college, you may want to post flyers all over the campus.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <p class="row" style="color:#000000; background-color:#ffffff; text-align:left; padding: 25px";>
                                            	Place a visible sign on the property with a visible phone number and e-mail address so that potential tenants can contact you.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-4 mb30">
                                            <p class="row" style="color:#000000; background-color:#ffffff; text-align:left; padding: 25px";>
                                            	You will notice that we have not included print media in our tips. We have found that advertising in a local paper is expensive and not as effective as internet marketing.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#eff1f9; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-1 mb30">
											&nbsp;
                    					</div>
                                    	<div class="col-lg-5 mb30">
											<img src="{{ asset('assets/img/illus-1.png') }}" width="514px" height="367px" />
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h3><b>How to price your apartment</b></h3>
                                            <br />
                                            <p>
                                            	Price is one of the most important, if not the most important factor that you need to understand before you start to advertise your place. How you price your apartment will often dictate how quickly you rent it and who you are going to rent to. With the internet your perspective tenants are more informed then ever before and you should be as well. Do your homework before deciding what to charge for rent. The more knowledge you gain will improve you as a landlord and assist you in successfully renting all of your properties. Although you may be unable to do all of the following, you should attempt a few of these tips to make sure you are priced right.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt90 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <p><b>Look at the various internet sites like 1-800RealEstate.com and see what other comparable apartments are renting for. </b></p>
                                            <br />
                                            <p>
                                            	Be honest with yourself and look at what they are offering and what you are offering. Most sites have photos, so if you see a place that is far superior to yours don't compare yourself to them, as it will only give you an unrealistic comparison to value
                                            </p>
                                            <br />
                                            <p>
                                            	Use the tool that is offered in our landlord section. It is fantastic! It is a site that provides data on every rental in your area. All you have to do is punch in the address and it will give you a good feel for what the average rent is in the area.
												<br /><br />
												Physically go out and look at places. It will always help you to see what your competition is because the perspective tenants surely will.
												<br /><br />
												1-800RealEstate.com.com covers northeast and has found it important to also look at the data seasonally. Often times a apartment may rent for less in the winter then it does in the summer due to the fact that people don't like to move in the winter. 
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
											<img src="{{ asset('assets/img/house-1.jpg') }}" width="481px" height="721px" />
                    					</div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#e1e8ff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h3><b>How to take the phone call</b></h3>
                                            <br />
                                            <p>
                                            	It may seem like common sense when it comes to answering the calls but there are many ways that you can avoid wasting your time with people that are not sincerely interested in your apartment, or even worse not qualified. Always ask the following questions when you are on the phone with people.
                                            </p>
                                            <br />
                                            <p>
                                            	<b>
                                            	<li>When are you looking to move?</li><br />
                                                <li>Where are you moving from?</li><br />
                                                <li>Why are you moving?</li><br />
                                                <li>Do you have a job?</li><br />
                                                <li>Who is going to occupy the apartment with you?</li><br />
                                                <li>How is your credit score?</li><br />
                                                <li>If your credit is not good do you have a co-signer?</li> 
                                            	</b>
                                            </p>
                                            <br />
                                            <p>
                                            	 If they answer these basic questions in a manner that is satisfactory to you then go ahead and make an appointment to show the property. When making the appointment always use the following rule.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 mb30">
											<img src="{{ asset('assets/img/illus-2.png') }}" width="732px" height="601px" />
                    					</div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>

								<div class="pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-1 mb30">
											<img src="{{ asset('assets/img/bubbles.jpg') }}" />
                    					</div>
                                    	<div class="col-lg-5 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <h3><b>Only make appointments for the day that they call or the Next day</b></h3>
                                            <br />
                                            <p>
                                            	It is quite common for potential renters not to show up for their appointments for a variety of reasons and if they are sincerely interested in your place will make the time to look either today or tomorrow. The further off you make an appointment the bigger chance you have about them not showing up.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#f7f7f7; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30">
                                            <h3 style="text-align:center";><b>How to show the apartment</b></h3>
                                            <br />
                                            <p>
                                            	Once you decide that the person that called is worthy of an appointment, don't let them walk away for something that you can control. If they have found your place on the internet, chances are that they have already seen photos, have mapped out where it is, and if you have done a good job in your description they will also know what they should see. First impressions are extremely important, so make sure that your place looks as good as it can each and every time that you show it.
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt90 pb30" style="color:#000000; background-color:#f7f7f7; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                            <p><b>Make sure that the common areas are extremely clean. A dirty hallway, messy yard, laundry room, or other things that are in disarray will give the impression that you don't care about your property and would not be attentive.</b></p>
                                            <br />
                                            <p><b>Make sure that the apartment that they are looking at is spotless. Nothing will hurt you more than a place that is dirty.</b></p>
                                            <br />
                                            <p><b>Make sure that it is so clean you would eat off of the floor.</b></p>
                                        </div>
                                        <div class="col-lg-4 mb30">
											<img src="{{ asset('assets/img/couch-1.jpg') }}" width="481px" height="721px" />
                    					</div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt90 pb30" style="color:#000000; background-color:#f7f7f7; text-align:left";>
                                    <div class="row">
                    					<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/chair-3.jpg') }}" width="719px" height="700px" />
                    					</div>
                    					<div class="col-lg-1 mb30">
											&nbsp;
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                        	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            <p><b>Make sure that there are no offensive odors. Smell is the first sense that tells people if a place is clean or not.</b></p>
                                            <br />
                                            <p><b>Make sure that the paint is in good condition. Be honest with yourself and if it needs a new coat of paint do it.</b></p>
                                            <br />
                                            <p><b>Do your improvements before showing the apartment. If you are going to install new blinds because the other ones are cracked, then do so before show time. Be proactive rather than telling the perspective tenants what you are going to do.</b></p>
                                        </div>
                                        <div class="col-lg-1 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#f7f7f7; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <p>
                                            	The rental market is currently very competitive and you want to be able to choose your tenants rather then having them have to pick you. If tenants walk away for reasons that are out of your control such as a small living room, or small bedrooms then so be it but don't ever let good tenants walk away over things that you can control. It will only cost you time and money. 
                                            </p>
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <img src="{{ asset('assets/img/top-bubbles.jpg') }}" />
                                <div class="container pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30">
                                        <h3><b>How to make sure they pick <br />your apartment every time</b></h3>
                                        <br />
                                       	<p>
                                        	"Every morning in Africa, a Gazelle wakes up. It knows it must run faster than the fastest lion or it will be killed. Every morning a Lion wakes up. It knows it must outrun the slowest Gazelle or it will starve to death. It doesn't matter whether you are a Lion or a Gazelle... when the sun comes up, you'd better be running."
                                       	</p>
                                       	<br />
                                       	<p>
                                       		The business of being a landlord is as competitive as it has ever been, and you need to do everything in your power to keep your customers (tenants) happy and coming back. There is a delicate balance between doing too much and not doing enough so that you will incur a loss rather then a gain with your properties. Tenants are not sympathetic to your situation and how much rent you "need" to get for your apartment. They are only looking out for themselves and want to find the best place that they can for the best price that they can. The nicer your apartment is the better chance you will have of securing the best tenant possible.
											<br /><br />
     										Before you have cleaned, advertised and have our apartment in pristine showing condition, you will want to make sure that your have done everything possible so your place sticks out among other apartments viewed by potential tenants. It is important to realize that through normal wear and tear, things within your apartment are going to age, and in time will need replacing. Be proactive with your maintenance and make your life easier. Below is a list of some things to help you with keeping your place on a tenant's short list.
                                       	</p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#eff1f9; text-align:left";>
                                    <div class="container top-rectangle bottomDiv">
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/paint.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Paint</h3>
                                                <p>
                                                	This is one of the easiest remedies to any apartment or house. An apartment should be repainted every two to three years. It is also a good idea to keep all of the walls one uniform color and not allow tenants to re-paint, because you will always have a reference point of what the place looked like when they move out.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/blinds.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Blinds</h3>
                                                <p>
    												Always make sure that the blinds are clean, and not broken. Blinds are not expensive, and make a huge difference.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/lighting.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Lighting</h3>
                                                <p>
                                                	Old lighting fixtures can make a place look old and uncared for. New lighting fixtures are inexpensive and can give your place a quick face lift.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/bathroom.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Bathroom</h3>
                                                <p>
                                                	New fixtures, vanities, towel rods, toilet paper holders, and in some cases, a new toilet or sink should be appraised every time that a tenant moves out.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/kitchen.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Kitchen</h3>
                                                <p>
                                                	This is one of the most important areas. Make sure that the appliances are in good working condition. Make sure that the cabinets and counter tops are in good shape, and then look at the floor to make sure that it isn't cracking, or just out of date.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/heating.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Heating systems</h3>
                                                <p>
                                                	Have your system cleaned and serviced by a professional annually.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/doors.png') }}" />
                                            </div>
                                            <div class="col-lg-6 mb30">
                                            	<h3>Doors and windows</h3>
                                                <p>
                                                	Ensure that the doors are not broken, and that the knobs work and still lock. Look at your windows, and again make sure that all of the locks work. One other thing to check with the windows is whether the paint is chipping. Chipping paint at windows is one of the most common sources of Lead Poisoning.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#eff1f9; text-align:left";>
                                    <div class="row">
                                    <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-8 mb30">
                                            <h3><b>Having a place superior to the <br />competition is a sure way to get <br />many applications</b></h3>
                                            <br />
                                            <p>
                                            	It allows you to choose your tenants rather than the other way around. You must realize that you are competing against all of the other spaces that are out there, and attention to detail matters. We have all heard the phrase "you get what you pay for" and good tenants will not live in a dump regardless of the location. If you look at your budget realistically and take care of the things that need attention, you are able to provide tenants with a good value proposition. They will most likely choose your place over the others and in return make your life as a landlord a much better place to be. 
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    <h2 style="text-align: center";><b>Taking the deposit and <br />running checks</b></h2>
                                    <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-3 mb30">
                                            <p>
                                            	Before you ever take a deposit from a potential tenant you have to have a plan on what you consider important tenant criteria. You should know all of the laws in your state about what you can and can't ask and what reasons you can deny someone an apartment for. 1-800RealEstate.com.com has provided many useful links to all of the applicable laws in every state for free. We have also provided free leases, applications, lead disclosure forms, and many other useful forms to assist you with taking the deposit. 
                                            </p>
                                        </div>
                                    	<div class="col-lg-3 mb30">
                                    		<p>
                                            	<b>If you decide to use our forms</b> please consult with your attorney as our forms are free and may not provide you with the protection that you are looking for. As soon as the important criterion is formulated, you will need to figure out a way to verbalize it to your applicant. Below is a list of some helpful tips when taking a deposit, and checking an application.
                                            </p>
                                    	</div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt90 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-2 mb30">
                                    		&nbsp;
                                    	</div>
                    					<div class="col-lg-4 mb30">
											<img src="{{ asset('assets/img/couch-people.png') }}" width="444px" height="442px" />
                    					</div>
                                        <div class="col-lg-4 mb30" style="text-align:left";>
                                        	<p>
                                        		<li>Always, always, always make sure that if you charge a fee to run the application that it clearly written on the application.</li>
												<br /><br />
												<li>Always, always, always make sure that if you do accept a tenant, and they default that you clearly write out your policy on how much of their deposit you intend to refund if any at all. This is extremely important!</li>
												<br /><br />
												<li>If you are going to run a credit check make sure that again it is clearly written on your application, and that the perspective tenant agrees to you running the credit.</li>
												<br /><br />
												<li>If you are going to call references, ex-employers, or ex-landlords, make sure that you clearly write it out, and that you also verbalize this to your perspective tenant.</li>
												<br /><br />
												<li>If you haven't already got the message GET IT IN WRITING!</li>
                                        	</p>                                        </div>
                                        <div class="col-lg-2 mb30">
											&nbsp;
                    					</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <h2><b>Unfortunately we live in a litigious society.</b></h2>
                                            <br />
                                            <p>
                                            	Rather than make it your word against someone else's, just have it in writing so you cover all your bases. Upon giving a receipt, be sure to include language that backs up what ever your policies are on your application. If you are going to charge a fee to run the application make sure fact is clearly printed and not hidden. If your policy is a non-refundable deposit in the case that the applicant is approved and then backs out, then have it prominent and visual on the application as well as the receipt.
                                            </p>
                                            <br />
                                            <img src="{{ asset('assets/img/pen.png') }}" width="818px" height="287px" />
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#ffffff; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <h2><b>Signing the lease</b></h2>
                                            <br />
                                            <p>
                                            	We have provided a copy of a lease that we used to use and it is free for you to download, and use. If you do decide to use our lease make sure that you read it and have your attorney look it over to make sure that it gives you a sufficient level of protection for your individual situation. You can also delete or add any additional provisions to the lease that we provide if you decide to use our lease. Whether or not you use our lease or your own make sure that it covers the following topics.
                                            </p>
                                            <div class="col-lg-2 mb30">
                                                &nbsp;
                                            </div>
                                            <p>&nbsp;</p>
                                            <div class="row">
                                                <div class="col-lg-4 mb30" align="center">
                                                    <b>
                                                        Duration and terms of lease<br />
                                                        Pets<br />
                                                        Parking<br />
                                                        Subletting<br />
                                                        Payment of utilities<br />
                                                        Duration of lease<br />
                                                        Late payment fees<br />
                                                    </b>
                                                </div>
                                                <div class="col-lg-4 mb30" align="center">
                                                    <b>
                                                        Right of inspection<br />
                                                        Ending of lease<br />
                                                        Damage to premises<br />
                                                        Occupancy rules and limits<br />
                                                        Who is in charge of upkeep<br />
                                                        Lockouts<br />
                                                        Extensions of the lease<br />
                                                    </b>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <br />
                                            <p>
                                           		All leases should clearly define what you consider important to protect your rights as it has to do with your property while being fair to your tenant.
                                            </p>
                                            <br />
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                </div>
                                
                                <div class="pt60 pb30" style="color:#000000; background-color:#eff1f9; text-align:left";>
                                    <div class="row">
                                    	<div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                        <div class="col-lg-6 mb30">
                                            <h2 style="text-align: center";><b>Summary</b></h2>
                                            <br />
                                            <p>
                                            	1-800RealEstate.com.com realizes that there are many facets to being a successful landlord. We could have written a book with all the things that we have seen in our experience. Instead we decided to write a website. We hope it helps you, and wish you success in all of your real estate ventures. If you ever have any questions, comments, or suggestions feel free to share them with us at feedback@1-800RealEstate.com.com. We have 24/7 support and are always around to lend a helping hand.
                                            </p>
                                        </div>
                                        <div class="col-lg-3 mb30">
                                    		&nbsp;
                                    	</div>
                                    </div>
                                    <div align="center">
                                    	<img src="{{ asset('assets/img/illus-3.png') }}" width="1121px" height="742px" />
                                    </div>
                                </div>
</div>
@endsection