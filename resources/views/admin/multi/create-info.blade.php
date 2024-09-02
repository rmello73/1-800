@extends('layout.main')

@section('page-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    <font color="red">2. Enter Basic Info&nbsp;-&nbsp;</font>
                    3. Enter Property Details&nbsp;-&nbsp;
                    4. Add Images & Publish Listing&nbsp;-&nbsp;
                    5. Success!
                </h5>
            </div>
    <hr />
    <div class="container">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
                
    @if($category == "residential_rental")
    <form action="./create-info/{{$category}}/Rental" method="post">
    @else
    <form action="./create-info/{{$category}}/{{$sale_type}}" method="post">
    @endif
        {{ csrf_field() }}
                
        <h3>Tell us about your property.</h3>
        <p>Fill out as much information as possible to increase the number of people interested in your property.</p>
        <p style="color: #FF0000";><b>Fields with an * are required.</b></p>
        <legend>Listing Dates</legend>
        <p style="color: #FF0000";>Required - Click the boxes to select start and end dates for your listing(s).</p>
        <div class="row">
            <div class="col-md-6">
                <div
            						class="form-group {{ $errors->has('start_date')? 'has-error':'' }}">
            							<label for="title" style="color: #FF0000";>Start Date *</label>
            							<input type="text" class="date form-control" id="datepicker"
                                            value="{{ old('start_date') ?? $ad->start_date ?? old('start_date') }}"
            								name="start_date" placeholder="Expiration Start Date" autocomplete="off"> {!!
            							$errors->has('start_date')? '
            							<p class="help-block">'.$errors->first('start_date').'</p>
            							':'' !!}
            					</div>
            </div>
            <div class="col-md-6">
            		    <div
            						class="form-group {{ $errors->has('end_date')? 'has-error':'' }}">
            							<label for="title" style="color: #FF0000";>End Date *</label>
            							<input type="text" class="date form-control" id="datepicker2"
                                            value="{{ old('end_date') ?? $ad->end_date ?? old('end_date') }}"
            								name="end_date" placeholder="Expiration End Date" autocomplete="off"> {!!
            							$errors->has('end_date')? '
            							<p class="help-block">'.$errors->first('end_date').'</p>
            							':'' !!}
            					</div>
    	    </div>
    	</div>
        <legend>Property Info / Location</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Property Title *</label> (Not shown to the public)
                    <input type="text" value="{{ old('title') ?? $ad->title ?? old('title') }}"" class="form-control" id="title"  name="title">
                    {!! $errors->has('title')? ' <p class="help-block">'.$errors->first('title').'</p> ':'' !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Property Comment</label>
                    <input type="text" maxlength="64" value="{{ old('comment') ?? $ad->comment ?? old('comment') }}" class="form-control" id="comment"  name="comment">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('description')? 'has-error':'' }}">
        			<label for="title" style="color: #FF0000";>Property Description *</label>
        			<textarea name="description" class="form-control" rows="8">{{ old('description') ?? $ad->description ?? old('description') }}</textarea>
        			{!! $errors->has('description')? ' <p class="help-block">'.$errors->first('description').'</p> ':'' !!}
        		</div>
        	</div>
        	<div class="col-md-6">
        	    <br />
        	    <b>What is a property description?</b>
                <p>Property descriptions are important for attracting new tenants. An example of a good description might be: Beautiful property located steps from the beach.
                Recently remodeled with new carpet, paint and bath fixtures...".</p>
        	</div>
        </div>
        @if($category == "residential_rental")
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Property Type *</label>
                    <select class="form-control select2NoSearch" name="type"
        								id="type">
        								<option value="">Please select Property Type</option>
        								<option value="Apartment" @if (@$ad->type == "Apartment") {{ 'selected' }} @endif>@lang('app.apartment')</option>
        								<option value="Condo" @if (@$ad->type == "Condo") {{ 'selected' }} @endif>@lang('app.condo')</option>
        								<option value="Loft" @if (@$ad->type == "Loft") {{ 'selected' }} @endif>@lang('app.loft')</option>
        								<option value="PMC" @if (@$ad->type == "PMC") {{ 'selected' }} @endif>PMC</option>
        								<option value="Single-Family" @if (@$ad->type == "Single-Family") {{ 'selected' }} @endif>@lang('app.single')</option>
        								<option value="Townhouse" @if (@$ad->type == "Townhouse") {{ 'selected' }} @endif>@lang('app.townhouse')</option>
        							</select>
        							{!! $errors->has('type')? ' <p class="help-block">'.$errors->first('type').'</p> ':'' !!}
                </div>
            </div>
        @elseif($category == "commercial_rental")
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Property Type *</label>
                    <select class="form-control select2NoSearch" name="type"
        								id="type">
        								<option value="">Please select Property Type</option>
        								<option value="Commercial" @if (@$ad->type == "Commercial") {{ 'selected' }} @endif>Commercial</option>
        								<option value="Flex" @if (@$ad->type == "Flex") {{ 'selected' }} @endif>Flex</option>
        								<option value="Industrial" @if (@$ad->type == "Industrial") {{ 'selected' }} @endif>Industrial</option>
        								<option value="Medical" @if (@$ad->type == "Medical") {{ 'selected' }} @endif>Medical</option>
        								<option value="Office" @if (@$ad->type == "Office") {{ 'selected' }} @endif>Office</option>
        								<option value="Other" @if (@$ad->type == "Other") {{ 'selected' }} @endif>Other</option>
        								<option value="Restaurant" @if (@$ad->type == "Restaurant") {{ 'selected' }} @endif>Restaurant</option>
        								<option value="Retail" @if (@$ad->type == "Retail") {{ 'selected' }} @endif>Retail</option>
        								<option value="Storefront" @if (@$ad->type == "Storefront") {{ 'selected' }} @endif>Storefront</option>
        								<option value="Warehouse" @if (@$ad->type == "Warehouse") {{ 'selected' }} @endif>Warehouse</option>
        							</select>
        							{!! $errors->has('type')? ' <p class="help-block">'.$errors->first('type').'</p> ':'' !!}
                </div>
            </div>

        <div class="form-group">
							<label for="comm_sub" class="col-sm-4 control-label">Property Subtype</label>
								<select class="form-control select2NoSearch" name="comm_sub"
                                                                id="comm_sub">
                                                                <option value=""></option>
                                                                <option value="Office Condo" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Condo') ? "selected=\"selected\"" : "" }}}>Office Condo</option>
                                        <option value="Office Buiding" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Buiding') ? "selected=\"selected\"" : "" }}}>Office Buiding</option>
                                        <option value="Office Medical office" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Medical office') ? "selected=\"selected\"" : "" }}}>Office Medical office</option>
                                        <option value="Industrial Flex Space" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Flex Space') ? "selected=\"selected\"" : "" }}}>Industrial Flex Space</option>
                                        <option value="Industrial Manufacturing" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Manufacturing') ? "selected=\"selected\"" : "" }}}>Industrial Manufacturing</option>
                                        <option value="Industrial Warehouse" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Warehouse') ? "selected=\"selected\"" : "" }}}>Industrial Warehouse</option>
                                        <option value="istore" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Storage Facility') ? "selected=\"selected\"" : "" }}}>Industrial Storage Facility</option>
                                        <option value="Industrial  R&D" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial  R&D') ? "selected=\"selected\"" : "" }}}>Industrial  R&D</option>
                                        <option value="Industrial Office Showroom" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Office Showroom') ? "selected=\"selected\"" : "" }}}>Industrial Office Showroom</option>
                                        <option value="Retail Condo" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Condo') ? "selected=\"selected\"" : "" }}}>Retail Condo</option>
                                        <option value="Retail Strip Center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Strip Center') ? "selected=\"selected\"" : "" }}}>Retail Strip Center</option>
                                        <option value="Retail Restaurant" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Restaurant') ? "selected=\"selected\"" : "" }}}>Retail Restaurant</option>
                                        <option value="Retail Mall" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Mall') ? "selected=\"selected\"" : "" }}}>Retail Mall</option>
                                        <option value="Retail Free Standing Building" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Free Standing Building') ? "selected=\"selected\"" : "" }}}>Retail Free Standing Building</option>
                                        <option value="Retail Service/ Gas Station" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Service/ Gas Station') ? "selected=\"selected\"" : "" }}}>Retail Service/ Gas Station</option>
                                        <option value="Retail Special Use" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Special Use') ? "selected=\"selected\"" : "" }}}>Retail Special Use</option>
                                        <option value="Retail Auto" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Auto') ? "selected=\"selected\"" : "" }}}>Retail Auto</option>
                                        <option value="Health Care Hospital" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Hospital') ? "selected=\"selected\"" : "" }}}>Health Care Hospital</option>
                                        <option value="Health Care Assisted Living Center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Assisted Living Center') ? "selected=\"selected\"" : "" }}}>Health Care Assisted Living Center</option>
                                        <option value="Health Care Nursing Home" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Nursing Home') ? "selected=\"selected\"" : "" }}}>Health Care Nursing Home</option>
                                        <option value="Special Purpose Religious Facility" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Religious Facility') ? "selected=\"selected\"" : "" }}}>Special Purpose Religious Facility</option>
                                        <option value="Special Purpose Marina" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Marina') ? "selected=\"selected\"" : "" }}}>Special Purpose Marina</option>
                                        <option value="Special Purpose Golf Course" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Golf Course') ? "selected=\"selected\"" : "" }}}>Special Purpose Golf Course</option>
                                        <option value="Special Purpose Theater" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Theater') ? "selected=\"selected\"" : "" }}}>Special Purpose Theater</option>
                                        <option value="Special Purpose Theme or activity center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Theme or activity center') ? "selected=\"selected\"" : "" }}}>Special Purpose Theme or activity center</option>
                                        <option value="Special Purpose" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose') ? "selected=\"selected\"" : "" }}}>Special Purpose</option>
                                        <option value="Hotel Motel Bed and Breakfast" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Hotel Motel Bed and Breakfast') ? "selected=\"selected\"" : "" }}}>Hotel Motel Bed and Breakfast</option>
                                        <option value="Hotel/Motel Full Service" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Hotel/Motel Full Service') ? "selected=\"selected\"" : "" }}}>Hotel/Motel Full Service</option>
                                        <option value="Hotel/Motel Limited Service" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'SpecHotel/Motel Limited Serviceial') ? "selected=\"selected\"" : "" }}}>Hotel/Motel Limited Service</option>
                                        <option value="Multi Family Garden Low Rise" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Garden Low Rise') ? "selected=\"selected\"" : "" }}}>Multi Family Garden Low Rise</option>
                                        <option value="Multi Family Mid/ High Rise" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Mid/ High Rise') ? "selected=\"selected\"" : "" }}}>Multi Family Mid/ High Rise</option>
                                        <option value="Multi Family Mobile Home" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Mobile Home') ? "selected=\"selected\"" : "" }}}>Multi Family Mobile Home</option>
                                                        </select>
						</div>
        @endif
        @if($category == "residential_sale")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
                            <label for="title" style="color: #FF0000";>Property Type *</label>
                            <select class="form-control select2NoSearch" name="sale_type"
                                    id="sale_type">
                                <option value="Condo" @if (@$ad->sale_type == "Condo") {{ 'selected' }} @endif>Condo</option>
                                <option value="Single-Family" @if (@$ad->sale_type == "Single-Family") {{ 'selected' }} @endif>Single-Family</option>
                                <option value="Multi-Family" @if (@$ad->sale_type == "Multi-Family") {{ 'selected' }} @endif>Multi-Family</option>
                            </select>
                            {!! $errors->has('type')? ' <p class="help-block">'.$errors->first('type').'</p> ':'' !!}
                        </div>
                    </div>
              
        @endif
        @if($category == "commercial_sale")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
							<label for="comm_type" class="col-sm-4 control-label">Property Type</label>
								<select class="form-control select2NoSearch" name="comm_type"
                                                                id="comm_type">
                                                                <option value=""></option>
                                                                <option value="Office" @if (@$ad->comm_type == "Office") {{ 'selected' }} @endif>Office</option>
                                                                <option value="Retail" @if (@$ad->comm_type == "Retail") {{ 'selected' }} @endif>Retail</option>
                                                                <option value="Multi-Family" @if (@$ad->comm_type == "Multi-Family") {{ 'selected' }} @endif>Multi-Family</option>
                                                                <option value="Industrial" @if (@$ad->comm_type == "Industrial") {{ 'selected' }} @endif>Industrial</option>
                                                                <option value="Health" @if (@$ad->comm_type == "Health") {{ 'selected' }} @endif>Health</option>
                                                                <option value="Hotel" @if (@$ad->comm_type == "Hotel") {{ 'selected' }} @endif>Hotel</option>
                                                                <option value="Special" @if (@$ad->comm_type == "Special") {{ 'selected' }} @endif>Special</option>
                                                                <option value="Mixed Use" @if (@$ad->comm_type == "Mixed Use") {{ 'selected' }} @endif>Mixed Use</option>
                                                        </select>
						        </div>
                            </div>
                            <div class="col-md-6">

					<div class="form-group">
							<label for="comm_sub" class="col-sm-4 control-label">Property Subtype</label>
								<select class="form-control select2NoSearch" name="comm_sub"
                                                                id="comm_sub">
                                                                <option value=""></option>
                                                                <option value="Office Condo" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Condo') ? "selected=\"selected\"" : "" }}}>Office Condo</option>
                                        <option value="Office Buiding" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Buiding') ? "selected=\"selected\"" : "" }}}>Office Buiding</option>
                                        <option value="Office Medical office" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Office Medical office') ? "selected=\"selected\"" : "" }}}>Office Medical office</option>
                                        <option value="Industrial Flex Space" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Flex Space') ? "selected=\"selected\"" : "" }}}>Industrial Flex Space</option>
                                        <option value="Industrial Manufacturing" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Manufacturing') ? "selected=\"selected\"" : "" }}}>Industrial Manufacturing</option>
                                        <option value="Industrial Warehouse" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Warehouse') ? "selected=\"selected\"" : "" }}}>Industrial Warehouse</option>
                                        <option value="istore" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Storage Facility') ? "selected=\"selected\"" : "" }}}>Industrial Storage Facility</option>
                                        <option value="Industrial  R&D" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial  R&D') ? "selected=\"selected\"" : "" }}}>Industrial  R&D</option>
                                        <option value="Industrial Office Showroom" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Industrial Office Showroom') ? "selected=\"selected\"" : "" }}}>Industrial Office Showroom</option>
                                        <option value="Retail Condo" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Condo') ? "selected=\"selected\"" : "" }}}>Retail Condo</option>
                                        <option value="Retail Strip Center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Strip Center') ? "selected=\"selected\"" : "" }}}>Retail Strip Center</option>
                                        <option value="Retail Restaurant" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Restaurant') ? "selected=\"selected\"" : "" }}}>Retail Restaurant</option>
                                        <option value="Retail Mall" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Mall') ? "selected=\"selected\"" : "" }}}>Retail Mall</option>
                                        <option value="Retail Free Standing Building" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Free Standing Building') ? "selected=\"selected\"" : "" }}}>Retail Free Standing Building</option>
                                        <option value="Retail Service/ Gas Station" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Service/ Gas Station') ? "selected=\"selected\"" : "" }}}>Retail Service/ Gas Station</option>
                                        <option value="Retail Special Use" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Special Use') ? "selected=\"selected\"" : "" }}}>Retail Special Use</option>
                                        <option value="Retail Auto" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Retail Auto') ? "selected=\"selected\"" : "" }}}>Retail Auto</option>
                                        <option value="Health Care Hospital" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Hospital') ? "selected=\"selected\"" : "" }}}>Health Care Hospital</option>
                                        <option value="Health Care Assisted Living Center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Assisted Living Center') ? "selected=\"selected\"" : "" }}}>Health Care Assisted Living Center</option>
                                        <option value="Health Care Nursing Home" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Health Care Nursing Home') ? "selected=\"selected\"" : "" }}}>Health Care Nursing Home</option>
                                        <option value="Special Purpose Religious Facility" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Religious Facility') ? "selected=\"selected\"" : "" }}}>Special Purpose Religious Facility</option>
                                        <option value="Special Purpose Marina" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Marina') ? "selected=\"selected\"" : "" }}}>Special Purpose Marina</option>
                                        <option value="Special Purpose Golf Course" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Golf Course') ? "selected=\"selected\"" : "" }}}>Special Purpose Golf Course</option>
                                        <option value="Special Purpose Theater" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Theater') ? "selected=\"selected\"" : "" }}}>Special Purpose Theater</option>
                                        <option value="Special Purpose Theme or activity center" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose Theme or activity center') ? "selected=\"selected\"" : "" }}}>Special Purpose Theme or activity center</option>
                                        <option value="Special Purpose" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Special Purpose') ? "selected=\"selected\"" : "" }}}>Special Purpose</option>
                                        <option value="Hotel Motel Bed and Breakfast" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Hotel Motel Bed and Breakfast') ? "selected=\"selected\"" : "" }}}>Hotel Motel Bed and Breakfast</option>
                                        <option value="Hotel/Motel Full Service" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Hotel/Motel Full Service') ? "selected=\"selected\"" : "" }}}>Hotel/Motel Full Service</option>
                                        <option value="Hotel/Motel Limited Service" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'SpecHotel/Motel Limited Serviceial') ? "selected=\"selected\"" : "" }}}>Hotel/Motel Limited Service</option>
                                        <option value="Multi Family Garden Low Rise" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Garden Low Rise') ? "selected=\"selected\"" : "" }}}>Multi Family Garden Low Rise</option>
                                        <option value="Multi Family Mid/ High Rise" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Mid/ High Rise') ? "selected=\"selected\"" : "" }}}>Multi Family Mid/ High Rise</option>
                                        <option value="Multi Family Mobile Home" {{{ (isset($ad->comm_sub) && $ad->comm_sub == 'Multi Family Mobile Home') ? "selected=\"selected\"" : "" }}}>Multi Family Mobile Home</option>
                                                        </select>
                            </div>
                        </div>
        @endif

        @if($sale_type == "Multi-Family")
        <div class="row">
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Property Type *</label>
                    <select class="form-control select2NoSearch" name="type"
        								id="type">
        								<option value="">Please select Property Subtype</option>
        								<option value="Apartment" @if (@$ad->type == "Apartment") {{ 'selected' }} @endif>@lang('app.apartment')</option>
        								<option value="Other" @if (@$ad->type == "Other") {{ 'selected' }} @endif>Other</option>
        								<option value="Side/Side" @if (@$ad->type == "Side/Side") {{ 'selected' }} @endif>Side/Side</option>
        								<option value="Up/Down" @if (@$ad->type == "Up/Down") {{ 'selected' }} @endif>Up/Down</option>
        							</select>
        							{!! $errors->has('type')? ' <p class="help-block">'.$errors->first('type').'</p> ':'' !!}
                </div>
            </div>
        </div>
        @endif
            @if($category == "land_sale")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('land_type')? 'has-error':'' }}">
                            <label for="title" style="color: #FF0000";>Property Type *</label>
                            <select class="form-control select2NoSearch" name="land_type"
                                    id="land_type">
                                <option value="">Please select Land Type</option>
                                <option value="Residential" @if (@$ad->land_type == "Residential") {{ 'selected' }} @endif>Residential</option>
                                <option value="Commercial" @if (@$ad->land_type == "Commercial") {{ 'selected' }} @endif>Commercial</option>
                            </select>
                            {!! $errors->has('land_type')? ' <p class="help-block">'.$errors->first('land_type').'</p> ':'' !!}
                        </div>
                    </div>
                    @endif
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('price')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Property Price (Numbers only please) *</label>
                    <input type="text" class="form-control" name="price" id="price"
                                                value="{{ old('price') ?? $ad->price ?? old('price') }}">
        										{!! $errors->has('type')? ' <p class="help-block">'.$errors->first('type').'</p> ':'' !!}
                </div>
            </div>
            </div>
        <!--</div>-->
        <legend>Location</legend>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group {{ $errors->has('street_num')? 'has-error':'' }}">
                                        <label for="title" style="color: #FF0000";>Street Num *</label>
            							<input type="number" class="form-control" id="street_num"
                                            value="{{ old('street_num') ?? $ad->street_num ?? old('street_num') }}" name="street_num" min="1" max="10000"
            								placeholder="Street Number">
            								{!! $errors->has('street_num')? ' <p class="help-block">'.$errors->first('street_num').'</p> ':'' !!}
            		</div>
        		</div>
                <div class="col-md-2">
                    <div class="form-group {{ $errors->has('street_num2')? 'has-error':'' }}">
                                        <label for="title" style="color: #FF0000";>Street Num 2 </label>
            							<input type="number" class="form-control" id="street_num2"
                                            value="{{ old('street_num2') ?? $ad->street_num2 ?? old('street_num2') }}" name="street_num2" min="1" max="10000"
            								placeholder="Street Number End">
            								{!! $errors->has('street_num2')? ' <p class="help-block">'.$errors->first('street_num2').'</p> ':'' !!}
            		</div>
        		</div>
        		<div class="col-md-3">
            		<div class="form-group {{ $errors->has('street_name')? 'has-error':'' }}">
            		                    <label for="title" style="color: #FF0000";>Street Name *</label>
            							<input type="text" class="form-control" id="street_name"
                                            value="{{ old('street_name') ?? $ad->street_name ?? old('street_name') }}" name="street_name"
            								placeholder="Street Name">
            								{!! $errors->has('street_name')? ' <p class="help-block">'.$errors->first('street_name').'</p> ':'' !!}
            		</div>
        		</div>
        		<div class="col-md-3">
                    <div class="form-group {{ $errors->has('street_type')? 'has-error':'' }}">
                    <label for="title" style="color: #FF0000";>Street Type *</label>
            							<select class="form-control select2" id="street_type"
            								name="street_type">
            								<option value="">Street Type</option>
            								<option value="Avenue" @if (old('street_type') ?? @$ad->street_type == "Avenue") {{ 'selected' }} @endif>Avenue</option>
                                            <option value="Beach" @if (old('street_type') ?? @$ad->street_type == "Beach") {{ 'selected' }} @endif>Beach</option>
                                            <option value="Bend" @if (old('street_type') ?? @$ad->street_type == "Bend") {{ 'selected' }} @endif>Bend</option>
                                            <option value="Boulevard" @if (old('street_type') ?? @$ad->street_type == "Boulevard") {{ 'selected' }} @endif>Boulevard</option>
                                            <option value="Circle" @if (old('street_type') ?? @$ad->street_type == "Circle") {{ 'selected' }} @endif>Circle</option>
                                            <option value="Court" @if (old('street_type') ?? @$ad->street_type == "Court") {{ 'selected' }} @endif>Court</option>
                                            <option value="Cove" @if (old('street_type') ?? @$ad->street_type == "Cove") {{ 'selected' }} @endif>Cove</option>
                                            <option value="Crossing" @if (old('street_type') ?? @$ad->street_type == "Crossing") {{ 'selected' }} @endif>Crossing</option>
                                            <option value="Drive" @if (old('street_type') ?? @$ad->street_type == "Drive") {{ 'selected' }} @endif>Drive</option>
                                            <option value="Green" @if (old('street_type') ?? @$ad->street_type == "Green") {{ 'selected' }} @endif>Green</option>
                                            <option value="High" @if (old('street_type') ?? @$ad->street_type == "High") {{ 'selected' }} @endif>High</option>
                                            <option value="Hill" @if (old('street_type') ?? @$ad->street_type == "Hill") {{ 'selected' }} @endif>Hill</option>
                                            <option value="Lane" @if (old('street_type') ?? @$ad->street_type == "Lane") {{ 'selected' }} @endif>Lane</option>
                                            <option value="Meadow" @if (old('street_type') ?? @$ad->street_type == "Meadow") {{ 'selected' }} @endif>Meadow</option>
                                            <option value="Parkway" @if (old('street_type') ?? @$ad->street_type == "Parkway") {{ 'selected' }} @endif>Parkway</option>
                                            <option value="Passage" @if (old('street_type') ?? @$ad->street_type == "Passage") {{ 'selected' }} @endif>Passage</option>
                                            <option value="Path" @if (old('street_type') ?? @$ad->street_type == "Path") {{ 'selected' }} @endif>Path</option>
                                            <option value="Pike" @if (old('street_type') ?? @$ad->street_type == "Pike") {{ 'selected' }} @endif>Pike</option>
                                            <option value="Place" @if (old('street_type') ?? @$ad->street_type == "Place") {{ 'selected' }} @endif>Place</option>
                                            <option value="Point" @if (old('street_type') ?? @$ad->street_type == "Point") {{ 'selected' }} @endif>Point</option>
                                            <option value="Ridge" @if (old('street_type') ?? @$ad->street_type == "Ridge") {{ 'selected' }} @endif>Ridge</option>
                                            <option value="River" @if (old('street_type') ?? @$ad->street_type == "River") {{ 'selected' }} @endif>River</option>
                                            <option value="Road" @if (old('street_type') ?? @$ad->street_type == "Road") {{ 'selected' }} @endif>Road</option>
                                            <option value="Row" @if (old('street_type') ?? @$ad->street_type == "Row") {{ 'selected' }} @endif>Row</option>
                                            <option value="Run" @if (old('street_type') ?? @$ad->street_type == "Run") {{ 'selected' }} @endif>Run</option>
                                            <option value="Shore" @if (old('street_type') ?? @$ad->street_type == "Shore") {{ 'selected' }} @endif>Shore</option>
                                            <option value="Shores" @if (old('street_type') ?? @$ad->street_type == "Shores") {{ 'selected' }} @endif>Shores</option>
                                            <option value="Square" @if (old('street_type') ?? @$ad->street_type == "Square") {{ 'selected' }} @endif>Square</option>
                                            <option value="Street" @if (old('street_type') ?? @$ad->street_type == "Street") {{ 'selected' }} @endif>Street</option>
                                            <option value="Terrace" @if (old('street_type') ?? @$ad->street_type == "Terrace") {{ 'selected' }} @endif>Terrace</option>
                                            <option value="Trail" @if (old('street_type') ?? @$ad->street_type == "Trail") {{ 'selected' }} @endif>Trail</option>
                                            <option value="Turnpike" @if (old('street_type') ?? @$ad->street_type == "Turnpike") {{ 'selected' }} @endif>Turnpike</option>
                                            <option value="View" @if (old('street_type') ?? @$ad->street_type == "View") {{ 'selected' }} @endif>View</option>
                                            <option value="Way" @if (old('street_type') ?? @$ad->street_type == "Way") {{ 'selected' }} @endif>Way</option>
                                            <option value="Wharf" @if (old('street_type') ?? @$ad->street_type == "Wharf") {{ 'selected' }} @endif>Wharf</option>
                                     	</select>
                                         {!! $errors->has('street_type')? ' <p class="help-block">'.$errors->first('street_type').'</p> ':'' !!}
            		</div>
        		</div>
        		@if($category == "residential_rental")
            		<div class="col-md-2">
                        <div class="form-group">
                                            <label for="title">Unit Number</label>
                							<input type="text" class="form-control" id="unit_no"
                                                value="{{ old('unit_no') ?? $ad->unit_no ?? old('unit_no') }}" name="unit_no"
                								placeholder="Unit Number">
                		</div>
            		</div>
            		<div class="col-md-2">
                		<div class="form-group">
                		                    <label for="title">Floor Number</label>
                                                                <input type="text" class="form-control" id="floor_no"
                                                                        vvalue="{{ old('floor_no') ?? $ad->floor_no ?? old('floor_no') }}" name="floor_no"
                                                                        placeholder="Floor Number">
                                                </div>
                    </div>
               	@endif
            </div>
            <div class="row">
                        <div class="col-md-6">
        					<div class="form-group {{ $errors->has('state')? 'has-error':'' }}">
        						<label for="title" style="color: #FF0000";>@lang('app.state') *</label>
        							<select class="form-control select2" id="state_select"
        								name="state">
        								<option value="">@lang('app.select_a_state')</option>
        								<option value="Rhode Island">Rhode Island</option>
        							</select>
        							{!! $errors->has('state')? ' <p class="help-block">'.$errors->first('state').'</p> ':'' !!}
        					</div>
    					</div>

                        <div class="col-md-6">
        					<div class="form-group {{ $errors->has('city')? 'has-error':'' }}">
        						<label for="title" style="color: #FF0000";>@lang('app.city') *</label>
        							<select class="form-control select2" id="city_select" name="city">
        								<option value="">@lang('app.select_a_city')</option>
        								<option value="Barrington" @if (old('type') ?? @$ad->type == "Barrington") {{ 'selected' }} @endif>Barrington</option>
        								<option value="Bristol" @if (old('type') ?? @$ad->type == "Bristol") {{ 'selected' }} @endif>Bristol</option>
        								<option value="Burrillville" @if (old('type') ?? @$ad->type == "Burrillville") {{ 'selected' }} @endif>Burrillville</option>
        								<option value="Central Falls" @if (old('type') ?? @$ad->type == "Central Falls") {{ 'selected' }} @endif>Central Falls</option>
        								<option value="Charlestown" @if (old('type') ?? @$ad->type == "Charlestown") {{ 'selected' }} @endif>Charlestown</option>
        								<option value="Coventry" @if (old('type') ?? @$ad->type == "Coventry") {{ 'selected' }} @endif>Coventry</option>
        								<option value="Cranston" @if (old('type') ?? @$ad->type == "Cranston") {{ 'selected' }} @endif>Cranston</option>
        								<option value="Cumberland" @if (old('type') ?? @$ad->type == "Cumberland") {{ 'selected' }} @endif>Cumberland</option>
        								<option value="East Greenwich" @if (old('type') ?? @$ad->type == "East Greenwich") {{ 'selected' }} @endif>East Greenwich</option>
        								<option value="East Providence" @if (old('type') ?? @$ad->type == "East Providence") {{ 'selected' }} @endif>East Providence</option>
        								<option value="Glocester" @if (old('type') ?? @$ad->type == "Glocester") {{ 'selected' }} @endif>Glocester</option>
        								<option value="Hopkinton" @if (old('type') ?? @$ad->type == "Hopkinton") {{ 'selected' }} @endif>Hopkinton</option>
        								<option value="Johnston" @if (old('type') ?? @$ad->type == "Johnston") {{ 'selected' }} @endif>Johnston</option>
        								<option value="Lincoln" @if (old('type') ?? @$ad->type == "Lincoln") {{ 'selected' }} @endif>Lincoln</option>
        								<option value="Middletown" @if (old('type') ?? @$ad->type == "Middletown") {{ 'selected' }} @endif>Middletown</option>
        								<option value="Narragansett" @if (old('type') ?? @$ad->type == "Narragansett") {{ 'selected' }} @endif>Narragansett</option>
        								<option value="Newport" @if (old('type') ?? @$ad->type == "Newport") {{ 'selected' }} @endif>Newport</option>
        								<option value="North Kingstown" @if (old('type') ?? @$ad->type == "Apartment") {{ 'selected' }} @endif>North Kingstown</option>
        								<option value="North Providence" @if (old('type') ?? @$ad->type == "North Providence") {{ 'selected' }} @endif>North Providence</option>
        								<option value="North Smithfield" @if (old('type') ?? @$ad->type == "North Smithfield") {{ 'selected' }} @endif>North Smithfield</option>
        								<option value="Pawtucket" @if (old('type') ?? @$ad->type == "Pawtucket") {{ 'selected' }} @endif>Pawtucket</option>
        								<option value="Providence" @if (old('type') ?? @$ad->type == "Providence") {{ 'selected' }} @endif>Providence</option>
        								<option value="Portsmouth" @if (old('type') ?? @$ad->type == "Portsmouth") {{ 'selected' }} @endif>Portsmouth</option>
        								<option value="Richmond" @if (old('type') ?? @$ad->type == "Richmond") {{ 'selected' }} @endif>Richmond</option>
        								<option value="Scituate" @if (old('type') ?? @$ad->type == "Scituate") {{ 'selected' }} @endif>Scituate</option>
        								<option value="Smithfield" @if (old('type') ?? @$ad->type == "Smithfield") {{ 'selected' }} @endif>Smithfield</option>
        								<option value="South Kingstown" @if (old('type') ?? @$ad->type == "South Kingstown") {{ 'selected' }} @endif>South Kingstown</option>
        								<option value="Tiverton" @if (old('type') ?? @$ad->type == "Tiverton") {{ 'selected' }} @endif>Tiverton</option>
        								<option value="Warren" @if (old('type') ?? @$ad->type == "Warren") {{ 'selected' }} @endif>Warren</option>
        								<option value="Warwick" @if (old('type') ?? @$ad->type == "Warwick") {{ 'selected' }} @endif>Warwick</option>
        								<option value="West Warwick" @if (old('type') ?? @$ad->type == "West Warwick") {{ 'selected' }} @endif>West Warwick</option>
        								<option value="Westerly" @if (old('type') ?? @$ad->type == "Westerly") {{ 'selected' }} @endif>Westerly</option>
        								<option value="Woonsocket" @if (old('type') ?? @$ad->type == "Woonsocket") {{ 'selected' }} @endif>Woonsocket</option>
        							</select>
        							{!! $errors->has('city')? ' <p class="help-block">'.$errors->first('city').'</p> ':'' !!}
        					</div>
    					</div>
    				</div>
    				<div class="row">
    					<div class="col-md-6">
        					<div class="form-group">
                                                    <label for="title">@lang('app.neighborhood')</label>
                                                            <input type="text" class="form-control" id="neighborhood"
                                                                    value="{{ old('neighborhood') ?? $ad->neighborhood ?? old('neighborhood') }}" name="neighborhood"
                                                                    placeholder="@lang('app.neighborhood')">
                                            </div>
                        </div>
                        <div class="col-md-6">
        					<div class="form-group {{ $errors->has('zipcode')? 'has-error':'' }}">
                                                        <label for="title" style="color: #FF0000";>@lang('app.zipcode') *</label>
                                                                <input type="text" class="form-control" id="zipcode"
                                                                        value="{{ old('zipcode') ?? $ad->zipcode ?? old('zipcode') }}" name="zipcode"
                                                                        placeholder="@lang('app.zipcode')">
                                                                        {!! $errors->has('zipcode')? ' <p class="help-block">'.$errors->first('zipcode').'</p> ':'' !!}
                                                </div>
                        </div>
					</div>
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
				</div>
    </form>
        </div>
        <div class="col-md-2">&nbsp;</div>
    </div>
            <br />
@endsection

@section('page-js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true
         });
         $('#datepicker2').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
    </script>
@endsection
