@extends('layout.main') 

<title>Find local Tile contractors| 1-800RealEstate.com</title>
<meta name="description" content="Get lots of information and watch videos about how to find the best tile contractors then research local tile companies." />
<meta property="og:email" content="info@1800RealEstate.com" />
<meta property="og:url" content="https://1800RealEstate.com/tile-contractors" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://1800RealEstate.com/uploads/logo/1579570407gmlyz-logo.JPG" />
<meta property="og:description" content="Get lots of information and watch videos about how to find the best tile contractors then research local tile companies." />
<meta name="google" content="nositelinkssearchbox" />
<link rel="canonical" href="https://www.1800RealEstate.com/" />
<link rel="shortlink" href="https://www.1800RealEstate.com/" />
<meta property="og:site_name" content="1800RealEstate.com: Real Estate Listings, Homes For Sale, Housing Data" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://1800RealEstate.com/tile-contractors" />

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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("http://1-800.lenoxproperty.com/assets/img/tile.jpg");
  background-size: cover;
  background-position: center center;
  padding: 15px;
}
.image-overlay {
    display: block;
    background: rgba(0, 0, 0, .6);
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
      <form class="form-inline" action="{{ route('tile-listing') }}" method="get">
        <fieldset>
          <h1 class="top">FIND LOCAL TILE CONTRACTORS</h1>
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
        <h1>A great tile job can transform the look of a room.  On the other hand even having one tile out of place can compromise the entire job.  Do your homework and hire wisely.</h1>
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
                   <p class="details">You should always purchase the tile before you go out and hire a tile contractor.  The type of tiles you select will often dictate the level of skill needed to complete the job correctly.  You want to see a proven track record and understand that  the more complex jobs are going to cost more money.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/eye.png" />
            </div>
            <div class="col-sm-10">
                <p class="details">After you have picked your tile and start to think about interviewing potential contractors it is important to ask the right kinds of questions.  You should ask about their experience, licenses, liability and workman's comp insurance, availability, how long it is going to take to complete and ask them what materials they are going to supply and what you need to pick up for them.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <img src="http://1-800.lenoxproperty.com/assets/img/camera.png" />
            </div>
            <div class="col-sm-10">
                <p class="details">Before you move forward with any installer make sure that you look through lots of photos of their work.  As they say a picture is worth a thousand words and by going through and installer portfolio you will be able to snuff out the amateurs from the tile professionals.  Who knows you may need to interview a couple guys or you may find the right installer on your first interview.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/a10fW_ri9RM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="grid-container mobile-hide">&nbsp;</div>

<div class="photo-background">
    <div class="container">
        <h3 class="top">Information about tile and installation</h3>
        <div class="ad-box-grid-view">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>How to Figure Cost Per Square Foot for Installing Tile</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/qKNnfeB1RJo?si=IOytX1hStmIYbJM5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>The Difference Between Ceramic & Porcelain Tile</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/jJv-bV1uTIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <p style="color: #fff";>Tile Tips from the Pros: Thin set, mastic and mortar</p>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/gte9UTD5PMU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <button type="button" onclick="location.href='http://1-800.lenoxproperty.com/tilelisting?city='" class="btn btn-primary btn-solid">TILE CONTRACTORS</button>
        </div>
        <div class="col-md-3">
            &nbsp;
        </div>
    </div>
    <div class="grid-container mobile-hide">&nbsp;</div>
</div>
@endsection
