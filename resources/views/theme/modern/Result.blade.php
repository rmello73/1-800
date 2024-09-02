@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

<?php 
    $city = ucwords(app('request')->input('city'));
    $title = ucwords(app('request')->input('city'));
    $title .= ' Rhode Island';
    $title .= ' Open Houses';
?>

@section('title'){{trans($title)}}@stop
@section('description', 'View upcoming open houses in '.$city.' Rhode Island.  Get open house times and dates for '.$city.' RI open house listings')
@section('keywords', 'Open, House, Rhode Island, time, date, listings, '.$city.', RI')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css">
<style>
body {
    background-color: #f3f2f3;
}
.bx-wrapper img {
   width: 100% !important;
   height: 190px !important;
}
.bx-wrapper {
   margin-bottom: 0px !important;   
}
@media screen and (max-width: 767px) {
    .bx-wrapper img {
        width: 300px !important;
        height: 200px !important;
    }
}
.navbar-default {
    background-color: #ffffff !important;
}
.title-header {
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
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
.details {
  font-family: Roboto;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #6d6d6d;
}
.grid-container {
  padding: 40px;
}
.top-left {
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(6, 66, 136, 0.5);
  color: white;
  padding: 5px;
}
/* Point-zoom Container */
.img-hover-zoom--point-zoom img {
  transform-origin: 65% 75%;
  transition: transform 1s, filter .5s ease-out;
}

/* The Transformation */
.img-hover-zoom--point-zoom:hover img {
  transform: scale(1.2);
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px;
  padding-bottom: 15px;
  height: 100%;
}
.top-rectangle:hover {
    box-shadow: 0 4px 8px 0 rgba(35,50,106, 0.4), 0 6px 20px 0 rgba(35,50,106, 0.19);
}
/*
 * Row with equal height columns
 * --------------------------------------------------
 */
.row-eq-height {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}

[class*="col-"] {
  padding-top: 10px;
  padding-bottom: 10px;
}
.s01 {
  min-height: 20vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  background: url("../img/photographer.jpg");
  background-size: cover;
  background-position: center center;
  padding: 15px;
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
  background: rgba(36, 60, 132, 0.9);
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
    width: 100%;
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
@endsection
<form method="post" action="{{url('search/servicecity')}}">
 {{csrf_field()}}
 <div>
  <label for="Service">Service:</label>
  <input type="text" name="service">
 </div>
 <div>
  <label for="city">City:</label>
  <input type="text" name="city">
 </div>
 <button class="btn-search" type="submit">Search</button>
 </form>
<div><span>Searched for service: {{ $service }}</span></div>
<div><span>Searched for city: {{ $city }}</span></div>
@endsection