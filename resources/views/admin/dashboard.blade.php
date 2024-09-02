@extends('layout.main')

@section('page-css')
<style>
/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid #081F51;
}
.div-shadow
{
      width:220px;height:170px;
      border: solid 1px #1C3881;
      background-color: #eed;
      box-shadow:  0 0 10px  rgba(0,0,0,0.6);
      -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
}
button {
    width: 137px;
    height: 45px;
    object-fit: contain;
    box-shadow: 0 2px 4px 0 rgba(192, 192, 192, 0.5);
    background-color: #29679d;
    font-family: Roboto;
    font-size: 16px;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #ffffff;
}
.Set-up-your-Profile {
    opacity: 0.8;
    font-family: Roboto;
    font-size: 28px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #000000;
}
.It-appears-that-this {
    opacity: 0.8;
    font-family: Roboto;
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.63;
    letter-spacing: normal;
    color: #000000;
}
.I-am-looking-to {
    font-family: Roboto;
    font-size: 24px;
    font-weight: 600;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #000000;
}
.new-background {
    background-image: url("https://1-800.lenoxproperty.com/assets/img/background.jpg");
    background-attachment: scroll;
    background-position: bottom right;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    position: relative;
    height: 100%;
}
</style>
@endsection

@section('main')

        @if(!$lUser->is_basic())
        @include('admin.sidebar_menu')
        @endif

        <div id="page-wrapper">
            <div class="grid-container-admin"></div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="Set-up-your-Profile">
                        @if($lUser->is_basic()) Set Up Your Profile!
                        @else
                            @if(!$lUser->is_pmc()) @lang('app.dashboard')
                            @else
                                PMC Dashboard
                            @endif
                        @endif</p>
                </div>
            </div>

            @if($lUser->is_basic())
            
             <form action="{{ route('register_user') }}" method="POST">
             {{ csrf_field() }}

            <p class="It-appears-that-this">It appears this is your first time logging in. Let's get you set up! <br />Please select your main area of interest today from the choices below.</p>
	    <div class="grid-container-admin"></div>
		    <p class="I-am-looking-to ">I am looking to:</p>
		<div class="grid-container"></div>
		    <div class="row">
			<div class="col-md-4" id="saveuser-select">
				<label>
					<input type="radio" name="user_type" value="saveuser">
					<img class="div-shadow" src="{{ asset('assets/img/buy-or-lease.jpg') }}" />
				</label>
			</div>
			 <div class="col-md-4">
				 <label>
                                        <input type="radio" name="user_type" value="seller_select" id="seller_select">
                                	<img class="div-shadow" src="{{ asset('assets/img/sell-or-lease.jpg') }}" />
				</label>
                        </div>
			 <div class="col-md-4" id="prof-select">
				 <label>
                                        <input type="radio" name="user_type" value="prof">
                                	<img class="div-shadow" src="{{ asset('assets/img/advertise-my-business.jpg') }}" />
				</label>
                        </div>
		    </div>
		    <div class="grid-container"></div>
		    <div class="col-lg-12" id="seller-select" style="display:none;">
                <p class="I-am-looking-to ">Who are you?</p>
                <div class="grid-container"></div>
						<div class="col-md-3">
							&nbsp;
						</div>
                                                <div class="col-md-3">
                                                        <label>
                                                                <input type="radio" name="user_type" value="agent">
                                                                <img class="div-shadow" src="{{ asset('assets/img/realtor.jpg') }}" />
                                                        </label>
                                                </div>
                                                <div class="col-md-3">
                                                        <label>
                                                                <input type="radio" name="user_type" value="landlord">
                                                                <img class="div-shadow" src="{{ asset('assets/img/owner.jpg') }}" />
                                                        </label>
                                                </div>
						<div class="col-md-3">
                                                        &nbsp;
                                                </div>
                                </div>
		                <div class="grid-container-admin"></div>
                        <div class="form-group" id="start-profile" style="display:none;">
                                <button type="submit" id="settings_save_btn" class="btn btn-primary" style="background-color:#29679d";>Start my profile</button>
                        </div>

                        </form>
                    <div class="grid-container-admin"></div>
                    <div class="grid-container-admin"></div>
                </div>
            @endif
            
            @if((!$lUser->is_basic() and !$lUser->is_admin()) and !$lUser->is_prof() and !$lUser->is_saveuser())
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="row" align="center">
							<iframe width="800" height="500" src="https://www.youtube.com/embed/5e8Kb16r2X0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        </div>
                     	</div>
                    </div>
                    <div class="col-lg-12">
    					<div class="row">
    					    <div class="col-lg-12">
                                <h2>Listing Instructions</h2>
                                <br />
                                <b>1.</b>     Once you have entered your account information click properties on the left.<br /><br />
                                <b>2.</b>     When you click properties you will see every property you have ever entered.  You have the option to either hide or unhide a previous listing or to add a new property.  You can also delete a listing if you would like to.<br /><br />
                                <b>3.</b>     Once you click the Add a property tab you will be directed to a page where you need to select a property type.<br /><br />
                                <b>4.</b>     After you select a property type please put in all required information and remember to post a good description and great photos and video of the unit and the neighborhood as they will help you get more potential customers.<br /><br />
                                <b>5.</b>     After you have put in all of the information you are ready to load up your photos and videos. RealtyRI allows you not only to put up a video of the property you are trying to lease but also of the neighborhood that it is in to give the potential tenant a feel for the area.<br /><br />
                                <b>6.</b>     Once you have put in your information scroll to the bottom of the page and click on the "Save new Ad" tab. This will enter your information to the server and it is now active.<br /><br />
                                <b>7.</b>     If you would like to change any of the information simply hit properties and click edit on the property you would like to change.<br /><br />
                            </div>
					    </div>
                    </div>
                </div>
            </div>
            @endif
        
        </div>

@endsection

@section('page-js')

<script type="text/javascript">
$('#seller_select').click(function() {
    $("#seller-select").fadeToggle( "slow", "linear" );
    $("#start-profile").show();
});
$('#saveuser-select').click(function() {
	$("#seller-select").hide();
    $("#start-profile").show();
});
$('#pmc-select').click(function() {
    $("#seller-select").hide();
    $("#start-profile").show();
});
$('#prof-select').click(function() {
    $("#seller-select").hide();
    $("#start-profile").show();
});
</script>
@endsection
