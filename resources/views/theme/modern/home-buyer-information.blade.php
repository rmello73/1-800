@extends('layout.main')

@section('title'){{trans('Home buyer information and education about buying a home')}}@stop
@section('description', 'Information and education for people looking to buy a home Get tips from real estate professionals and links to mortgage bankers, real estate attorneys, home inspectors, real estate agents and more.')
@section('keywords', 'Home, house, buy, buying purchase,  information, how, to, education, real estate, agent, home inspector, attorney, property, professionals, tips')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/css/other.css') }}">
<style>
    p {
        padding: 5px;
    }
    .row-flex {
  display: flex;
  flex-wrap: wrap;
}
body {
    background-color: #ececec;
}
</style>
@endsection

@section('main')
<div align="center">
       	<div class="photo-background">
            <div class="container pt60 pb30">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb30">
                    	<div class="video-responsive">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/2F6kzKD1BVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
                    <div class="col-lg-6 mb30 text-center">
                        <h3 class="text-white mb20">So you think you want to</h3>
                        <h1 style="color: #ffffff";>Buy A Property</h1>
                        <p style="color: #ffffff";>We recommend that you educate yourself about the process and each of the professionals who you will need to help you complete your journey.
                    </div>
                </div>
            </div>
        </div><!--/.Analysis-->
                    
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="row row-flex">
                        <div class="col-md-3 col-xs-6 column">
                        	<div class="entry-card top-rectangle">
                            <a href="https://1-800.lenoxproperty.com/buyer-information" class="entry-thumb">
                                <img src="{{ asset('assets/img/12-tips.jpg') }}" alt="" class="img-fluid" width="100%" height="160px">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h1 class="entry-title text-capitalize">
                                	<a href="https://1-800.lenoxproperty.com/buyer-information"><img src="{{ asset('assets/img/howitworks-1.png') }}" /></a>   
                                </h1>
                                <p>
                                    The 12 steps to buy a home.
                                </p>
                                <div class="text-center sticky">
                                    <a href="https://1-800.lenoxproperty.com/buyer-information">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                        </div>
                        <div class="col-md-3 col-xs-6 column">
                        	<div class="entry-card top-rectangle">
                            <a href="https://1-800.lenoxproperty.com/real-estate-professionals" class="entry-thumb">
                                <img src="{{ asset('assets/img/research-the-professionals.jpg') }}" alt="" class="img-fluid" width="100%" height="160px">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h1 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-professionals"><img src="{{ asset('assets/img/howitworks-2.png') }}" /></a>
                                </h1>
                                <p>
                                    Research the professionals who will guide you through the process.
                                </p>
                                <div class="text-center sticky">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-professionals">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                        </div>
                        <div class="col-md-3 col-xs-6 column">
                        	<div class="entry-card top-rectangle">
                            <a href="https://1-800.lenoxproperty.com/so-do-i-need-a-real-estate-agent-in-order-to-buy-a-property" class="entry-thumb">
                                <img src="{{ asset('assets/img/need-agent.jpg') }}" alt="" class="img-fluid" width="100%" height="160px">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h1 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/so-do-i-need-a-real-estate-agent-in-order-to-buy-a-property"><img src="{{ asset('assets/img/howitworks-3.png') }}" /></a>
                                </h1>
                                <p>
                                    Do I need a Real Estate Agent or can I do this myself?
                                </p>
                                <div class="text-center sticky">
                                    <a href="https://1-800.lenoxproperty.com/so-do-i-need-a-real-estate-agent-in-order-to-buy-a-property">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                        </div>
                        <div class="col-md-3 col-xs-6 column">
                        	<div class="entry-card top-rectangle">
                            <a href="https://1-800.lenoxproperty.com/real-estate-properties?category=residential_sale&q=&x=73&y=48" class="entry-thumb">
                                <img src="{{ asset('assets/img/buyer-search.jpg') }}" alt="" class="img-fluid" width="100%" height="160px">
                                <span class="thumb-hover ti-back-right"></span>
                            </a><!--/entry thumb-->
                            <div class="entry-content">
                                <h1 class="entry-title text-capitalize">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-properties?category=residential_sale&q=&x=73&y=48"><img src="{{ asset('assets/img/howitworks-4.png') }}" /></a>
                                </h1>
                                <p>
                                    Start your search and go tour some homes!
                                </p>
                                <div class="text-center sticky">
                                    <a href="https://1-800.lenoxproperty.com/real-estate-properties?category=residential_sale&q=&x=73&y=48">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div><!--/entry content-->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                </div>
            </div>
</div>
@endsection