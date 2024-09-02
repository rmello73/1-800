@extends('layout.main') @section('page-css')
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
	background-image: url("http://1-800.lenoxproperty.com/assets/img/professional.jpg");
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
  min-height: 60vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  background: url("http://1-800.lenoxproperty.com/assets/img/professional.jpg");
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
<div class="s01">
      <form class="form-inline" action="{{ route('professional-listing') }}" method="get">
        <fieldset>
          <h1 class="top">FIND THE BEST REAL ESTATE PROFESSIONALS</h1>
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
        <h1>1-800RealEstate.com wants to empower you the consumer to do your own research and decide for yourself what professionals you want to work with!</h1>
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
                <p class="title-header">Whether you are looking for a real estate agent, mortgage company, contractor, photographer, videographer, real estate attorney, appraiser, home inspector or any other industry professional we are giving you the power to find them.</p>
                   <p class="details">Not all people who work in their professions are equal.  Of course referrals from friends and relatives are important but you should also do your own home work and research the people you want to work with.  Watch their videos, look at the areas they specialize in and do your own homework.  Often times this will save you thousands and make the process less stressful.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">First and foremost you should expect competence!</p>
                   <p class="details">Everyone's situation is unique and we all deserve to work with the best professionals that fit our individual needs.  It is up to you to go through the information we are giving you and do your homework.  One of the overwhelming themes you will see is that the cheapest price doesn't always equate to the best value when it comes to finding the right professionals.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">Having the right professional working on your behalf is an invaluable experience.</p>
                   <p class="details">We all know investing in real estate can be one of the best investments you can ever make.  Invest in yourself and research the right professionals to help you in your journey.  Knowledge is power, and by putting in the time and watching the videos and taking the tips we offer you will be better equipped to get the best professionals come work for you!</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <iframe width="750" height="400" src="https://www.youtube.com/embed/JpDyau_e8P0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">REAL ESTATE PRO TIPS</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/Aq9AbpjJXAs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/e18VMCs8NjY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/e18VMCs8NjY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
    <div class="row">
        <div class="col-md-3">
            &nbsp;
        </div>
        <div class="col-md-3" align="center">
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/listing'" class="btn btn-lg btn-transparent">SEE REAL ESTATE</button>
        </div>
        <div class="col-md-3 align="center"">
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/professionallisting?city='" class="btn btn-primary btn-solid">REAL ESTATE PROFESSIONALS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
