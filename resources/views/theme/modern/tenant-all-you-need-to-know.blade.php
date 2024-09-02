@extends('layout.main')

@section('title'){{trans('Information to help tenants find apartments and houses for rent')}}@stop
@section('description', 'Helpful information and tips for tenants who are looking for an apartment or house to rent')
@section('keywords', 'tenants, information, tips, apartments, houses, condos, rent')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.top-background{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/group.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
}
.path-background{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/path.jpg");
  background-size:cover;
  background-position:center;
  position:relative;
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
</style>
@endsection

@section('main')
<div id="wrapper" align="center">

	<div class="pt60 pb30 top-background" style="background-color:#eff1f9; text-align:left";>
		<div class="row align-items-center">
      		<div class="col-lg-8 mb30">
      			&nbsp;
          	</div>
            <div class="col-lg-3 col-sm-12 col-xs-12 mb30">
            	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
            	<img src="{{ asset('assets/img/small-purple.jpg') }}" />
            	<h1><b>Everything a Tenant Needs to Know</b></h1>
            	<br />
            	<p>
            		There are many things to consider when looking for an apartment. Here are some of our how to dos.
            	</p>
       		</div>
       		<div class="col-lg-1 mb30">
      			&nbsp;
          	</div>
    	</div>
	</div>
	
	<div class="pt60 pb30" style="background-color:#ffffff; text-align:left";>
		<div class="row align-items-center">
			<div class="col-lg-3 mb30">
                &nbsp;
           	</div>
			<div class="col-lg-6 mb30">
            	<p>
            		When looking for an apartment there are many things to consider. The following are some of the most<br />important things to think about before you start your search:
            	</p>
            </div>
            <div class="col-lg-3 mb30">
                &nbsp;
           	</div>
    	</div>
	</div>
	
	<div class="pt60 pb30 container" style="background-color:#ffffff; text-align:left";>
		<div class="row align-items-center">
       		<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
       			<img src="{{ asset('assets/img/01.png') }}" />
           		<p><b>Location</b></p>
           		<p>The location that you want. Real Estate is all about the three L's: location, location, and location.</p>
           		<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/02.png') }}" />
           		<p><b>Money</b></p>
           		<p>The amount of money that you can afford. This includes rent as well as utilities, but also deposits that are going to be required.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/03.png') }}" />
           		<p><b>Your Needs</b></p>
           		<p>The number of bedrooms and bathrooms that you want for your own needs.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
        </div>
     	<div class="row align-items-center">
       		<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
       			<img src="{{ asset('assets/img/04.png') }}" />
           		<p><b>Type</b></p>
           		<p>The type of rental that you would like. i.e. complex, single family house, duplex, etc.</p>
			<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/05.png') }}" />
           		<p><b>Lease</b></p>
           		<p>What type of lease you are looking for. Look for leases specific to your time periods.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/06.png') }}" />
           		<p><b>Convenience</b></p>
           		<p>Access to public transportation, stores, medical facilities, or anything else that may be of importance during your stay.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
    	</div>
    	<div class="row align-items-center">
       		<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
       			<img src="{{ asset('assets/img/07.png') }}" />
           		<p><b>Condition</b></p>
           		<p>The condition of the unit that you are going to rent.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/08.png') }}" />
           		<p><b>Safety</b></p>
           		<p>The safety and appearance of the neighborhood around./p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
          	<div class="col-lg-4 mb30 top-rectangle" style="padding: 20px";>
          		<img src="{{ asset('assets/img/09.png') }}" />
           		<p><b>Others</b></p>
           		<p>Any other special requirements that you or family members may have, such as handicap access.</p>
				<div align="center"><img src="{{ asset('assets/img/purple-bar.jpg') }}" /></div>
          	</div>
    	</div>
    	</div>
    	
    	<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h2 class="header-text">
                                                	<b>Helpful tips to secure exactly what you are looking for</b>
                                                </h2>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		<img src="{{ asset('assets/img/group-24.png') }}" />
                                        	</div>
                                        </div>
                                    </div>
		
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                               		Approach your rental search like you would a job search
                                                </h3>
                                                <img src="{{ asset('assets/img/1-small.png') }}" class="pull-right" />
                                                <p>Be organized, serious, professional, to help make sure that you stand out as the most qualified for the unit that you want. It will help to prepare a renters resume to really stand out, and be taken more seriously</p>
                                            </div>
                                        </div>
                                    </div>
                                    
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Know exactly what you want! 
                                                </h3>
                                                <img src="{{ asset('assets/img/2-small.png') }}" class="pull-left" />
                                                <p>Be prepared to make a decision when you see what you want and to leave a deposit and/or credit check fee.</p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Be more prepared then the other prospective tenants
                                                </h3>
                                                <img src="{{ asset('assets/img/3-small.png') }}" class="pull-right" />
                                                <p>Check the latest listings first thing every day, and call perspective places early.</p>
                                            </div>
                                        </div>
                                    </div>
 
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	When you call make sure that you speak clearly and slowly 
                                                </h3>
                                                <img src="{{ asset('assets/img/4-small.png') }}" class="pull-left" />
                                                <p>Make sure that you repeat your name and number. If you can make yourself stand out you will help assure yourself a return phone call, and an appointment. If you have a great job and excellent credit don't be afraid to share that on your message. Be available to accept or return calls, or let them know when you will be available, and that you would like to set up an appointment to view the property. When possible give them your cell phone number and have it on you while looking at other places.</p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Make sure that your credit is kept in good standing
                                                </h3>
                                                <img src="{{ asset('assets/img/5-small.png') }}" class="pull-right" />
                                                <p>Before you start your search you may want to get a copy of your credit report and correct any errors. Make sure that what you say on your application is consistent with what landlords will see on your credit report.</p>
                                            </div>
                                        </div>
                                    </div>
 
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Be prepared with all of the information that you will need for your application
                                                </h3>
                                                <img src="{{ asset('assets/img/6-small.png') }}" class="pull-left" />
                                                <p>These include information such as prior addresses, and landlords, references and credit information. An incomplete application will only hurt your chances of securing a great space. Also be prepared to show pay stubs, a copy of your drivers license or even a bank statement.</p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Remember your references
                                                </h3>
                                                <img src="{{ asset('assets/img/7-small.png') }}" class="pull-right" />
                                                <p>Always contact your references before you use them and let them know that you will be using them as a reference.</p>
                                            </div>
                                        </div>
                                    </div>
                                     
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Be the best you can be
                                                </h3>
                                                <p>Always try and make as good an impression as you can. Show that you will be a good keeper of the landlord's property.</p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Prepare for it like you would prepare for any job
                                                </h3>
                                                <img src="{{ asset('assets/img/9-small.png') }}" class="pull-right" />
                                                <p>If you can prepare a renters resume do so. It will make you stand out above other applicants for that really great place.</p>
                                            </div>
                                        </div>
                                    </div>
                                     
		<div class="container pt60 pb30" style="text-align:left";>
                                        <div class="row">
                                            <div class="col-lg-6 mb30">
                                                <h3 class="header-text">
                                                	Make a few appointments in a particular area that you are interested in. 
                                                </h3>
                                                <img src="{{ asset('assets/img/10-small.png') }}" class="pull-left" />
                                                <p>You can map them out from our system and keep in mind the following questions when you finally get out there.</p>
                                            </div>
                                            <div class="col-lg-6 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

		<div class="pt90 pb30" style="background-color:#ffffff; text-align:left";>
    		<div class="row align-items-center">
    			<div class="col-lg-2 mb30">
                    &nbsp;
               	</div>
    			<div class="col-lg-4 mb30">
    				<img src="{{ asset('assets/img/purple-bar.jpg') }}" />
    				<h2>
    					<b>How to interview your prospective landlord</b>
    				</h2>
    				<br />
                	<p>
                		<b>When you start looking at places you will have a chance to ask questions to the landlord directly or a leasing agent.</b>
						The following is a list of recommended questions for the prepared tenant.
                	</p>
                </div>
                <div class="col-lg-6 mb30">
                    &nbsp;
               	</div>
        	</div>
    	</div>
    	
    	<div class="pt30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-5 mb30">
                                        		<img src="{{ asset('assets/img/illus-11.png') }}" />
                                        	</div>
                                            <div class="col-lg-5 mb30">
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            	<p style="color: #497ceb";><b>ONE</b></p>
                                                <h3 class="header-text">
                                                	Lease and Money
                                                </h3>
                                                <p>
                                                	<li>What is the monthly rent?</li>
													<li>What is the total amount that I will need to move in?</li>
													<li>What is the deposit that I will have to leave to secure the place and is it refundable?</li>
                                                	<li>Can I sublet the place?</li>
													<li>Can I have roommates or additional roommates?</li>
                                                    <li>Do you have a penalty for late rent and if so what is it?</li>
                                                    <li>If I need to move is there a penalty if I break my lease?</li>
                                                    <li>When is the rent due?</li>
                                                    <li>If I decide to stay what are the terms for renewing the lease?</li>
                                                    <li>Do you offer 1 year/ month to month leases?</li>
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

    	<div class="pt30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-5 mb30">
                                        		<img src="{{ asset('assets/img/illus-12.png') }}" />
                                        	</div>
                                            <div class="col-lg-5 mb30">
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            	<p style="color: #497ceb";><b>TWO</b></p>
                                                <h3 class="header-text">
                                                	Unit availability
                                                </h3>
                                                <p>
                                                	<li>When is the apartment available?</li>
                                                    <li>When can I move in?</li>
                                                    <li>Is the unit currently occupied?</li>
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

    	<div class="pt30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-5 mb30">
                                        		<img src="{{ asset('assets/img/illus-13.png') }}" />
                                        	</div>
                                            <div class="col-lg-5 mb30">
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            	<p style="color: #497ceb";><b>THREE</b></p>
                                                <h3 class="header-text">
                                                	Pets, Utilities, and Amenities
                                                </h3>
                                                <p>
                                                	<li>Do you allow pets?</li>
                                                    <li>Do your charge a pet deposit and if so is it refundable?</li>
                                                    <li>Are there limitations on my pet?</li>
                                                    <li>Are any utilities included?</li>
                                                    <li>Which of the utilities am I responsible for?</li>
                                                    <li>Am I going to be responsible for any maintenance?</li>
                                                    <li>Is there parking and is it included in the rent?</li>
                                                    <li>How many spaces will I get and are they assigned?</li>
                                                    <li>Is there anywhere for guests to park?</li>
                                                    <li>Is there laundry on the premises?</li>
                                                    <li>How is trash removal handled?</li>
                                                    <li>Are there any community rules regarding overnight guests, parties, or quiet hours?</li>
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

    	<div class="pt30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-5 mb30">
                                        		<img src="{{ asset('assets/img/illus-14.png') }}" />
                                        	</div>
                                            <div class="col-lg-5 mb30">
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            	<p style="color: #497ceb";><b>FOUR</b></p>
                                                <h3 class="header-text">
                                                	Additional questions you may want to ask
                                                </h3>
                                                <p>
                                                	<li>What modifications am I allowed to make to the apartment? (Painting, installing shelves, hanging pictures, ect.)?</li>
                                                	<li>24 hour number for maintenance emergencies? How fast can I expect for someone to respond to a maintenance problem?</li>
                                                	<li>What is the current tenant mix and can I speak with them?</li>
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

    	<div class="pt30" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-5 mb30">
                                        		<img src="{{ asset('assets/img/illus-15.png') }}" />
                                        	</div>
                                            <div class="col-lg-5 mb30">
                                            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                                            	<p style="color: #497ceb";><b>FIVE</b></p>
                                                <h3 class="header-text">
                                                	The following is a profile of someone that is a successful apartment hunter:
                                                </h3>
                                                <p>
                                                	<li>Has a realistic budget and expectations</li>
                                                    <li>Is gainfully employed or has a guarantor</li>
                                                    <li>Is dedicated to managing a serious apartment search which will take perseverance</li>
                                                    <li>Knows what they are looking for and what they don't want, so they don't waste their own time or the time of others</li>
                                                    <li>Knows the neighborhood that they want to live in</li>
                                                    <li>Knows the terms of the lease that they need</li>
                                                    <li>Knows what they want in terms of bedrooms, closets, bathrooms, size of kitchen.</li>
                                                    <li>Know what they want in terms of flooring, heating type, oil/gas, appliances, fireplace, air conditioning, washer/dryer, dishwasher, storage, deck, security system</li>
                                                    <li>Knows the proximity to public transport, schools, shopping, work/school, park and recreation facilities</li>
                                                    <li>Has a copy of their credit report in hand ready to give it to a landlord if they see a place they like.</li>
                                                    <li>Is prepared to give previous landlord references, references, or anything else that will make them look great</li>
                                                    <li>Is dressed to impress (you don't need to wear a three piece suit, but try not to look like an absolute slob either)</li>
                                                    <li>Is prepared to give either a check or cash for an initial deposit if they like a place</li>
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb30" style="text-align:center";>
		<div class="row align-items-center">
			<div class="col-lg-2 mb30">
                &nbsp;
           	</div>
			<div class="col-lg-8 mb30">
            	<h1>
            		<b>Making sure that<br />
					your place is up to snuff</b>
            	</h1>
            	<img src="{{ asset('assets/img/purple-bar.jpg') }}" />
            </div>
            <div class="col-lg-2 mb30">
                &nbsp;
           	</div>
    	</div>
	</div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block1.png') }}" />
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                                <p>
                                                	<b>Before you actually take possession of your apartment you are going to want to do a walk through</b> with your landlord or real estate agent. When performing your walk through, it is important to make sure that your unit has been well maintained. We also recommend using the Move in inspection checklist that is provided in the tenant information section.
                                                </p>
                                                <br />
												<p>
													You should make sure that before you take possession that both you and your landlord sign it so that when you move out there won't be any discrepancies with regard to your security deposit or any other issues.
												</p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		<img src="{{ asset('assets/img/left-bubbles.jpg') }}" />
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            <h2>
                                            	<b>When you perform your walk through, make sure that you look for the following problems.</b>
                                            </h2>
                                            <br />
                                                <p>
                                                	<li>Make sure that the place is clean and free of debris</li>
                                                    <li>Signs of insects, vermin, or rodents</li>
                                                    <li>Signs of leaking or water damage in the floor, walls, or ceilings</li>
                                                    <li>Leaks in the bathroom or kitchen fixtures</li>
                                                    <li>Cracks or excessive holes in the walls, floors, or ceilings</li>
                                                    <li>Lack of hot water</li>
                                                    <li>Inadequate lighting or insufficient electrical outlets</li>
                                                    <li>Signs of rust in the water from the taps</li>
                                                    <li>Inadequate heating</li>
                                                    <li>Defects in the fixtures</li>
                                                    <li>Make sure that there aren't offensive odors and that there is adequate ventilation</li>
                                                    <li>Damaged flooring</li>
                                                    <li>Make sure that there are adequate trash and garbage receptacles</li>
                                                    <li>Make sure that there is not chipping paint (especially in older buildings). In the tenant information there is a link to information on how to protect your family from lead. You can also get additional information by calling 1-800-424-LEAD</li>
                                                    <li>Make sure that there isn't crumbling asbestos in the apartment. Asbestos particles can cause serious problems if inhaled and are often used to insulate pipes, as siding, or flooring tiles. Make sure that if it is used that it is in good condition.</li>
                                              	</p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block2.png') }}" />
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block3.png') }}" />
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            <p>&nbsp;</p>
                                                <p>
                                                	<b>The quality of rental units varies from unit to unit. Make sure that you look at everything when considering if the place is what you are looking for, including a reasonable rent.</b>
                                                </p>
                                                <br />
                                                <p>
                                                	Make sure that you look at the common areas, such as the hallways, laundry area, and yard. Is it clean? How does the exterior of the building look? If there is a yard, make sure that you find out who is responsible for taking care of it. If it will be you, make sure to ask if the landlord will supply the necessary equipment, such as a lawn mower, and a hose.
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            <p>&nbsp;</p>
                                                <p>
                                                	<b>During this initial walk through, you will have the best opportunity to see how your potential landlord will react to your concerns</b>
                                                </p>
                                                <br />
                                                <p>
                                                	It is also important because it will show the landlord how you react to potential problems that may arise. How you get along on this walk through will be very important to help both of you decide whether or not you will become a tenant.
                                                </p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block4.png') }}" />
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                                                        
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block5.png') }}" />
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            <p>&nbsp;</p>
                                                <h3>
                                                	<b>If you do find problems like the ones listed above, discuss them with the landlord. You can check which problems are required by law to be fixed by going to the tenant section and looking at the landlord tenant handbook</b>
                                                </h3>
                                                <br />
                                                <p>
                                                	Make sure that you find out when the landlord intends to make the repairs that you discuss. If you do decide to rent the unit it is a good idea to get these promises in writing, including a date that these repairs will be fixed. It is also a good idea to take photographs or a video of the problems to accompany the signed move in inspection report. 
                                                </p>
                                                <br />
                                                <p>
                                                	<b>Your signed, written description as well as the photos or video will document that the problems were there when you moved in, and can help avoid disagreement later about your responsibility for the problems.</b>
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                                <h3>
                                                	Finally, you should either walk or drive around the neighborhood during the day and again in the evening. If you can, ask neighbors how they like living in the area
                                                </h3>
                                                <br />
                                                <p>
                                                	Also ask whether or not they are concerned about safety. If the apartment is in a multi-family home, you can also ask some of the other tenants how they get along with the landlord and how they like living there. Just make sure that you cover all of your bases because if you sign a one year lease you will be living there for one whole year!
                                                </p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/block6.png') }}" />
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb30" style="text-align:center";>
		<div class="row align-items-center">
			<div class="col-lg-2 mb30">
                &nbsp;
           	</div>
			<div class="col-lg-8 mb30">
            	<h1>
            		<b>The Application Process</b>
            	</h1>
            	<img src="{{ asset('assets/img/purple-bar.jpg') }}" />
            </div>
            <div class="col-lg-2 mb30">
                &nbsp;
           	</div>
    	</div>
	</div>
	
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                                <p>
                                                	Before renting to you, most landlords will ask you to fill out a written rental application. <b>This is not a lease</b> and is similar to a job or credit application. The landlord will use this application to help them decide whether or not to rent to you or not. 
                                                </p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		<p>
                                        			The landlord may also charge you a fee to cover the costs of them obtaining information about you such as checking your references or a credit report. Make sure that you ask  whether or not the fee is refundable, or if the fee will be applied to your rent if you are accepted for the apartment.
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        	<div class="col-lg-4 mb30">
                                        		<img src="{{ asset('assets/img/application-process.png') }}" />
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            	<p>&nbsp;</p>
                                            	<img src="{{ asset('assets/img/question-circle.png') }}" />
                                                <p>
                                                	<b>If they do charge you an application screening fee, ask the landlord the following questions about it.</b>
                                                </p>
                                                <div class="col-lg-4 mb30">
                                        			<p><b>Refunds</b></p>
                                        			<p>
                                        				Is the fee refundable if you are not accepted for the unit
                                        			</p>
                                        		</div>
                                        		<div class="col-lg-4 mb30">
                                        			<p><b>Time</b></p>
                                        			<p>
                                        				How long will it take the landlord to get a copy of your credit report?
                                        			</p>
                                        		</div>
                                        		<div class="col-lg-4 mb30">
                                        			<p><b>How long will it take</b></p>
                                        			<p>
                                        				What are the criteria that the landlord uses to screen perspective tenants?
                                        			</p>
                                        		</div>
                                        		<div class="col-lg-4 mb30">
                                        			<p><b>How long will it take</b></p>
                                        			<p>
                                        				For the landlord to review the credit report and decide whether or not to?
                                        			</p>
                                        		</div>
                                        		<div class="col-lg-4 mb30">
                                        			<p><b>Have your credit report?</b></p>
                                        			<p>
                                        				Will the landlord accept it and either reduce the fee or not charge it at all?
                                        			</p>
                                        		</div>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            <img src="{{ asset('assets/img/unsatisfied-circle.png') }}" />
                                            <h3>
                                            	When you are unsatisfied ...
                                            </h3>
                                                <p>
                                                	If you don't like the landlord's application screening fee or the process you may want to look for another unit. If you do decide to pay the fee, make sure that any agreement regarding a refund be in writing.
                                                </p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:center";>
	<img src="{{ asset('assets/img/img-middle.jpg') }}" />
</div>
                                    
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30">
                                                <p>
                                                	<b>The rental application usually asks for the following information:</b>
                                                </p>
                                                <p>
                                                	The names, addresses, and phone numbers of your current and past employers
                                                </p>
                                                 <p>
                                                	The names, addresses, and phone numbers of your current and past landlords
                                                </p>
                                                 <p>
                                                	The names, addresses, and phone numbers of people whom you want to use as references
                                                </p>
                                            </div>
                                            <div class="col-lg-4 mb30">
                                        		<p>
                                        			&nbsp;
                                                </p>
                                                 <p style="color: #6c75d9";>
                                                	Your current address<br /><br />
                                                    How much money you currently make<br /><br />
                                                    Your social security number<br /><br />
                                                    Your bank account numbers<br />
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>
                                    
<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/credit-circle.png') }}" />&nbsp;Credit-Related Information</b></h3>
                                                <p>
                                                	The application will usually also contain an authorization for the landlord to obtain a copy of your credit report which will show them how you have handled your financial obligations in the past. Credit reporting agencies keep records of people's credit histories, called "credit reports." Credit reports state whether or not you have been reported being late in paying bills.
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/ask-circle.png') }}" />&nbsp;What the Landlord may ask</b></h3>
                                                <p>
                                                	The landlord may ask you what kind of job you have, your monthly income, and other information that shows your ability to pay the rent. They may also ask how many people that you plan on living in the unit. It is practical for a landlord to find out how many people will occupy their unit. The landlord cannot use overcrowding for refusing to rent to children if they would rent the unit to the same number of adults. 
													<br /><br />
													It is illegal for them to ask questions about your race, color, national origin ancestry, religion, or sexual orientation. It is also illegal for them to ask whether or not you are married, or if you have a disability.
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/like-circle.png') }}" />&nbsp;What Landlords like</b></h3>
                                                <p>
                                                	Landlords prefer to rent to people who have a history of paying their rent and other bills on time. They may also use tenant screening services to see whether or not you have been someone that pays their bills on time. These services collect and sell information on tenants, such as whether they pay their rent on time and whether they have been the subject of an eviction lawsuit. 
													<br /><br />
													A landlord usually doesn't have to give you a reason for refusing to rent to you. However, if the decision is based partially or entirely on negative information on your credit report, you should request to see that report. If there is erroneous information on your report you should contact those agencies and see if you can get it removed as it may also cause other landlords to refuse to rent to you. 
													<br /><br />
													Also, if you know what your credit report says, you may be able to explain any problems when you fill out the rental application. For example, if you know that you paid a bill and the credit report says that you didn't you can provide a copy of the canceled check to show that you did pay it.
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/deposit-circle.png') }}" />&nbsp;Securing your apartment with a deposit</b></h3>
                                                <p>
                                                	Sometimes the tenant and the landlord will agree that the tenant will rent the unit, but the tenant cannot move in immediately. In this situation, the landlord may ask the tenant for a deposit to hold the place. This is a deposit to hold the rental unit for a stated period of time until the tenant pays the first month's rent and any security deposit. During this period, the landlord agrees not to rent the unit to anyone else. If the tenant changes his or her mind about moving in, the landlord may keep all, or at least some of the deposit.
                                                </p>
                                                <div class="col-lg-2 mb10">
                                                	&nbsp;
                                                </div>
                                                <div class="col-lg-8 mb10" style="border-radius: 25px; padding: 20px; background-color: #ececec";>
                                                	<h2>
                                                		<b>Ask the following questions before you give a deposit to hold an apartment:</b>
                                                	</h2>
                                                	<p>
                                                		Will the deposit be applied to the first month's rent? If so, ask the landlord for a deposit receipt stating this. Applying the deposit to the fires month's rent is a common practice.
                                                	</p>
                                                	<p>
                                                		Is any part of the holding deposit refundable if you change your mind about renting? As a general rule, if you change your mind, the landlord can keep some- and perhaps all- of your holding deposit.
                                                	</p>
                                                </div>
                                                <div class="col-lg-2 mb10">
                                                	&nbsp;
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/about-circle.png') }}" />&nbsp;About deposits</b></h3>
                                                <p>
                                                	What a holding deposit does is guarantee that the landlord will not rent the unit to another person for a stated period of time. The deposit doesn't give the tenant the right to move in to the unit. The tenant must first sign their lease and pay the agreed upon rent, and all other required deposits within the holding period. If the tenant doesn't come up with the money within the agreed upon time, it gives the landlord the right to rent the unit to another person and keep all or part of the deposit.
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

<div class="pt60 pb10" style="text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-6 mb30">
                                            <h3><b><img src="{{ asset('assets/img/issue-circle.png') }}" />&nbsp;Issues with deposits</b></h3>
                                                <p>
                                                	Conversely, if the landlord rents to someone else during the period for which you've paid a deposit, you have rights. If you are still willing and able to move in the landlord should, at a minimum, return the entire holding deposit to you. You may also want to talk with an attorney, legal aid organization, or housing authority about whether or not the landlord may also be responsible for other costs that you may incur because of the loss of the rental unit.
                                                </p>
                                            </div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>                                                                                                                                                                                                                                                                                                

<div class="pt60 pb10" style="background-color: #eff1f9; text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            	<img src="{{ asset('assets/img/smaller-purple-bar.jpg') }}" />
                                            	<h3>Signing the lease</h3>
                                                <p>
                                                	Before you move in most landlords will require you to sign a lease. The lease is a document that states the terms of your tenancy as well as the length of time that you will occupy the unit. The most important part of signing the lease is to read it thoroughly.
                                                </p>
                                                <h3>
                                                	<b>The most important things to look for in a lease</b>
                                                </h3>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 1</b
                                                </p>
                                                <p>
                                                	Is the lease is month to month or for a specified period of time?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 2</b
                                                </p>
                                                <p>
                                                	When is the rent due every month?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 3</b
                                                </p>
                                                <p>
                                                	Are the utilities included and if so which ones are?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 4</b
                                                </p>
                                                <p>
                                                	Are pets allowed and if so how many and what types are allowed?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 5</b
                                                </p>
                                                <p>
                                                	Can i sublet the apartment if I move?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 6</b
                                                </p>
                                                <p>
                                                	How many people can occupy the property at the same time?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 7</b
                                                </p>
                                                <p>
                                                	Can I paint or alter the apartment in any way?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 8</b
                                                </p>
                                                <p>
                                                	Who is responsible for maintenance and rubbish removal?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 9</b
                                                </p>
                                                <p>
                                                	Is there an early termination fee if you have to break the lease?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 10</b
                                                </p>
                                                <p>
                                                	What are the landlord rights to enter your place?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 11</b
                                                </p>
                                                <p>
                                                	Is there additional storage with the place?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 12</b
                                                </p>
                                                <p>
                                                	Are there rules about moving in or out from the place?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 13</b
                                                </p>
                                                <p>
                                                	How many parking spaces come with the apartment and are they assigned to each unit?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 14</b
                                                </p>
                                                <p>
                                                	Are there specific rules for this apartment such as noise rules, or any other rule which is specific to this place?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 15</b
                                                </p>
                                                <p>
                                                	Are there late fees with regard to the rent payments if they are not paid on time, and if so what are the resulting fees?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 16</b
                                                </p>
                                                <p>
                                                	If you want to extend your tenancy, is there a specific time frame that you must notify the landlord beforehand?
                                                </p>
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30 top-rectangle">
                                                <p style="color: #8b85c1";>
                                                	<b>QUESTION 17</b>
                                                </p>
                                                <p+-
                                                ->
                                                	If you are not going to renew your lease, what kind of time frame must the landlord give you to show the place when you are there?
                                                </p>
                                            </div>
                                            <div class="col-lg-1 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                        </div>
                                    </div>

									<div class="pt60 pb10" style="background-color: #ffffff; text-align:left";>
                                        <div class="row">
                                        	<div class="col-lg-3 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-4 mb30">
                                            	<p style="color: #8b85c1";>
                                            		<b>REMINDER ONE:</b>
                                            	</p>
                                            	<h3>The bottom line with regards to the lease is to make sure that you read every part of the document before you sign it.</h3>
                                                <p>
                                                	The lease is a contract between you and the landlord and not only protects their rights but yours as well. You need to understand that when you sign the contract that both you and the landlord agree to abide by what is on the lease, so you need to make sure that what you have agreed upon is in writing on that document.
                                                </p>
                                                <p>&nbsp;</p>
                                                <p style="color: #8b85c1";>
                                            		<b>REMINDER TWO:</b>
                                            	</p>
                                            	<h3>Also understand that if you are signing the lease with roommates that you are not signing a fractional piece of the lease.</h3>
                                                <p>
                                                	Every name that is on the document is fully responsible for all of the terms of the lease. If one of your roommates moves, your rent will not go down unless the landlord agrees to lower the rent, at which time you should have a new lease drawn up. If one of your roommates moves and you get another roommate, make sure that you get that roommate to sign a new lease with the landlord to alleviate confusion if there is a problem.
                                                </p>
                                                <p>&nbsp;</p>
                                                <p style="color: #8b85c1";>
                                            		<b>REMINDER THREE:</b>
                                            	</p>
                                            	<h3>Make sure that you get a copy of the lease when signed</h3>
                                                <p>
                                                	And when you get that lease that it has been signed by either the landlord or a licensed agent of the landlord. The lease must be signed by both the tenants as well as the landlord before it is fully executed. Keep that lease in a safe place with your important documents in case you ever need to reference
                                                </p>
                                            </div>
                                            <div class="col-lg-2 mb30">
                                        		&nbsp;
                                        	</div>
                                            <div class="col-lg-3 mb30">
                                        		<img src="{{ asset('assets/img/right-bubbles.jpg') }}" class="pull-right"/>
                                        	</div>
                                        </div>
                                	</div>             
                                	
</div>
@endsection