@extends('layout.main') @section('page-css')
<link rel="stylesheet"
	href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
<style>
#searchTerms {
	width:600px;
        border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
#category {
	width:300px;
	border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
}
.img-logo {
	max-width:100%;
	height:28px;
}
h1.top {
        font-family: "Times New Roman", Times, serif;
        font-size:3.2em;
        font-weight: bold;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
@endsection @section('main')
<div class="modern-pmc-call-to-action">

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="modern-top-hom-cat-section">
                        <div class="modern-home-search-bar-wrap">
                            <div class="search-wrapper">
                                <h1 class="top"><font color="#fff">@lang('app.find_apartment_complex')</font></h1><br /><br /><br /><br /><br /><br />
                                <form class="form-inline" action="{{ route('pmc-listing') }}" method="get">
                                	<div class="form-group">
						<input type="text" id="searchTerms" class="form-control"  name="q" value="{{ request('q') }}" 
placeholder="@lang('app.search___')" />
					</div>
					<button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> @lang('app.search_property')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
</div>

@endsection @section('page-js')
<script
	src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>

<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
<script>
$( "#searchTerms" ).autocomplete({
	source: [ "providence", 
		"cranston", 
		"central falls", 
		"newport", 
		"barrington", 
		"bristol", 
		"burrillville", 
		"charlestown", 
		"coventry", 
		"cumberland", 
		"east greenwich", 
		"east providence", 
		"attleboro", 
		"exeter", 
		"hopkinton", 
		"jamestown", 
		"johnston", 
		"lincoln", 
		"little compton", 
		"narragansett", 
		"north kingstown", 
		"pawtucket", 
		"north providence", 
		"north smithfield", 
		"portsmouth", 
		"Richmond", 
		"scituate", 
		"smithfield", 
		"south kingstown", 
		"tiverton", 
		"warren", 
		"warwick", 
		"west warwick", 
		"westerly", 
		"woonsocket", 
		"taunton", 
		"abington", 
		"webster", 
		"whitinsville", 
		"grafton", 
		"fall river", 
		"swansea", 
		"westport", 
		"dartmouth", 
		"new bedford", 
		"freetown", 
		"seekonk", 
		"Rehoboth", 
		"Raynham", 
		"lakeville", 
		"middleborough", 
		"norton", 
		"plainville", 
		"wrentham", 
		"foxboro", 
		"bridgewater", 
		"east bridgewater", 
		"west bridgewater", 
		"brockton", 
		"whitman", 
		"easton", 
		"hanson", 
		"halifax", 
		"oxford", 
		"southbridge", 
		"millbury", 
		"medfield", 
		"medway", 
		"millis", 
		"walpole", 
		"canton", 
		"stoughton", 
		"Randolph", 
		"holbrook", 
		"avon", 
		"Rockland", 
		"hanover", 
		"plympton", 
		"plymouth", 
		"carver", 
		"Rochester", 
		"fairhaven", 
		"marion", 
		"mattapoisett", 
		"norwood", 
		"bellingham", 
		"milford", 
		"hopedale", 
		"mendon", 
		"uxbridge", 
		"upton", 
		"hopkinton", 
		"holliston", 
		"boston", 
		"dover", 
		"north attleboro", 
		"millville", 
		"blackstone", 
		"wakefield", 
		"quincy", 
		"braintree", 
		"boston", 
		"mansfield", 
		"cambridge", 
		"south boston", 
		"somerville", 
		"dorchester", 
		"brookline", 
		"jamaica plain", 
		"newton", 
		"chestnut hill", 
		"waltham", 
		"watertown", 
		"belmont", 
		"weymouth", 
		"needham", 
		"wellesley", 
		"dedham", 
		"somerset", 
		"salem", 
		"marblehead", 
		"beverly", 
		"swampscott", 
		"franklin", 
		"brimfield", 
		"middletown", 
		"lowell", 
		"south dartmouth", 
		"foster", 
		"gloucester", 
		"melrose"
		]
});
</script>

<script>

        $(document).ready(function(){
            $(".themeqx_new_regular_ads_wrap").owlCarousel({
                loop: true,
                autoplay : true,
                autoplayTimeout : 2000,
                margin:10,
                autoplayHoverPause : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:3,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:true
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });
        $(document).ready(function(){
            $(".home-latest-blog").owlCarousel({
                loop: true,
                autoplay : true,
                autoplayTimeout : 3000,
                margin:10,
                autoplayHoverPause : true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        loop:true
                    },
                    600:{
                        items:3,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:true
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });

    </script>
<script>
        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_state') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('<option value="" selected> @lang('app.select_state') </option>');
                    $('#state_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }
        }

        $(document).ready(function(){
            $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#loaderListingIcon').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_state_by_country') }}',
                    data : { country_id : country_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'country_to_state');
                    }
                });
            });

	    $('#save_as_favorite').click(function(){
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
@endsection