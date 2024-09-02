@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('main')

	<div id="wrapper">

		@include('admin.sidebar_menu')

		<div id="page-wrapper">
			@if( ! empty($title))
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Post Your PMC Property</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			@endif @include('admin.flash_msg')

			<div class="row">
				<div class="col-md-10 col-xs-12">

					{{ Form::open(['id'=>'adsPostForm', 'class' => 'form-horizontal',
					'files' => true]) }}

					<legend>@lang('app.ad_info')</legend>

					<div
						class="form-group {{ $errors->has('ad_title')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.property_name')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ad_title"
								value="{{ old('ad_title') }}" name="ad_title"
								placeholder="@lang('app.property_name')"> {!!
							$errors->has('ad_title')? '
							<p class="help-block">'.$errors->first('ad_title').'</p>
							':'' !!}
							<p class="text-info">@lang('app.great_title_info')</p>
						</div>
					</div>


					<div
						class="form-group {{ $errors->has('ad_description')? 'has-error':'' }}">
						<label for="ad_description" class="col-sm-4 control-label">@lang('app.ad_description')</label>
						<div class="col-sm-8">
							<textarea name="ad_description" class="form-control" rows="8">{{ old('ad_description') }}</textarea>
							{!! $errors->has('ad_description')? '
							<p class="help-block">'.$errors->first('ad_description').'</p>
							':'' !!}
							<p class="text-info">@lang('app.ad_description_info_text')</p>
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('ad_comment')? 'has-error':'' }}">
						<label for="ad_comment" class="col-sm-4 control-label">@lang('app.ad_comment')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ad_comment"
								value="{{ old('ad_comment') }}" name="ad_comment"
								placeholder="@lang('app.ad_comment')" maxlength="64"> {!!
							$errors->has('ad_comment')? '
							<p class="help-block">'.$errors->first('ad_comment').'</p>
							':'' !!}
							<p class="text-info">@lang('app.comment_info')</p>
						</div>
					</div>
						<br /> <br />
						<legend>@lang('app.pmc-amenities')</legend>
						<div class="col-sm-12">
							<label> <input type="checkbox" value="1" name="pmcdogs"> Dog Friendly
							</label>
							<label> <input type="checkbox" value="1" name="pmccats"> Cat Friendly
							</label>
							<label> <input type="checkbox" value="1" name="pmcair"> Air
								Conditioning
							</label> <label> <input type="checkbox" value="1"
								name="pmcbasketball"> Basketball Court
							</label> <label> <input type="checkbox" value="1" name="pmcbusiness">
								Business Center
							</label> <label> <input type="checkbox" value="1" name="pmccable">
								Cable Ready
							</label> <label> <input type="checkbox" value="1"
								name="pmccarpeting"> Carpeting
							</label> <label> <input type="checkbox" value="1"
								name="pmcclubhouse"> Clubhouse
							</label> <label> <input type="checkbox" value="1"
								name="pmccontrolled"> Controlled Access
							</label> <label> <input type="checkbox" value="1" name="pmcdeck">
								Deck / Balcony
							</label> <label> <input type="checkbox" value="1" name="pmcelevator">
								Elevator
							</label> <label> <input type="checkbox" value="1" name="pmcceiling">
								Ceiling Fan
							</label> <label> <input type="checkbox" value="1"
								name="pmcfireplace"> Fireplace
							</label> <label> <input type="checkbox" value="1" name="pmcfitness">
								Fitness Center
							</label> <label> <input type="checkbox" value="1"
								name="pmcfurnished"> Furnished Units Available
							</label> <label> <input type="checkbox" value="1" name="pmchandicap">
								Handicap Access
							</label> <label> <input type="checkbox" value="1" name="pmchardwood">
								Hardwood Floors
							</label> <label> <input type="checkbox" value="1" name="pmcinternet">
								High Speed Internet Available
							</label> <label> <input type="checkbox" value="1" name="pmcroom">
								Laundry Room
							</label> <label> <input type="checkbox" value="1" name="pmclaundry">
								Laundry in Unit
							</label> <label> <input type="checkbox" value="1" name="pmcmedia">
								Media Center
							</label> <label> <input type="checkbox" value="1" name="pmcpool">
								Pool
							</label> <label> <input type="checkbox" value="1" name="pmcspa"> Spa
								/ Hot Tub
							</label> <label> <input type="checkbox" value="1" name="pmcstorage">
								Extra Storage units
							</label> <label> <input type="checkbox" value="1" name="pmctennis">
								Tennis Court
							</label> <label> <input type="checkbox" value="1" name="pmcvaulted">
								Vaulted Ceilings
							</label> <label> <input type="checkbox" value="1" name="pmcwalk">
								Walk-in Closet
							</label> <label> <input type="checkbox" value="1" name="pmcwasher">
								Washer / Dryer hookups
							</label> <label> <input type="checkbox" value="1" name="pmcyard">
								Yard
							</label>
						</div>

					<legend>Images</legend>

					<div
						class="form-group {{ $errors->has('images')? 'has-error':'' }}">
						<div class="col-sm-12">
<p><b>Note:</b> Once you save your listing details, you will then be able to load multiple images at once on the next step.</p>
</div>
</div>

<legend>Video</legend>
<div
						class="form-group {{ $errors->has('property_video_url')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.property_video_url')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="property_video_url"
								value="{{ old('property_video_url') }}" name="property_video_url"
								placeholder="@lang('app.property_video_url')"> {!!
							$errors->has('property_video_url')? '
							<p class="help-block">'.$errors->first('property_video_url').'</p>
							':'' !!}
							<p class="help-block">@lang('app.property_video_url')</p>
						</div>
					</div>
<div
						class="form-group {{ $errors->has('neighborhood_video_url')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.neighborhood_video_url')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="neighborhood_video_url"
								value="{{ old('neighborhood_video_url') }}" name="neighborhood_video_url"
								placeholder="@lang('app.neighborhood_video_url')"> {!!
							$errors->has('neighborhood_video_url')? '
							<p class="help-block">'.$errors->first('neighborhood_video_url').'</p>
							':'' !!}
							<p class="help-block">@lang('app.neighborhood_video_url')</p>
						</div>
					</div>
<legend>Website</legend>
					<div
						class="form-group {{ $errors->has('website')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.website')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="website"
								value="{{ old('website') }}" name="website"
								placeholder="@lang('app.website')"> {!!
							$errors->has('website')? '
							<p class="help-block">'.$errors->first('website').'</p>
							':'' !!}
							<p class="help-block">@lang('app.website')</p>
						</div>
					</div>

					<legend>@lang('app.location_info')</legend>
					
					<div
						class="form-group {{ $errors->has('street_num')? 'has-error':'' }}">
						<label for="street_num" class="col-sm-4 control-label">@lang('app.address')</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="street_num"
								value="{{ old('street_num') }}" name="street_num"
								placeholder="Street Number"> {!! $errors->has('street_num')?
							'
							<p class="help-block">'.$errors->first('street_num').'</p>
							':'' !!}
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="street_name"
								value="{{ old('street_name') }}" name="street_name"
								placeholder="Street Name"> {!! $errors->has('street_name')?
							'
							<p class="help-block">'.$errors->first('street_name').'</p>
							':'' !!}
						</div>
						<div class="col-sm-2">
							<select class="form-control select2" id="street_type"
								name="street_type">
								<option value="">Street Type</option>
								<option value="ave">Avenue</option>
                                <option value="beach">Beach</option>
                                <option value="bend">Bend</option>
                                <option value="blvd">Boulevard</option>
                                <option value="circle">Circle</option>
                                <option value="court">Court</option>
                                <option value="cove">Cove</option>
                                <option value="crossing">Crossing</option>
                                <option value="drive">Drive</option>
                                <option value="green">Green</option>
                                <option value="high">Highway</option>
                                <option value="hill">Hill</option>
                                <option value="lane">Lane</option>
                                <option value="meadow">Meadow</option>
                                <option value="parkway">Parkway</option>
                                <option value="passage">Passage</option>
                                <option value="path">Path</option>
                                <option value="pike">Pike</option>
                                <option value="place">Place</option>
                                <option value="point">Point</option>
                                <option value="ridge">Ridge</option>
                                <option value="river">River</option>
                                <option value="road">Road</option>
                                <option value="row">Row</option>
                                <option value="run">Run</option>
                                <option value="shore">Shore</option>
                                <option value="shores">Shores</option>
                                <option value="square">Square</option>
                                <option value="street">Street</option>
                                <option value="terrace">Terrace</option>
                                <option value="trail">Trail</option>
                                <option value="turnpike">Turnpike</option>
                                <option value="view">View</option>
                                <option value="way">Way</option>
                                <option value="wharf">Wharf</option>
							</select>
                                                        {!! $errors->has('street_type')? '
								<p class="help-block">'.$errors->first('street_type').'</p>
								':'' !!}
						</div>
					</div>

					<div
						class="form-group  {{ $errors->has('state')? 'has-error':'' }}">
						<label for="category_name" class="col-sm-4 control-label">@lang('app.state')</label>
						<div class="col-sm-8">
							<select class="form-control select2" id="state_select"
								name="state">
								<option value="">@lang('app.select_a_state')</option>
								<option value="1">Rhode Island</option>
								<option value="2">Massachusetts</option>
							</select>
							<p class="text-info">
								<span id="state_loader" style="display: none;"><i
									class="fa fa-spin fa-spinner"></i> </span>
							</p>
{!! $errors->has('state')?
							'
							<p class="help-block">'.$errors->first('state').'</p>
							':'' !!}
						</div>
					</div>

					<div class="form-group  {{ $errors->has('city')? 'has-error':'' }}">
						<label for="category_name" class="col-sm-4 control-label">@lang('app.city')</label>
						<div class="col-sm-8">
							<select class="form-control select2" id="city_select" name="city">
								<option value="">@lang('app.select_a_city')</option>
								@if($previous_cities->count() > 0) @foreach($previous_cities as
								$city)
								<option value="{{ $city->id }}" {{ old('city') == $city->id ?
									'selected':'' }}>{{ $city->city_name }}</option> @endforeach
								@endif
							</select>
							<p class="text-info">
								<span id="city_loader" style="display: none;"><i
									class="fa fa-spin fa-spinner"></i> </span>
							</p>
{!! $errors->has('city')?
							'
							<p class="help-block">'.$errors->first('city').'</p>
							':'' !!}
						</div>
					</div>

					<div
                                                class="form-group {{ $errors->has('neighborhood')? 'has-error':'' }}">
                                                <label for="neighborhood" class="col-sm-4 control-label">@lang('app.neighborhood')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="neighborhood"
                                                                value="{{ old('neighborhood') }}" name="neighborhood"
                                                                placeholder="@lang('app.neighborhood')"> {!! $errors->has('neighborhood')?
                                                        '
                                                       	<p class="help-block">'.$errors->first('neighborhood').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

					<div
                                                class="form-group {{ $errors->has('zipcode')? 'has-error':'' }}">
                                                <label for="zipcode" class="col-sm-4 control-label">@lang('app.zipcode')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="zipcode"
                                                                value="{{ old('zipcode') }}" name="zipcode"
                                                                placeholder="@lang('app.zipcode')"> {!! $errors->has('zipcode')?
                                                        '
                                                       	<p class="help-block">'.$errors->first('zipcode').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
					<div
                                                class="form-group {{ $errors->has('latitude')? 'has-error':'' }}">
                                                <label for="latitude" class="col-sm-4 control-label">@lang('app.latitude')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="latitude"
                                                                value="{{ old('latitude') }}" name="latitude"
                                                                placeholder="0"> {!! $errors->has('latitude')?
                                                        '
                                                       	<p class="help-block">'.$errors->first('latitude').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
                                        
					<div
                                                class="form-group {{ $errors->has('longitude')? 'has-error':'' }}">
                                                <label for="longitude" class="col-sm-4 control-label">@lang('app.longitude')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="longitude"
                                                                value="{{ old('longitude') }}" name="longitude"
                                                                placeholder="0"> {!! $errors->has('longitude')?
                                                        '
                                                       	<p class="help-block">'.$errors->first('longitude').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
                                        <div class="row">
                                            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                            <div id="dvMap" style="width: 100%; height: 400px; margin: 20px 0;"></div>
                                        </div>
                                        
						<legend>PMC Unit Information</legend>

						<legend>Unit 1</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds"
                                                                id="pmcbeds">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths"
								value="{{ isset($property->pmcbaths) ? $property->pmcbaths : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent"
								value="{{ isset($property->pmcrent) ? $property->pmcrent : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft"
								value="{{ isset($property->pmcsqft) ? $property->pmcsqft : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan"
								value="{{ isset($property->pmcfloorplan) ? $property->pmcfloorplan : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 2</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds2"
                                                                id="pmcbeds2">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths2"
								value="{{ isset($property->pmcbaths2) ? $property->pmcbaths2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent2"
								value="{{ isset($property->pmcrent2) ? $property->pmcrent2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft2"
								value="{{ isset($property->pmcsqft2) ? $property->pmcsqft2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan2"
								value="{{ isset($property->pmcfloorplan2) ? $property->pmcfloorplan2 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 3</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds3"
                                                                id="pmcbeds3">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths3"
								value="{{ isset($property->pmcbaths3) ? $property->pmcbaths3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent3"
								value="{{ isset($property->pmcrent3) ? $property->pmcrent3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft3"
								value="{{ isset($property->pmcsqft3) ? $property->pmcsqft3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan3"
								value="{{ isset($property->pmcfloorplan3) ? $property->pmcfloorplan3 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 4</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds4"
                                                                id="pmcbeds4">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths4"
								value="{{ isset($property->pmcbaths4) ? $property->pmcbaths4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent4"
								value="{{ isset($property->pmcrent4) ? $property->pmcrent4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft4"
								value="{{ isset($property->pmcsqft4) ? $property->pmcsqft4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan4"
								value="{{ isset($property->pmcfloorplan4) ? $property->pmcfloorplan4 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 5</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds5"
                                                                id="pmcbeds5">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths5"
								value="{{ isset($property->pmcbaths5) ? $property->pmcbaths5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent5"
								value="{{ isset($property->pmcrent5) ? $property->pmcrent5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft5"
								value="{{ isset($property->pmcsqft5) ? $property->pmcsqft5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan5"
								value="{{ isset($property->pmcfloorplan5) ? $property->pmcfloorplan5 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 6</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds6"
                                                                id="pmcbeds6">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths6"
								value="{{ isset($property->pmcbaths6) ? $property->pmcbaths6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent6"
								value="{{ isset($property->pmcrent6) ? $property->pmcrent6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft6"
								value="{{ isset($property->pmcsqft6) ? $property->pmcsqft6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan6"
								value="{{ isset($property->pmcfloorplan6) ? $property->pmcfloorplan6 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 7</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds7"
                                                                id="pmcbeds7">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths7"
								value="{{ isset($property->pmcbaths7) ? $property->pmcbaths7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent7"
								value="{{ isset($property->pmcrent7) ? $property->pmcrent7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft7"
								value="{{ isset($property->pmcsqft7) ? $property->pmcsqft7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan7"
								value="{{ isset($property->pmcfloorplan7) ? $property->pmcfloorplan7 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 8</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds8"
                                                                id="pmcbeds8">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths8"
								value="{{ isset($property->pmcbaths8) ? $property->pmcbaths8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent8"
								value="{{ isset($property->pmcrent8) ? $property->pmcrent8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft8"
								value="{{ isset($property->pmcsqft8) ? $property->pmcsqft8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan8"
								value="{{ isset($property->pmcfloorplan8) ? $property->pmcfloorplan8 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 9</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds9"
                                                                id="pmcbeds9">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths9"
								value="{{ isset($property->pmcbaths9) ? $property->pmcbaths9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent9"
								value="{{ isset($property->pmcrent9) ? $property->pmcrent9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft9"
								value="{{ isset($property->pmcsqft9) ? $property->pmcsqft9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan9"
								value="{{ isset($property->pmcfloorplan9) ? $property->pmcfloorplan9 : null }}"
								class="form-control">
						</div>
					</div>

						<legend>Unit 10</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds10"
                                                                id="pmcbeds10">
                                                                <option value=""></option>
                                                                <option value="0.5">Studio</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>

                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths10"
								value="{{ isset($property->pmcbaths10) ? $property->pmcbaths10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent10"
								value="{{ isset($property->pmcrent10) ? $property->pmcrent10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft10"
								value="{{ isset($property->pmcsqft10) ? $property->pmcsqft10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan10"
								value="{{ isset($property->pmcfloorplan10) ? $property->pmcfloorplan10 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Office Hours</legend>
					<div class="form-group {{ $errors->has('mh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Monday</label>
						<div class="col-sm-8">
							<input type="text" name="mh" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('th')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Tuesday</label>
						<div class="col-sm-8">
							<input type="text" name="th" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('wh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Wednesday</label>
						<div class="col-sm-8">
							<input type="text" name="wh" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('rh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Thursday</label>
						<div class="col-sm-8">
							<input type="text" name="rh" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('fh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Friday</label>
						<div class="col-sm-8">
							<input type="text" name="fh" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('sh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Saturday</label>
						<div class="col-sm-8">
							<input type="text" name="sh" value=""
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('uh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Sunday</label>
						<div class="col-sm-8">
							<input type="text" name="uh" value=""
								class="form-control">
						</div>
					</div>

						<hr />
						<legend>Office Phone</legend>
						<div
							class="form-group {{ $errors->has('officephone')? 'has-error':'' }}">
							<label for="" class="col-sm-4 control-label">Office Phone</label>
							<div class="col-sm-8">
								<input type="text" name="officephone"
									value="{{ isset($property->officephone) ? $property->officephone : null }}" class="form-control">
							</div>
						</div>

<br />
<div class="row">
By posting, you are acknowledging that you are authorized to post this listing and to the best of your knowledge all of the information provided is accurate.
</div>

					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary">Save & Continue</button>
						</div>
					</div>
					{{ Form::close() }}

				</div>

			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

</div>
</div>
</div>
@endsection

@section('page-js')

<script
	src="https://maps.googleapis.com/maps/api/js?key={{get_option('google_map_api_key')}}&libraries=places&callback=initAutocomplete"
	async defer></script>

<script>
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.

        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('dvMap'), {
                center: {lat: {{ (get_option('default_latitude') != 'default_latitude' ) ? get_option('default_latitude') : 40.715 }}, lng: {{ (get_option('default_longitude') != 'default_longitude')? get_option('default_longitude') : -74.009 }} },
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            //Click event for getting lat lng
            google.maps.event.addListener(map, 'click', function (e) {
                $('input#latitude').val(e.latLng.lat());
                $('input#longitude').val(e.latLng.lng());
            });

            var markers = [];
            // [START region_getplaces]
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
            // [END region_getplaces]
        }

    </script>


<script>

        function generate_option_from_json(jsonData, fromLoad){

            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('');

                    $('#brand_select').select2();
                }
                $('#brand_loader').hide('slow');
            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_city') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('');
                    $('#city_select').select2();
                }
                $('#city_loader').hide('slow');
            }else if(fromLoad === 'city_to_neighborhood'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_neighborhood') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].neighborhood_name +' </option>';
                    }
                    $('#neighborhood_select').html(option);
                    $('#neighborhood_select').select2();
                }else {
                    $('#neighborhood_select').html('');
                    $('#neighborhood_select').select2();
                }
                $('#neighborhood_loader').hide('slow');
        	}
        }

        $(document).ready(function(){
            $('[name="category"]').change(function(){
                var category_id = $(this).val();
                $('#brand_loader').show();

                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_brand_by_category') }}',
                    data : { category_id : category_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'category_to_brand');
                    }
                });
            });

            $('[name="state"]').change(function(){
                var state_id = $(this).val();
                $('#city_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_city_by_state') }}',
                    data : { state_id : state_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'state_to_city');
                    }
                });
            });

	    	$('[name="city"]').change(function(){
                var city_id = $(this).val();
                $('#neighborhood_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_neighborhood_by_city') }}',
                    data : { city_id : city_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'city_to_neighborhood');
                    }
                });
            });

            $("#images").change(function() {
                var fd = new FormData(document.querySelector("form#adsPostForm"));
                //$('#loadingOverlay').show();
                $('.progress').show();
                $.ajax({
                    url : '{{ route('upload_ads_image') }}',
                    type: "POST",
                    data: fd,

                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                //console.log(percentComplete);

                                var progress_bar = '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: '+percentComplete+'%">'+percentComplete+'% </div>';

                                if (percentComplete === 100) {
                                    $('.progress').hide();
                                }
                            }
                        }, false);

                        return xhr;
                    },

                    cache: false,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,   // tell jQuery not to set contentType
                    success : function (data) {
                        //$('#loadingOverlay').hide('slow');
                        if (data.success == 1){
                            $('#uploaded-ads-image-wrap').load('{{ route('append_media_image') }}');
                        } else{
                            toastr.error(data.msg, '<?php echo trans('app.error') ?>', toastr_options);
                        }
                    }
                });
            });


            $('body').on('click', '.imgDeleteBtn', function(){
                //Get confirm from user
                if ( ! confirm('{{ trans('app.are_you_sure') }}')){
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url : '{{ route('delete_media') }}',
                    type: "POST",
                    data: { media_id : img_id, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
            $('body').on('click', '.imgFeatureBtn', function(){
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                var current_selector = $(this);

                $.ajax({
                    url : '{{ route('feature_media_creating_ads') }}',
                    type: "POST",
                    data: { media_id : img_id, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            $('.imgFeatureBtn').html('<i class="fa fa-star-o"></i>');
                            current_selector.html('<i class="fa fa-star"></i>');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });

        });
    </script>

<script>
        $('#category').on('change', function () {
		$("#propdetail").css('display', (this.value == 'residential') ? 'block' : 'none');
		$("#amenities").css('display', (this.value == 'residential') ? 'block' : 'none');
                $("#comm_wrap").css('display', (this.value == 'commercial') ? 'block' : 'none');
                $("#comm_drop").css('display', (this.value == 'commercial') ? 'block' : 'none');
                $("#res_drop").css('display', (this.value == 'residential') ? 'block' : 'none');
        });
	$('#purpose').on('change', function () {
		$("#propdetail").css('display', (this.value == 'pmc') ? 'none' : 'none');
                $("#propdetail").css('display', ((this.value == 'apartment') || (this.value == 'loft') || (this.value == 'condo') || (this.value == 'single-family') || (this.value == 'multi-family') || (this.value == 'townhouse')) ? 'block' : 'none');
        	$("#pmc_wrap").css('display', (this.value == 'pmc') ? 'block' : 'none');
		$("#amenities").css('display', (this.value == 'pmc') ? 'none' : 'none');
		$("#amenities").css('display', ((this.value == 'apartment') || (this.value == 'loft') || (this.value == 'condo') || (this.value == 'single-family') || (this.value == 'multi-family') || (this.value == 'townhouse')) ? 'block' : 'none');
		$("#pmc_wrap4").css('display', (this.value == 'pmc') ? 'none' : 'none');
		$("#pmc_wrap4").css('display', ((this.value == 'apartment') || (this.value == 'loft') || (this.value == 'condo') || (this.value == 'single-family') || (this.value == 'multi-family')  || (this.value == 'townhouse')) ? 'block' : 'none');
		$("#pmc_wrap6").css('display', (this.value == 'pmc') ? 'block' : 'none');
        });
   	</script>

<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>

@endsection
