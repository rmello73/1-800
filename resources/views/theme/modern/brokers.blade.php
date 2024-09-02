@extends('layout.main') 

@section('title'){{trans('Rhode Island mortgage brokers and mortgage professionals')}}@stop
@section('description', 'Find the best mortgage brokers in Rhode Island and get helpful information and education about the mortgage process.')
@section('keywords', 'Rhode Island, mortgage, broker, professional, lender, banker, real estate, loan, rate, education, RI')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<style>
.grid-container {
  padding: 40px;
}
.top {
  font-size: 50px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #ffffff;
}
.title-header {
  font-family: Roboto;
  font-size: 18px;
  font-weight: bold;
  color: #000000;
}
.s01 {
  min-height: 80vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("http://1-800.lenoxproperty.com/assets/img/broker.jpg");
  background-size: cover;
  background-position: center center;
  padding: 15px;
}
fieldset {
  padding: 0.35em 0.75em 0.625em;
}
.s01 form {
  width: 100%;
  max-width: 1290px;
}

.s01 form legend {
  font-size: 72px;
  line-height: 1;
  color: #fff;
  margin-bottom: 60px;
}

.s01 form .inner-form {
  background: rgba(36, 60, 132, 0.5);
  padding: 30px 30px;
  display: -ms-flexbox;
  display: flex;
  width: 70%;
  -ms-flex-pack: justify;
      justify-content: space-between;
  -ms-flex-align: center;
      align-items: center;
}

.s01 form .inner-form .input-field {
  margin-right: 30px;
  height: 68px;
}

.s01 form .inner-form .input-field input {
  height: 100%;
  background: #fff;
  border-radius: .5px;
  border: 0;
  display: block;
  width: 100%;
  padding: 10px 32px;
  font-size: 20px;
}

.s01 form .inner-form .input-field input.placeholder {
  color: #000000;
  font-size: 20px;
}

.s01 form .inner-form .input-field input:-moz-placeholder {
  color: #9a9a9a;
  font-size: 20px;
}

.s01 form .inner-form .input-field input::-webkit-input-placeholder {
  color: #9a9a9a;
  font-size: 20px;
}

.s01 form .inner-form .input-field input:hover, .s01 form .inner-form .input-field input:focus {
  box-shadow: none;
  outline: 0;
}

.s01 form .inner-form .input-field.first-wrap {
  -ms-flex-positive: 1;
      flex-grow: 1;
}

.s01 form .inner-form .input-field.second-wrap {
  width: 32.77%;
  min-width: 180px;
}

.s01 form .inner-form .input-field.third-wrap {
  width: 180px;
  margin-right: 0;
}

.s01 form .inner-form .input-field.third-wrap .btn-search {
  height: 100%;
  width: 100%;
  background: #ECA823;
  white-space: nowrap;
  border-radius: .5px;
  font-size: 20px;
  color: #fff;
  transition: all .2s ease-out, color .2s ease-out;
  border: 0;
  cursor: pointer;
}

.s01 form .inner-form .input-field.third-wrap .btn-search:hover {
  background: #2d62d3;
}
@media screen and (max-width: 992px) {
  .s01 form legend {
    font-size: 50px;
    text-align: center;
    margin-bottom: 50px;
  }
  .s01 form .inner-form {
    padding: 30px 35px;
  }
  .s01 form .inner-form .input-field {
    height: 50px;
  }
}

@media screen and (max-width: 767px) {
  .s01 form legend {
    font-size: 30px;
    margin-bottom: 40px;
  }
  .s01 form .inner-form {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    padding: 20px;
  }
  .s01 form .inner-form .input-field {
    margin-right: 0;
  }
  .s01 form .inner-form .input-field input {
    padding: 5px 15px;
    font-size: 16px;
  }
  .s01 form .inner-form .input-field.first-wrap {
    width: 100%;
    margin-bottom: 20px;
  }
  .s01 form .inner-form .input-field.second-wrap {
    width: calc(50% - 10px);
    min-width: auto;
  }
  .s01 form .inner-form .input-field.third-wrap {
    width: calc(50% - 10px);
  }
  .s01 form .inner-form .input-field.third-wrap .btn-search {
    font-size: 16px;
  }
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div class="s01">
      <form class="form-inline" action="{{ route('broker-listing') }}" method="get">
        <fieldset>
          <h1 class="top">Find Local Mortgage Professionals</h1>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="city" type="text" name="city" value="{{ request('city') }}" placeholder="What city are you looking in?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
        </div>
        <fieldset>
          <h1 class="top">Where are you looking?</h1>
        </fieldset>
      </form>
    </div>

<div class="container">
    <div class="row">
        <h1>Why is it that nearly half of Mortgage borrowers don't shop around when they buy a home?</h1>
    </div>
    <div class="col-md-6">
    <div class="row">
        <div class="col-sm-1">
            &nbsp;
        </div>
        <div class="col-sm-6">
            <img src="http://1-800.lenoxproperty.com/assets/img/underline.png" />
                
                <div class="grid-container mobile-hide">&nbsp;</div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/globe.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">Finding a mortgage lender involves more than just getting a good interest rate; you want to work with the best mortgage companies who will help you prepare to navigate the process.</p>
               <p class="details">Choosing a mortgage company really depends on your situation.  A refinance is different than a purchase and rate alone doesn't always tell the story.  Placing an emphasis on accuracy, efficiency and timeliness  should also factor into a buyers decision.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">70% of home buyers take proactive steps to ensure that they are credit worthy and in a good position to qualify for the best loan possible.</p>
               <p class="details">Finding a lender who is willing to provide financial education and willing to take the time to ensure that their buyers financial health is in order should be a must when researching who you feel comfortable with.
Buying a home is a big purchase, but it’s just that: a purchase.  <br />In the modern marketplace there is no reason not to be well educated before you make your mortgage decision.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">What's important to you may be different than what is important to someone else. </p>
               <p class="details">Customer service and how comfortable you are talking about your finances with someone are among the most important factors you should think about.  A mortgage is a pretty standard produce and what sets the best lenders apart is when problems come up, They are going to have solutions and give you the personal attention you need.</p>
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/CBIJwb37O_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Helpful information about mortgages</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>FIRST TIME HOME BUYER TIPS</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/3FWt6_ZTJpM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Rent or Buy: You're Still Paying a Mortgage</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/5izbakCBBuA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>The RI Housing $7,500 First Down Program is Back!</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/7tLVNWHk6aQ?si=tdWO-bXTTCfW4GPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
    <div class="row">
        <div class="col-md-3">
            &nbsp;
        </div>
        <div class="col-md-3" align="center">
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/real-estate-properties'" class="btn btn-lg btn-transparent">SEE REAL ESTATE</button>
        </div>
        <div class="col-md-3 align="center"">
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/brokerlisting?city='" class="btn btn-primary btn-solid">MORTGAGE PROS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
