@extends('layout.main') 

@section('title'){{trans('Rhode Island real estate appraisers')}}@stop
@section('description', ' Find information and reviews about real estate appraisers all over Rhode Island.  Get lots of helpful information and education about what to look for in a real estate appraiser and what questions to ask.')
@section('keywords', 'Rhode Island, appraiser, real estate, RI, appraisal, licensed')
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
  background:  linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("http://1-800.lenoxproperty.com/assets/img/appraiser.jpg");
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
      <form class="form-inline" action="{{ route('appraiser-listing') }}" method="get">
        <fieldset>
          <h1 class="top">FIND THE BEST APPRAISERS</h1>
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
        <h1>The computer algorithms run by real estate sites are not 100% accurate.  The only way to get your homes true market value is through a top local real estate agent or an appraiser.</h1>
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
                <p class="title-header">An appraisal and a home inspection are two completely different types of reports.</p>
                   <p class="details">A home inspection gives buyers an idea of what types of repairs the home needs and an estimate on costs and an appraisal gives the home's value. A home appraisal is an UNBIASED report on the worth of a house in the fair market, performed by a trained and licensed individual.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">So how exactly do appraisers come up with a home's true value?</p>
                   <p class="details">There are several steps taken by an appraiser to determine a property’s value, which include visiting the property in-person and reviewing recently-completed sales of comparable homes. The data gathered by the appraiser during this process is combined and presented to you in a final report of value.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
            </div>
            <div class="col-sm-10">
                <p class="title-header">Be sure the appraiser you are contemplating hiring has sufficient experience with the valuation problem you need to solve.</p>
                   <p class="details">Experience alone isn't the best way to choose an appraiser.  Appraisers often work in specific sectors of real estate.  An appraiser with 10 years experience appraising low priced tract homes might not be the best choice for a custom, luxury waterfront home or a commercial/industrial property. Make sure that if you hire an appraiser that they are experienced and competent in your community and with your property type.</p>
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
        <h3 class="top">APPRAISERS TIPS</h3>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/appriaserlisting?city='" class="btn btn-primary btn-solid">APPRAISERS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
