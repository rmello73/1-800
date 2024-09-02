@extends('layout.main')

@section('page-css')
<style>
    .bigger{
  width:100%;
  height:700px;
  background-image:url("http://1-800.lenoxproperty.com/assets/img/saveuser-dashboard-background.jpg");
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
                                        <div class="grid-container-top mobile-hide">&nbsp;</div>
                                            <h1 class="text-white mb20">Congratulations!</h1>
                                            <h3 style="color:#5855D6";>Your sign up is complete!</h3>
                                            <p>
                                            	You can now save properties to your dashboard and share them with your spouse, parents, loved ones or anyone else that you think might be interested. 
												<br /><br />
												We encourage you to also research professionals such as local real estate agents, mortgage people, real estate attorneys, or home improvement pro's who may be able to guid you through the process.
                                            </p>
                                        </div>
                                        <div class="col-lg-6 mb30">
                                        &nbsp;
                    					</div>
                                    </div>
                                </div>
                            </div><!--/.Analysis-->
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
