@extends('layout.main')

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    2. Enter Basic Info&nbsp;-&nbsp;
                    <font color="red">3. Enter Property Details&nbsp;-&nbsp;</font>
                    4. Add Images & Publish Listing&nbsp;-&nbsp;
                    5. Success!
                </h5>
            </div>
    <hr>
            <div class="container">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
        @if($ad->type == "PMC")
        <form action="./create-detail?category={{ $ad->category }}" method="post">
        @else
            @if($ad->sale_type)
            <form action="./create-detail?category={{ $ad->category }}&sale_type={{ $ad->sale_type }}" method="post">
            @else
            <form action="./create-detail?category={{ $ad->category }}" method="post">
            @endif
        @endif
    
        {{ csrf_field() }}
        <legend>@lang('app.property_detail')</legend>
                    
                    @if($ad->category == "residential_rental")
                        @if($ad->type == "PMC")
					        @include('admin.multi.pmc-rental-details')
					    @else
					        @include('admin.multi.res-rental-details')
					    @endif
				    @elseif($ad->category == "commercial_rental")
					    @include('admin.multi.comm-lease-details')
				    @elseif($ad->category == "residential_sale")
				        @if($ad->sale_type == "Condo")
					        @include('admin.multi.condo-sale-details')
					    @elseif($ad->sale_type == "Single-Family")
					        @include('admin.multi.single-family-details')
					    @elseif($ad->sale_type == "Multi-Family")
					        @include('admin.multi.multi-family-details')
					    @else
					        @include('admin.multi.res-sale-details')
					    @endif
				    @elseif($ad->category == "commercial_sale")
					    @include('admin.multi.comm-sale-details')
				    @elseif($ad->category == "land_sale")
					    @include('admin.multi.land-sale-details')
					@endif
					<legend>Videos</legend>
                    <h2>Property Video</h2>
                    <div class="form-group">
                        <label for="title">Property Video</label>
                        <input type="text" value="{{ $ad->property_video_url }}" class="form-control" id="taskTitle"  name="property_video_url">
                    </div>
                    <h2>Neighborhood Video</h2>
                    <div class="form-group">
                        <label for="title">Neighborhood Video</label>
                        <input type="text" value="{{ $ad->neighborhood_video_url }}" class="form-control" id="taskTitle"  name="neighborhood_video_url">
                    </div>
					<hr />
					
					@if($ad->sale_type == "Single-Family")
					<a type="button" href="./create-info?category={{ $ad->category}}&sale_type=Single-Family" class="btn btn-warning">Back to Step 1</a>
					@elseif($ad->sale_type == "Multi-Family")
					<a type="button" href="./create-info?category={{ $ad->category}}&sale_type=Multi-Family" class="btn btn-warning">Back to Step 1</a>
					@elseif($ad->sale_type == "Condo")
					<a type="button" href="./create-info?category={{ $ad->category}}&sale_type=Condo" class="btn btn-warning">Back to Step 1</a>
					@elseif($ad->category == "land_sale")
					<a type="button" href="./create-info?category={{ $ad->category}}&sale_type=land_sale" class="btn btn-warning">Back to Step 1</a>
					@elseif($ad->category == "commercial_sale")
					<a type="button" href="./create-info?category={{ $ad->category}}&sale_type=Commercial" class="btn btn-warning">Back to Step 1</a>
					@else
					<a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
					@endif
					
                    @if($ad->type == "PMC")
                    <button type="submit" class="btn btn-primary">Next</button>
                    @elseif($ad->sale_type == "Multi-Family")
                    <button type="submit" class="btn btn-primary">Next</button>
                    @else
                    <button type="submit" class="btn btn-primary">Next</button>
                    @endif
    </form>
                </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>
                <br />
<p>&nbsp;</p>
@endsection

@section('page-js')
<script>
$(document).ready(function(){
    $('#basement_type').on('change', function() {
    	if ( this.value == 'None')
        {
          	$("#base_block").hide();
        } else {
        	$("#base_block").show();
        }
    });    
});
</script>
@endsection