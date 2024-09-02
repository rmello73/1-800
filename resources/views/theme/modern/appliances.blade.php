@extends('layout.main') 

<title>Find local appliance companies| 1-800RealEstate.com</title>
<meta name="description" content="Get lots of information and watch videos about how to find the best appliances then research local appliance repair professionals." />
<meta property="og:email" content="info@1800RealEstate.com" />
<meta property="og:url" content="https://1800RealEstate.com/appliances" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://1800RealEstate.com/uploads/logo/1579570407gmlyz-logo.JPG" />
<meta property="og:description" content="Get lots of information and watch videos about how to find the best appliances then research local appliance repair professionals." />
<meta name="google" content="nositelinkssearchbox" />
<link rel="canonical" href="https://www.1800RealEstate.com/" />
<link rel="shortlink" href="https://www.1800RealEstate.com/" />
<meta property="og:site_name" content="1800RealEstate.com: Real Estate Listings, Homes For Sale, Housing Data" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://1800RealEstate.com/appliances" />

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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("http://1-800.lenoxproperty.com/assets/img/appliance.jpg");
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
      <form class="form-inline" action="{{ route('appliance-listing') }}" method="get">
        <fieldset>
          <h1 class="top">Find great appliances and local repair companies</h1>
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
        <h1>The most exciting part about a kitchen remodel is picking out state of the art appliances.  Below are some quick tips as well as what to look for in an appliance repair company.</h1>
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
                   <p class="details">The biggest factors to consider when buying appliances are how much space you have to work with, what type of budget you have,  what your needs versus what your wants are and what type of finish you are looking for on your appliances.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
            </div>
            <div class="col-sm-10">
                <p class="details">There are many appliance options out there from new, to used, to scratch and dent.  Research companies in your area and read their reviews to determine what is best for you.  Once you are satisfied with your homework, put together a plan in the event that you need service to your appliances.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
            </div>
            <div class="col-sm-10">
                <p class="details">If your appliances don't come with a warranty it can be really difficult to know which appliance repair service to call when one of your machines breaks down. You want to make sure that you choose the most cost-effective and reliable repair company to fix the problem as soon as possible.  Do your homework on the best repair companies in your area.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <iframe width="600" height="400" src="https://www.youtube.com/embed/EUgylOzkgws?si=X8HAWuiGNMm7CmTK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Information on appliances and appliance repair</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>How to Choose Green Appliances</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/lujdy8EHKak" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Consumer Reports: Reliable appliances</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/XPTya6bnOg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Fix it Yourself with over 5,500 Repair videos</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/yxIIA9Ya3SA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/appliancelisting?city='" class="btn btn-primary btn-solid">APPLIANCE & REPAIR</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
