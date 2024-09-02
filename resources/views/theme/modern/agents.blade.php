@extends('layout.main') 

@section('title'){{trans('Rhode Island home owners insurance agents')}}@stop
@section('description', ' Find information about home owners insurance agents  all over Rhode Island.  Get lots of helpful information and education about what to look for in home owners insurance and what questions to ask the insurance agents.')
@section('keywords', 'Rhode Island, home owners, insurance, agents, company, real estate, RI')
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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("http://1-800.lenoxproperty.com/assets/img/agent.jpg");
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
<div align="center">
<div class="s01">
      <form class="form-inline" action="{{ route('agent-listing') }}" method="get">
        <fieldset>
          <h1 class="top" style="text-align:center";>Find Local Insurance Agents</h1>
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
          <h1 class="top" style="text-align:center";>Where are you looking?</h1>
        </fieldset>
      </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>If Disaster strikes, the ideal homeowners policy should safeguard you from any out-of-pocket expenses to cover damages or loss.</h1>
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
            <p class="title-header">Finding the best insurance company only takes a bit of homework and research to ensure long-lasting peace of mind.</p>
               <p class="details">The first thing to understand is that researching insurance is more than simply finding the lowest price. There is no one size fits all option when it comes to coverage.  Determine the amount of coverage you will need to rebuild your structure and replace your belongings and then start doing your research.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">Shopping around for homeowners insurance is a bit more complicated than shopping around for auto coverage is.</p>
               <p class="details">A typical homeowners insurance policy will cover repairs to or reconstruction of your home if it is damaged by fire, smoke, theft or vandalism, or bad weather . A standard  policy also generally covers your appliances, furniture and other possessions, as well as medical expenses and legal fees if people other than you or your family are injured on your property.  Figure out if you feel that you need additional optional coverage and then do an apples to apples comparison.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
        </div>
        <div class="col-sm-10">
            <p class="title-header">Cast a wide net and get quotes from handful of different insurance carriers and compare the policies.</p>
               <p class="details">Once you’ve determined how much coverage you need, you should choose an insurance company based on factors like financial stability, product offerings, and the ease of its claims process. Companies also often give discounts for bundling coverage or for clients with higher credit scores so be sure to see if you are eligible.</p>
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/bic4qOuIJoI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Helpful Insurance Information</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>How Much Does Homeowners Insurance Cost?</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/gfgNo-qxQIo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Insurance101 - Deductibles</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/4UNICnINrNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Insurance 101 - Renters Insurance</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/8y23U2VkYDA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/agentlisting?city='" class="btn btn-primary btn-solid">INSURANCE AGENTS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
