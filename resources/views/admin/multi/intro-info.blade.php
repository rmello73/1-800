@extends('layout.main')

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5><font color="red">1. Select Property Type&nbsp;-&nbsp;</font>
                    2. Enter Basic Info&nbsp;-&nbsp;
                    3. Enter Property Details&nbsp;-&nbsp;
                    4. Add Images & Publish Listing&nbsp;-&nbsp;
                    5. Success!
                </h5>
            </div>
    <hr />
            <div class="container">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
    <form action="./create-info/{{$category}}" method="post">
        {{ csrf_field() }}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Select Your Property Type</h2>
        <div class="form-group">

            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="category" value="residential_rental" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=residential_rental&sale_type=Rental';">
                    <img src="{{ asset('assets/img/res-rent.png') }}" />
                    <br>
                </div>
                <div class="col-md-6">
                    <input type="radio" name="category" value="residential_sale" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=residential_sale&sale_type=Condo';">
                    <img src="{{ asset('assets/img/condo-sale.png') }}" />
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="category" value="residential_sale" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=residential_sale&sale_type=Single-Family';">
                    <img src="{{ asset('assets/img/home-sale.png') }}" />
                    <br>
                </div>
                <div class="col-md-6">
                    <input type="radio" name="category" value="residential_sale" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=residential_sale&sale_type=Multi-Family';">
                    <img src="{{ asset('assets/img/mf-sale.png') }}" />
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="category" value="commercial_rental" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=commercial_rental&sale_type=Commercial';">
                    <img src="{{ asset('assets/img/comm-lease.png') }}" />
                    <br>
                </div>
                <div class="col-md-6">
                    <input type="radio" name="category" value="commercial_sale" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=commercial_sale&sale_type=Commercial';">
                    <img src="{{ asset('assets/img/comm-sale.png') }}" />
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <input type="radio" name="category" value="land_sale" onclick="window.location='http://1-800.lenoxproperty.com/dashboard/u/posts/multi/create-info?category=land_sale&sale_type=land_sale';">
                    <img src="{{ asset('assets/img/land-sale.png') }}" />
                    <br>
                </div>
                <div class="col-md-6">
                    &nbsp;
                </div>
            </div>

        </div>
    </form>
                </div>
                <div class="col-md-2">&nbsp;</div>
<p>&nbsp;</p>
@endsection
