@extends('layout.main') 

@section('title'){{trans('Rhode Island real estate attorneys')}}@stop
@section('description', ' Find information and reviews about real estate attorneys all over Rhode Island.  Get lots of helpful information and education about what to look for in a real estate attorney and what questions to ask.')
@section('keywords', 'Rhode Island, attorney, real estate, RI, review, title insurance')
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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("http://1-800.lenoxproperty.com/assets/img/attorney.jpg");
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
      <form class="form-inline" action="{{ route('attorney-listing') }}" method="get">
        <fieldset>
          <h1 class="top">Find Local Real Estate Attorneys</h1>
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
        <h1>When buying one of the largest purchases you will ever make it is always important to have a completely objective party acting on your behalf.</h1>
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
            <p class="title-header">There are a number of specific areas where your attorney can be indispensable to you when buying or selling your next home.</p>
               <p class="details">Having a lawyer who specializes in real estate law is highly recommended. Real property law is complicated, and a real estate lawyer is trained to deal with the unique problems and issues that can, and often do arise for home sellers and buyers. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">When choosing a real estate attorney what should someone expect to pay?</p>
               <p class="details">A real estate attorney handles many facets of real property law.  The price is going to vary based upon whether they are dealing with zoning, fixing a defective title, drafting a note, or even an eviction.  Attorneys all set their own fees and the cheapest price does not always equate with the best service.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">Having your attorney involved from the beginning can resolve potential problems in your favor before they even arise.</p>
               <p class="details">In most real estate transactions you are eventually going to be talking with an attorney. We recommend that you reach out and choose someone to work with as early in the process as possible and have your attorney review any documents that you are going to sign and walk you through the process.</p>
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/GBYvqHqADls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Real Estate Attorney Information</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>How do you choose the right real estate attorney?</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/L4t7coGCk2M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Title Insurance Explained Visually</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/G0DYp3g6cN8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Closing Costs Explained Visually</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/fifp2mLGoWc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/attorneylisting?city='" class="btn btn-primary btn-solid">REAL ESTATE ATTORNEYS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection