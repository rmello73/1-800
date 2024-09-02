@extends('layout.main')

@section('page-css')
<style>
    .bigger{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/dashboard-cover.jpg");
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
<div class
</style>
@endsection

@section('main')
    <div id="wrapper" align="center">
                <div class="row">
                    <div class="col-lg-12"> 
                    	<div class="bigger">
                    		<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="text-white mb20">Real Estate Agent Profile Set Up</h1>
                                            <h3 style="color:#8b85c1";>1-800RealEstate.com is here to promote you!</h3>
                                            <p>	
 												We want you to have the opportunity to promote yourself and grow your business the way you see fit.  We encourage you to include a video of each property as well as a video of the neighborhood.
												<br /><br />
 												Posting your listing is the best opportunity for you to show the public your creative marketing and why they should all want to hire you!  
												<br /><br />
												On 1-800RealEstate.com only the agent who posts the properties will be the person who gets the contacted from prospective customers.  We are here to help you grow your business and get your properties sold or leased quickly!  Good luck!
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/LIlDs3KSako?si=udtlmDEAkkzzKNU1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    					</div>
                                    </div>
                                </div>
                            </div><!--/.Analysis-->
						</div>
                    </div>
                </div>
                
                <div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        1    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>Who are you?</h3>
                                            <p>
                                            	Post a photo of yourself and also post an image of your company's logo so you can promote yourself on all of your listings.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea1.jpg') }}" width="350px" height="250px" />
                    					</div>
                                    </div>
                                </div>
                            </div>
            
            	<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea2.jpg') }}" width="350px" height="250px" />
                    					</div>
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        2    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>Videos do the job</h3>
                                            <p>
                                            	Post one video about yourself to let potential buyers and sellers know why they should hire you and post up to 3 additional videos giving buyers and sellers tips which again should promote yourself.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
 
 				<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        3    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>What are your specialties?</h3>
                                            <p>
                                            	Put in up to 10 towns which you are really knowledgeable about. Then put in up to 5 types of real estate which you specialize in such as property management or buyers broker.
											</p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea3.jpg') }}" width="350px" height="250px" />
                    					</div>
                                    </div>
                                </div>
                            </div>

				<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea4.jpg') }}" width="350px" height="250px" />
                    					</div>
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        4    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>Help them find who you are</h3>
                                            <p>
                                            	Put in all of your contact information so customers can reach you. Also put in your links to your facebook, instagram and twitter account so you can post your ads with one click to social media.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

				<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        5    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>Show everything you have</h3>
                                            <p>
                                            	When you begin posting properties include a video of the property as well as the neighborhood or town it is in which once again is giving you the opportunity to showcase yourself.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea5.jpg') }}" width="350px" height="250px" />
                    					</div>
                                    </div>
                                </div>
                            </div>
                                  
                <div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/rea6.jpg') }}" width="350px" height="250px" />
                    					</div>
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#8b85c1";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        6    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#8b85c1";>Don't forget about yourself</h3>
                                            <p>
                                            	Remember we want you to promote yourself on all of your listings! When you post your photos if you would like to put your companies sign or yourself in the photos it is fine.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                                             
                <div class="form-group" align="center">
                    <a href="http://1-800.lenoxproperty.com/dashboard/u/posts/profile/edit">
                    	<img type="submit" src="{{ asset('assets/img/start-my-profile.jpg') }}" width="137px" height="45px" />
                    </a>
                </div>
    </div>
    <!-- /#wrapper -->
@endsection
