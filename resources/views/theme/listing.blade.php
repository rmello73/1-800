@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="bg-white">
                    <div class="sidebar-filter-wrapper">

                        @if($enable_monetize)
                            {!! get_option('monetize_code_listing_sidebar_top') !!}
                        @endif

                        <form action="" id="listingFilterForm" method="get">

                        <div class="row">
                            <div class="col-xs-12">
                                <p class="listingSidebarLeftHeader">@lang('app.filter_ads')
                                    <span id="loaderListingIcon" class="pull-right" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span>
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="q" value="{{ request('q') }}" placeholder="@lang('app.search___')" />
                        </div>

                        <hr />
                        <div class="form-group">
                            <select class="form-control select2" name="category">
                                <option value="">@lang('app.select_a_category')</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category') ==  $category->id ? 'selected':'' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" id="sub_category_select" name="sub_category">
                                <option value="">@lang('app.select_a_sub_category')</option>
                                @if($selected_categories)
                                    @foreach($selected_categories->sub_categories as $sub_category)
                                        <option value="{{ $sub_category->id }}" {{ request('sub_category') ==  $sub_category->id ? 'selected':'' }} >{{ $sub_category->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" name="brand" id="brand_select">
                                <option value=""> @lang('app.select_a_brand') </option>
                                @if($selected_sub_categories)
                                    @foreach($selected_sub_categories->brands as $brand)
                                        <option value="{{ $brand->id }}" {{ request('brand') ==  $brand->id ? 'selected':'' }} >{{ $brand->brand_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <hr />
                        <div class="form-group">
                            <select class="form-control select2" name="country">
                                <option value="">@lang('app.select_a_country')</option>

                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" {{ request('country') == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" id="state_select" name="state">
                                <option value=""> @lang('app.select_state') </option>
                                @if($selected_countries)
                                    @foreach($selected_countries->states as $state)
                                        <option value="{{ $state->id }}" {{ request('state') ==  $state->id ? 'selected':'' }} >{{ $state->state_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" id="city_select" name="city">
                                <option value=""> @lang('app.select_city') </option>
                                @if($selected_states)
                                    @foreach($selected_states->cities as $city)
                                        <option value="{{ $city->id }}" {{ request('city') ==  $city->id ? 'selected':'' }} >{{ $city->city_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <hr />
                        <div class="form-group">
                            <label>@lang('app.price_min_max')</label>

                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="min_price" value="{{ request('min_price') }}" placeholder="@lang('app.min_price')" />
                                </div>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="max_price" value="{{ request('max_price') }}" placeholder="@lang('app.max_price')" />
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="form-group">
                            <label>@lang('app.condition')</label>
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="condition" id="new" value="new" {{ request('condition') == 'new'? 'checked':'' }}>
                                    @lang('app.new')
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="radio" name="condition" id="used" value="used" {{ request('condition') == 'used'? 'checked':'' }}>
                                    @lang('app.used')
                                </label>
                            </div>
                        </div>

                        <hr />
                        <div class="form-group">
                            <div class="row">
                                <div class=" col-sm-6 col-xs-12">
                                    <button class="btn btn-primary btn-block"><i class="fa fa-search"></i>  @lang('app.filter')</button>
                                </div>
                                <div class=" col-sm-6 col-xs-12">
                                    <a href="{{ route('listing') }}" class="btn btn-default btn-block"><i class="fa fa-refresh"></i>  @lang('app.reset')</a>
                                </div>
                            </div>
                        </div>

                        </form>
                        <div class="clearfix"></div>

                        @if($enable_monetize)
                            {!! get_option('monetize_code_listing_sidebar_bottom') !!}
                        @endif

                    </div>

                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">

                        <?php
                        $allAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'all'])));
                        $personalAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'personal'])));
                        $businessAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'business'])));

                        ?>

                        <div class="listingTopFilterBar">
                            <ul class="filterAdType pull-left">
                                <li class="{{ request('adType') == false || request('adType') == 'all'? 'active':'' }}"><a href="{{ $allAdTab }}">@lang('app.all_ads') <small>({{ $personal_ads_count + $business_ads_count }})</small></a> </li>
                                <li class="{{ request('adType') == 'personal'? 'active':'' }}"><a href="{{ $personalAdTab }}">@lang('app.personal') <small>({{ $personal_ads_count }})</small></a> </li>
                                <li class="{{ request('adType') == 'business'? 'active':'' }}"><a href="{{ $businessAdTab }}">@lang('app.business') <small>({{ $business_ads_count }})</small></a> </li>
                            </ul>

                            <ul class="listingViewIcon pull-right">
                                <li class="dropdown shortByListingLi">
                                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">@lang('app.short_by') <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ request()->fullUrlWithQuery(['shortBy'=>'price_high_to_low']) }}">@lang('app.price_high_to_low')</a></li>
                                        <li><a href="{{ request()->fullUrlWithQuery(['shortBy'=>'price_low_to_high']) }}">@lang('app.price_low_to_high')</a></li>
                                        <li><a href="{{ request()->fullUrlWithQuery(['shortBy'=>'latest']) }}">@lang('app.latest')</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)" id="showGridView">
                                        <i class="fa fa-th-large"></i> </a> </li>
                                <li><a href="javascript:void(0)" id="showListView">
                                        <i class="fa fa-list"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>


                @if($enable_monetize)
                    <div class="row">
                        <div class="col-sm-12">
                            {!! get_option('monetize_code_listing_above_premium_ads') !!}
                        </div>
                    </div>
                @endif


                <div class="ad-box-wrap">
                    @if( ! request('user_id'))
                        @if($premium_ads)
                            @if($premium_ads->count() > 0)
                                <div class="ad-box-premium-wrap">
                                    <div class="ad-box-grid-view" style="display: {{ session('grid_list_view') ? (session('grid_list_view') == 'grid'? 'block':'none') : 'block' }};">
                                        <div class="row">
                                            @foreach($premium_ads as $ad)
                                                {{-- */ session('grid_list_view') ? (session('grid_list_view') == 'grid'? $ad->increase_impression() :'none') : $ad->increase_impression(); /*--}}

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div itemscope itemtype="http://schema.org/Product" class="ads-item-thumbnail ad-box-{{$ad->price_plan}}">
                                                        <div class="ads-thumbnail">
                                                            <a href="{{ route('single_ad', $ad->slug) }}">
                                                                <img itemprop="image"  src="{{ media_url($ad->feature_img) }}" class="img-responsive" alt="{{ $ad->title }}">
                                                            </a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4><a href="{{ route('single_ad', $ad->slug) }}" title="{{ $ad->title }}"><span itemprop="name">{{ str_limit($ad->title, 40) }} </span></a></h4>
                                                            <a class="price text-muted" href="{{ route('listing', ['category' => $ad->category->id]) }}"> <i class="fa fa-folder-o"></i> {{ $ad->category->category_name }} </a>
                                                            @if($ad->city)
                                                            <a class="location text-muted" href="{{ route('listing', ['city' => $ad->city->id]) }}"> <i class="fa fa-location-arrow"></i> {{ $ad->city->city_name }} </a>
                                                            @endif
                                                            <p class="date-posted text-muted"> <i class="fa fa-clock-o"></i> {{ $ad->created_at->diffForHumans() }}</p>
                                                            <p class="price"> <span itemprop="price" content="{{$ad->price}}"> {{ themeqx_price_ng($ad) }} </span></p>
                                                            <link itemprop="availability" href="http://schema.org/InStock" />
                                                        </div>

                                                        @if($ad->price_plan == 'premium')
                                                            <div class="label-premium" data-toggle="tooltip" data-placement="top" title="{{ ucfirst($ad->price_plan) }} ad"><i class="fa fa-star-o"></i> </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                                <div class="ad-box-list-view" style="display: {{ session('grid_list_view') == 'list'? 'block':'none' }};">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-responsive">
                                                @foreach($premium_ads as $ad)
                                                    {{-- */ session('grid_list_view') == 'list'? $ad->increase_impression() :'none' /*--}}
                                                    <tr class="ad-{{ $ad->price_plan }}">
                                                        <td width="100">
                                                            <img src="{{ media_url($ad->feature_img) }}" class="img-responsive" alt="">
                                                        </td>
                                                        <td>
                                                            <h5><a href="{{ route('single_ad', $ad->slug) }}" >{{ $ad->title }}</a> </h5>
                                                            <p class="text-muted">
                                                                @if($ad->city)
                                                                <i class="fa fa-map-marker"></i> <a class="location text-muted" href="{{ route('listing', ['city'=>$ad->city->id]) }}"> {{ $ad->city->city_name }} </a>,
                                                                @endif
                                                                <i class="fa fa-clock-o"></i> {{ $ad->created_at->diffForHumans() }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <a class="price text-muted" href="{{ route('listing', ['category' => $ad->category->id]) }}"> <i class="fa fa-folder-o"></i> {{ $ad->category->category_name }} </a>
                                                            </p>
                                                            <h5>{{ themeqx_price_ng($ad) }}</h5>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endif



                    @if($enable_monetize)
                        <div class="row">
                            <div class="col-sm-12">
                                {!! get_option('monetize_code_listing_above_regular_ads') !!}
                            </div>
                        </div>
                    @endif


                    @if($ads->total() > 0)

                        <div class="ad-box-grid-view" style="display: {{ session('grid_list_view') ? (session('grid_list_view') == 'grid'? 'block':'none') : 'block' }};">

                            <div class="row">
                                @foreach($ads as $ad)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div itemscope itemtype="http://schema.org/Product" class="ads-item-thumbnail ad-box-{{$ad->price_plan}}">
                                            <div class="ads-thumbnail">
                                                <a href="{{ route('single_ad', $ad->slug) }}">
                                                    <img itemprop="image"  src="{{ media_url($ad->feature_img) }}" class="img-responsive" alt="{{ $ad->title }}">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h4><a href="{{ route('single_ad', $ad->slug) }}" title="{{ $ad->title }}"><span itemprop="name">{{ str_limit($ad->title, 40) }} </span></a></h4>
                                                <a class="price text-muted" href="{{ route('listing', ['category' => $ad->category->id]) }}"> <i class="fa fa-folder-o"></i> {{ $ad->category->category_name }} </a>
                                                @if($ad->city)
                                                <a class="location text-muted" href="{{ route('listing', ['city' => $ad->city->id]) }}"> <i class="fa fa-location-arrow"></i> {{ $ad->city->city_name }} </a>
                                                @endif
                                                <p class="date-posted text-muted"> <i class="fa fa-clock-o"></i> {{ $ad->created_at->diffForHumans() }}</p>
                                                <p class="price"> <span itemprop="price" content="{{$ad->price}}"> {{ themeqx_price_ng($ad) }} </span></p>
                                                <link itemprop="availability" href="http://schema.org/InStock" />
                                            </div>

                                            @if($ad->price_plan == 'premium')
                                                <div class="label-premium" data-toggle="tooltip" data-placement="top" title="{{ ucfirst($ad->price_plan) }} ad"><i class="fa fa-star-o"></i> </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="ad-box-list-view" style="display: {{ session('grid_list_view') == 'list'? 'block':'none' }};">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-responsive">
                                        @foreach($ads as $ad)
                                            <tr class="ad-{{ $ad->price_plan }}">
                                                <td width="100">
                                                    <img src="{{ media_url($ad->feature_img) }}" class="img-responsive" alt="">
                                                </td>
                                                <td>
                                                    <h5><a href="{{ route('single_ad', $ad->slug) }}" >{{ $ad->title }}</a> </h5>
                                                    <p class="text-muted">
                                                        @if($ad->city)
                                                        <i class="fa fa-map-marker"></i> <a class="location text-muted" href="{{ route('listing', ['city'=>$ad->city->id]) }}"> {{ $ad->city->city_name }} </a>,
                                                        @endif
                                                        <i class="fa fa-clock-o"></i> {{ $ad->created_at->diffForHumans() }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <a class="price text-muted" href="{{ route('listing', ['category' => $ad->category->id]) }}"> <i class="fa fa-folder-o"></i> {{ $ad->category->category_name }} </a>
                                                    </p>
                                                    <h5>{{ themeqx_price_ng($ad) }}</h5>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($enable_monetize)
                        <div class="row">
                            <div class="col-sm-12">
                                {!! get_option('monetize_code_listing_below_regular_ads') !!}
                            </div>
                        </div>
                    @endif
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        {{ $ads->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('page-js')
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{ asset('assets/js/jquery.bxslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.js') }}"></script>

<script>
$(function(){
    $(".save_as_favorite").click(function(){
        var selector = $(this);
        var slug = selector.data('slug');

        $.ajax({
            type : 'POST',
            url : '{{ route('save_ad_as_favorite') }}',
            data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
            success : function (data) {
                if (data.status == 1){
                    selector.html(data.msg);
                }else {
                    if (data.redirect_url){
                        location.href= data.redirect_url;
                    }
                }
            }
        });
    });
});
</script>
    
<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
    
    <script>
        $(document).ready(function(){
        	$('.bxslider').show().bxSlider({
        		minSlides: 1,
        		maxSlides: 1,
        		slideWidth: 300,
        		slideMargin: 3,
			    adaptiveHeight: true,
                responsive: true,
			    pager: false,
			    preloadImages: 'all'
        	});
		$('#sortBySelect').change(function () {
                	var form_input = $('#listingFilterForm').serialize();
                	location.href = '{{ route('listing') }}?' + form_input + '&sortBy=' + $(this).val();
            	});
        });
    </script>
    
<script>
var ads = {!! json_encode($map_ads->toArray()) !!};
console.log(ads);

        function initMap() {
            
            var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(41.8333491, -71.4409135),
                zoom: 12
            });
            
            var geocoder = new google.maps.Geocoder();
            
            for( var o in ads ){
                slug = ads[ o ].slug;
                title = ads[ o ].title;
                price = ads[ o ].price;
                street_num = ads[ o ].street_num;
                street_name = ads[ o ].street_name;
                street_type = ads[ o ].street_type;
                street_type = street_type.charAt(0).toUpperCase() + street_type.slice(1);
                city = ads[ o ].new_city;
                state = ads[ o ].new_state;
                console.log(street_num + ' ' + street_name + ' ' + city + ' ' + state);
                type = ads[ o ].type;
                beds = ads[ o ].beds;
                attached_bath = ads[ o ].attached_bath;
                square_unit_space = ads[ o ].square_unit_space;
                //media_image = ads[ o ].media_img[0].media_name;
                var text = document.createElement('text');
                
                var point = new google.maps.LatLng(latitude,longitude);
                var infowindow = new google.maps.InfoWindow(), marker, latitude, longitude;
                var link = "http://1-800.lenoxproperty.com/ad/";

                var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    price: price,
                    title: title,
                    beds: beds,
                    attached_bath: attached_bath,
                    square_unit_space: square_unit_space,
                    slug: slug,
                    link: link,
                    street_num: street_num,
                    street_name: street_name,
                    street_type: street_type,
                    city: city,
                    state: state
                    //media_image: media_image
                });
                
                address = street_num + ' ' + street_name + ' ' + city + ' ' + state;
                
                geocodeAddress(geocoder, map);
                
                function geocodeAddress(geocoder, resultsMap) {
                    geocoder.geocode({'address': address}, function(results, status) {
                      if (status === 'OK') {
                        resultsMap.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                          map: resultsMap,
                          position: results[0].geometry.location
                        });
                      } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                      }
                    });
                }
                
                var image_link = "http://1-800.lenoxproperty.com/uploads/images/";

                google.maps.event.addListener( marker, 'click', function(e){
                    infowindow.setContent( "<div style='float:left'><img src='http://1-800.lenoxproperty.com/uploads/images/" + this.media_image + "'\" width=\"250\" height=\"165\"></div><br />" +
                                            '<br />$' + this.price + '<br />' +
                                            this.beds + 'bd | ' + this.attached_bath + 'ba<br />' +
                                            this.street_num + ' ' + this.street_name + ' ' + this.street_type + ' ' + this.city + ','  + ' ' + this.state + '<br />' +
                                            this.square_unit_space + 'sqft<br /><br />' +
                                            '<a target="_blank" href=\"' + this.link + this.slug + '\">View Details</a>');
                    infowindow.open( map, this );
                    
                }.bind( marker ) );
                
                google.maps.event.addListener(marker, 'click', function (marker, i) {
                    if ($('#info-container').css('display') == 'block') {
                        $('#info-container').css('display', 'none');
                    } else {
                        $('#info-container').css('display', 'block');
                    }
                });
                
            }
        }
      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWELyh7Ibn7Kg6sL9ZujlBRIagEwk-WSs&callback=initMap">
    </script>
@endsection
