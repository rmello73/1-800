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
                                            <h1 class="text-white mb20">Landlord/Owner Profile Set Up</h1>
                                            <h3 style="color:#28536b";>We are here to help you grow your business!</h3>
                                            <p>	
 												1-800RealEstate.com is a free marketplace where you can advertise any type of commercial or residential real estate for free. During the initial set up we need you to put in a good phone number and e-mail address so potential customers can contact you to set up a showing. We also encourage you to put in a photo of yourself so people know who they are doing business with. Please read the fair housing laws so you are fully aware of them. 
												<br /><br />
 												When advertising your properties please make sure that you have a great description, lots of photos, and include a video of the property as well as a video of your town or neighborhood. If you decide that you would rather have real estate agent do the job please check out the agent finder page.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
                    						<iframe width="500" height="300" src="https://www.youtube.com/embed/TI_j20flWfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    					</div>
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
                                                <span class="fa-stack" style="color:#2d83ac";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        1    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#2d83ac";>We're here to help</h3>
                                            <p>
                                            	Read through selling tips or everything a landlord needs to know. They are extremely thorough and will guide you through the process.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/ll1.jpg') }}" width="350px" height="250px" />
                    					</div>
                                    </div>
                                </div>
                            </div>
            
            	<div class="bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}'>
                                <div class="container pt60 pb30">
                                    <div class="row align-items-center">
                                    	<div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/ll2.jpg') }}" width="350px" height="250px" />
                    					</div>
                                        <div class="col-lg-6 mb30 text-center">
                                            <h1 class="entry-title text-capitalize">
                                                <span class="fa-stack" style="color:#2d83ac";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        2    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#2d83ac";>Look for your needs</h3>
                                            <p>
                                            	Research professionals such as photographers, videographers, contractors, appraisers or attorneys who may be of assistance to you.
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
                                                <span class="fa-stack" style="color:#2d83ac";>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-1x">
                                                        3    
                                                    </strong>
                                                </span>
                                            </h1>
                                            <h3 style="color:#2d83ac";>Start selling!</h3>
                                            <p>
                                            	Post ads which should have a great description, lots of crisp photos of your house as well as a video of your property and the neighborhood or your town to highlight reasons people want to live there.
											</p>
                                        </div>
                                        <div class="col-lg-6 mb30">
											<img src="{{ asset('assets/img/ll3.jpg') }}" width="350px" height="250px" />
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
