@extends('layout.main')

@section('page-css')
<link rel="stylesheet" id="main-css" href="http://1-800.lenoxproperty.com/assets/css/styles.min.css" type="text/css" media="all">
@endsection

@section('main')
    <div id="wrapper">
        @include('admin.sidebar_menu')
        <div id="page-wrapper">
            <section class="pt-5">
            <div class="container home-container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <img src="http://1-800.lenoxproperty.com/assets/img/1.svg" class="circle-img">                        <div class="clearfix"></div>
                                                    <h2 class="c-green">
                                Browse deals on tons of great items nearby                            </h2>
                                                                            <div class="text-lg">
                                like furniture, electronics, and cars — and buy from your neighbors.                            </div>
                                            </div>
                </div>
                            <div class="slider-product" style="overflow-x: visible;">
                    <div class="slider-wrap row" style="width: auto;">
                                                    <div class="col-xs-6 col-sm-3 item" style="width: 25%;">
                                <picture data-height="square" class="thumb max-height" style="min-height: 220px;">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/product-0.jpg" alt="product">
                                </picture>
                                <h4>$120</h4>
                            </div>
                                                    <div class="col-xs-6 col-sm-3 item" style="width: 25%;">
                                <picture data-height="square" class="thumb max-height" style="min-height: 220px;">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/product-1.jpg" alt="product">
                                </picture>
                                <h4>$449</h4>
                            </div>
                                                    <div class="col-xs-6 col-sm-3 item" style="width: 25%;">
                                <picture data-height="square" class="thumb max-height" style="min-height: 220px;">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/product-2.jpg" alt="product">
                                </picture>
                                <h4>$5</h4>
                            </div>
                                                    <div class="col-xs-6 col-sm-3 item" style="width: 25%;">
                                <picture data-height="square" class="thumb max-height" style="min-height: 220px;">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/nick-baker-98364-300x187.jpg" alt="product">
                                </picture>
                                <h4>$4500</h4>
                            </div>
                                            </div>
                </div>
                            <hr class="m-0">
            </div>
        </section>
                                    <section class="pt-5">
                    <div class="container home-container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12 phone-text ">
                                <img src="http://1-800.lenoxproperty.com/assets/img/2.svg" class="circle-img">                                <div class="clearfix"></div>
                                <h2 class="c-green">Instantly message sellers</h2>
                                <p class="text-lg">securely through the app to negotiate price and set up a time to meet.</p>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <picture class="thumbs">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/phone-0.jpg" alt="phone">
                                </picture>
                            </div>
                        </div>
                        <hr class="mt-0 mb-0">                    </div>
                </section>
                            <section class="pt-5">
                    <div class="container home-container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12 phone-text pull-right">
                                <img src="http://1-800.lenoxproperty.com/assets/img/3.svg" class="circle-img">                                <div class="clearfix"></div>
                                <h2 class="c-green">Check out people’s profiles</h2>
                                <p class="text-lg">to see ratings, badges, and transaction history.</p>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <picture class="thumbs">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/Phone_Profile-Crop-2.png" alt="phone">
                                </picture>
                            </div>
                        </div>
                        <hr class="mt-0 mb-0">                    </div>
                </section>
                            <section class="pt-5">
                    <div class="container home-container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12 phone-text ">
                                <img src="http://1-800.lenoxproperty.com/assets/img/4.svg" class="circle-img">                                <div class="clearfix"></div>
                                <h2 class="c-green">Sell something of your own</h2>
                                <p class="text-lg">by simply taking a picture with your phone. Posting takes less than 30 seconds!</p>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <picture class="thumbs">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/phone-2.jpg" alt="phone">
                                </picture>
                            </div>
                        </div>
                        <hr class="mt-0 mb-0">                    </div>
                </section>
                            <section class="pt-5">
                    <div class="container home-container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12 phone-text pull-right">
                                <img src="http://1-800.lenoxproperty.com/assets/img/5.svg" class="circle-img">                                <div class="clearfix"></div>
                                <h2 class="c-green">Join millions of people</h2>
                                <p class="text-lg">on the largest mobile marketplace for local buyers and sellers.</p>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <picture class="thumbs">
                                    <img src="http://1-800.lenoxproperty.com/assets/img/phone-3.jpg" alt="phone">
                                </picture>
                            </div>
                        </div>
                                            </div>
                </section>
        </div>
    </div>
@endsection
