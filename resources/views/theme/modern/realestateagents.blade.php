@extends('layout.main') 

@section('title'){{trans('Rhode Island Real Estate Agents')}}@stop
@section('description', 'Find information and reviews about real estate agents all over Rhode Island.  Get lots of helpful information and education about what to look for in a real estate agent.')
@section('keywords', 'Rhode Island, agent, realtor, real estate, RI, review')
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
.primary-color {
  background-color: #23326a!important;
  width: 144px;
  height: 42px;
  font-family: Roboto;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
}
.bottom {
  font-size: 50px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
input::-webkit-input-placeholder {
    color: #ffffff !important;
}
select option {
  background-color: #23326a;
}

.modern-top-photographer-bottom {
	background-image: url("http://1-800.lenoxproperty.com/assets/img/photographers-bottom.png");
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	height:465px;
}

.modern-top-photographer-section {
	background-image: url("http://1-800.lenoxproperty.com/assets/img/photographer.jpg");
	background-position: 0 30%;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	height: 700px;
}

.modern-top-photogapher-section::before {
	content: "";
	height: 100%;
	left: 0;
	opacity: 0.6;
	position: absolute;
	top: 0;
	width: 100%;
}
.image-overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
}
.tagline {
    background-color: #23326a !important;
}
.title-header {
  font-family: Roboto;
  font-size: 18px;
  font-weight: bold;
  color: #000000;
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px;
  padding-bottom: 15px;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
}
.details {
  font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #555555;
}
.vl {
  border-left: 1px solid #ececec;
  height: 100px;
}
.attention {
  width: 618px;
  height: 68px;
  font-family: OpenSans;
  font-size: 50px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.title-photo {
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.photo-details {
  height: 30px;
  font-family: Roboto;
  font-size: 11px;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.36;
  letter-spacing: normal;
  color: #6d6d6d;
}
.colorline {
  border-bottom: 3px solid #92C0E3;
}
p {
    color: #666666;
}
.bottom-title {
    color: #ffffff;
}
.btn-new {
    background: transparent;
    color: #F2F2F2;
    -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
    -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
    -o-transition: background .2s ease-in-out, border .2s ease-in-out;
    transition: background .2s ease-in-out, border .2s ease-in-out;
    border: 2px solid #F2F2F2;
    border-radius: 60px;
    width: 150px;
    height: 42px;
}
.btn-new:hover {
    color: white;
    background-color: rgba(255,255,255,0.2);
}
.dropdown {
              background: transparent !important;
              color: #ffffff;
              border: 1px solid white;
              height: 42px;
              
            }
            input::-webkit-input-placeholder {
                color: #ffffff !important;
            }
            select option {
              background-color: #23326a;
            }
.banner1 {
  height: 97px;
  width: 80%;
  object-fit: contain;
  opacity: 0.85;
  border-radius: 5px;
  background-color: #ffffff;
  margin-top: 300px;
}
.round-photo {
  background-color: #ffffff;
  margin-top: 20px;
  border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
}
.circular--square {
  border-radius: 50%;
}
.circle-icon {
    background: #ffffff;
    padding:10px;
    border-radius: 50%;
}
.grid-container-top {
    padding-top: 150px;
}
.city-search {
              background: transparent !important;
              color: #ffffff;
              border: 1px solid white;
              height: 42px;
              width: 100%;
            }
            input::-webkit-input-placeholder {
                color: #ffffff !important;
            }
            select option {
              background-color: #23326a;
            }
@media screen and (max-width: 767px) {
    .top {
      font-size: 40px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      line-height: normal;
      letter-spacing: normal;
      text-align: center;
      color: #ffffff;
    }
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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("http://1-800.lenoxproperty.com/assets/img/agent-slide.jpg");
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
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div align="right">
<div class="s01">
      <form class="form-inline" action="{{ route('realestateagent-listing') }}" method="get">
        <fieldset>
          <h1 class="top" style="text-align:right";>FIND THE BEST REAL ESTATE AGENTS</h1>
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
          <h1 class="top" style="text-align:right";>Where are you looking?</h1>
        </fieldset>
      </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>Leading real estate agents agree that while ratings on sites can be helpful, the best way to select the right agent is still a human to human choice and you have to go with your gut.</h1>
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
            <div class="col-sm-5">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/globe.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">The first question you need to ask yourself is what are you looking to have a real estate agent do for you?</p>
                   <p class="details">Are you an investor, first-time homebuyer, house flipper, landlord, someone looking for a rental, or selling an estate?  Find someone who works both in and around your specific area of interest.  Make sure the agent you work with has experience in the specific area you are looking in.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">You need to be comfortable with the agents personality, energy level, passion, conviction and honesty.</p>
                   <p class="details">We have encouraged every real estate agent to post as much video of themselves as possible.  Watch them, do your research and decide for yourself who you would like to interview. Choose someone relatable and real. Choose for you, not for the house. Choose someone good at talking and negotiating.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">Choosing a real estate agent that best suits your requirements and personality will help make the transaction a less stressful process.</p>
                   <p class="details">Not all real estate agents are the same, so finding out as much as you can about your potential agent can make a big difference in your experience as a seller, buyer, landlord, or tenant.  You want somebody you can trust and who has experience with both the neighborhoods and specific type of transaction you are looking to engage in.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/_VJ4LKuFtvg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Tips on how to select the right Real Estate agent</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>How to Find a Good Real Estate Agent</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/_H1bjEjBYhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Selecting A Right Buyer Agent</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/VNLtxpHGNT8?si=oFOlttr8Kb-nNCnB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>15 Questions to Ask a Real Estate Agent</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/hj--PJUBH-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/realestateagentlisting?city='" class="btn btn-primary btn-solid">REAL ESTATE AGENTS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
