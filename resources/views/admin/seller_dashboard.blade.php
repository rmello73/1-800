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
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <h1 class="page-header">Seller @lang('app.dashboard')</h1>
                                                <h2><img src="http://1-800.lenoxproperty.com/assets/img/buyrent.png" width="36px" height="36px" />&nbsp;
                                    					    <input type="radio" name="user_type" value="saveuser" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/agent_dashboard';"> Are you a real estate agent or management company?
                                    				    </h2>
                                                <h2><img src="http://1-800.lenoxproperty.com/assets/img/buyrent.png" width="36px" height="36px" />&nbsp;
                                    					    <input type="radio" name="user_type" value="saveuser" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/landlord_dashboard';"> Are you a landlord or a property owner?
                                    				    </h2>
                                            </div>
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
                </div>
                </div>
    <!-- /#wrapper -->
@endsection
