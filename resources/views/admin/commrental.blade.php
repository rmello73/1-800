			<div class="row">
				<div class="col-md-10 col-xs-12">

					{{ Form::open(['id'=>'adsPostForm', 'class' => 'form-horizontal',
					'files' => true]) }}

					<legend>@lang('app.ad_info')</legend>
					
					<div
    						class="form-group {{ $errors->has('start_date')? 'has-error':'' }}">
    						<label for="start_date" class="col-sm-4 control-label">Start Date</label>
    						<div class="col-sm-8">
    							<input type="text" class="date form-control" id="datepicker2"
    								value="{{ old('start_date')? old('start_date') : $ad->start_date }}"
    								name="start_date" placeholder="Expiration Start Date"> {!!
    							$errors->has('start_date')? '
    							<p class="help-block">'.$errors->first('start_date').'</p>
    							':'' !!}
    						</div>
    					</div>
    
    			<div
    						class="form-group {{ $errors->has('end_date')? 'has-error':'' }}">
    						<label for="end_date" class="col-sm-4 control-label">End Date</label>
    						<div class="col-sm-8">
    							<input type="text" class="date form-control" id="datepicker3"
    								value="{{ old('end_date')? old('end_date') : $ad->end_date }}"
    								name="end_date" placeholder="Expiration End Date"> {!!
    							$errors->has('end_date')? '
    							<p class="help-block">'.$errors->first('end_date').'</p>
    							':'' !!}
    						</div>
    					</div>

					<div
						class="form-group {{ $errors->has('ad_title')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.property_name')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ad_title"
								value="{{ old('ad_title')? old('ad_title') : $ad->title }}" name="ad_title"
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
							<textarea name="ad_description" class="form-control" rows="8">{{ old('ad_description')? old('ad_description') : $ad->description }}</textarea>
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
							<input type="text" maxlength="64" class="form-control" id="ad_comment"
								value="{{ old('ad_comment')? old('ad_comment') : $ad->comment }}" name="ad_comment"
								placeholder="@lang('app.ad_comment')" maxlength="64"> {!!
							$errors->has('ad_comment')? '
							<p class="help-block">'.$errors->first('ad_comment').'</p>
							':'' !!}
							<p class="text-info">@lang('app.comment_info')</p>
						</div>
					</div>

					<div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
						<label for="purpose" class="col-sm-4 control-label">@lang('app.property_type')</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="type"
								id="purpose">
								<option value="">Please select Property Type</option>
								<option value="flex" {{ $ad->type == 'flex' ? 'selected':'' }}>@lang('app.flex')</option>
								<option value="industrial" {{ $ad->type == 'industrial' ? 'selected':'' }}>@lang('app.industrial')</option>
								<option value="land" {{ $ad->type == 'land' ? 'selected':'' }}>@lang('app.land')</option>
								<option value="medical" {{ $ad->type == 'medical' ? 'selected':'' }}>@lang('app.medical')</option>
								<option value="office" {{ $ad->type == 'office' ? 'selected':'' }}>@lang('app.office')</option>
								<option value="restaurant" {{ $ad->type == 'restaurant' ? 'selected':'' }}>@lang('app.restaurant')</option>
								<option value="retail" {{ $ad->type == 'retail' ? 'selected':'' }}>@lang('app.retail')</option>
								<option value="storefront" {{ $ad->type == 'storefront' ? 'selected':'' }}>@lang('app.storefront')</option>
								<option value="warehouse" {{ $ad->type == 'warehouse' ? 'selected':'' }}>@lang('app.warehouse')</option>
								<option value="other" {{ $ad->type == 'other' ? 'selected':'' }}>@lang('app.other')</option>
							</select> {!! $errors->has('type')? '
							<p class="help-block">'.$errors->first('type').'</p>
							':'' !!}
						</div>
					</div>
						
						<div class="form-group {{ $errors->has('comm_sub')? 'has-error':'' }}">
							<label for="comm_sub" class="col-sm-4 control-label">Property Subtype</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="comm_sub"
                                                                id="comm_sub">
                                                                <option value=""></option>
                                                                <option value="Office Condo" {{ $ad->comm_sub == 'Office Condo' ? 'selected':'' }}>Office Condo</option>
                                                                <option value="Office Buiding" {{ $ad->comm_sub == 'Office Buiding' ? 'selected':'' }}>Office Buiding</option>
                                                                <option value="Office Medical office" {{ $ad->comm_sub == 'Office Medical office' ? 'selected':'' }}>Office Medical office</option>
                                                                <option value="Industrial  Flex Space" {{ $ad->comm_sub == 'Industrial  Flex Space' ? 'selected':'' }}>Industrial  Flex Space</option>
                                                                <option value="Industrial  Manufacturing" {{ $ad->comm_sub == 'Industrial  Manufacturing' ? 'selected':'' }}>Industrial  Manufacturing</option>
                                                                <option value="Industrial  Warehouse" {{ $ad->comm_sub == 'Industrial  Warehouse' ? 'selected':'' }}>Industrial  Warehouse</option>
                                                                <option value="Industrial  Storage Facility" {{ $ad->comm_sub == 'Industrial  Storage Facility' ? 'selected':'' }}>Industrial  Storage Facility</option>
                                                                <option value="Industrial  R&D" {{ $ad->comm_sub == 'Industrial  R&D' ? 'selected':'' }}>Industrial  R&D</option>
                                                                <option value="Industrial  Office Showroom" {{ $ad->comm_sub == 'Industrial  Office Showroom' ? 'selected':'' }}>Industrial  Retail Condo Showroom</option>
                                                                <option value="Retail Condo" {{ $ad->comm_sub == 'Retail Condo' ? 'selected':'' }}>Retail Condo</option>
                                                                <option value="Retail Strip Center" {{ $ad->comm_sub == 'Retail Strip Center' ? 'selected':'' }}>Retail Strip Center</option>
                                                                <option value="Retail Restaurant" {{ $ad->comm_sub == 'Retail Restaurant' ? 'selected':'' }}>Retail Restaurant</option>
                                                                <option value="Retail Mall" {{ $ad->comm_sub == 'Retail Mall' ? 'selected':'' }}>Retail Mall</option>
                                                                <option value="Retail Free Standing Building" {{ $ad->comm_sub == 'Retail Free Standing Building' ? 'selected':'' }}>Retail Free Standing Building</option>
                                                                <option value="Retail Service/ Gas Station" {{ $ad->comm_sub == 'Retail Service/ Gas Station' ? 'selected':'' }}>Retail Service/ Gas Station</option>
                                                                <option value="Retail Special Use" {{ $ad->comm_sub == 'Retail Special Use' ? 'selected':'' }}>Retail Special Use</option>
                                                                <option value="Retail Auto" {{ $ad->comm_sub == 'Retail Auto' ? 'selected':'' }}>Retail Auto</option>
                                                                <option value="Health Care Hospital" {{ $ad->comm_sub == 'Health Care Hospital' ? 'selected':'' }}>Health Care Hospital</option>
                                                                <option value="Health Care Assisted Living Center" {{ $ad->comm_sub == 'Health Care Assisted Living Center' ? 'selected':'' }}>Health Care Assisted Living Center</option>
                                                                <option value="Health Care Nursing Home" {{ $ad->comm_sub == 'Health Care Nursing Home' ? 'selected':'' }}>Health Care Nursing Home</option>
                                                                <option value="Special Purpose Religious Facility" {{ $ad->comm_sub == 'Special Purpose Religious Facility' ? 'selected':'' }}>Special Purpose Religious Facility</option>
                                                                <option value="Special Purpose Marina" {{ $ad->comm_sub == 'Special Purpose Marina' ? 'selected':'' }}>Special Purpose Marina</option>
                                                                <option value="Special Purpose Golf Course" {{ $ad->comm_sub == 'Special Purpose Golf Course' ? 'selected':'' }}>Special Purpose Golf Course</option>
                                                                <option value="Special Purpose Theater" {{ $ad->comm_sub == 'Special Purpose Theater' ? 'selected':'' }}>Special Purpose Theater</option>
                                                                <option value="Special Purpose Theme / activity center" {{ $ad->comm_sub == 'Special Purpose Theme / activity center' ? 'selected':'' }}>Special Purpose Theme / activity center</option>
                                                                <option value="Special Purpose" {{ $ad->comm_sub == 'Special Purpose' ? 'selected':'' }}>Special Purpose</option>
                                                                <option value="Hotel Motel  Bed and Breakfast" {{ $ad->comm_sub == 'Hotel Motel  Bed and Breakfast' ? 'selected':'' }}>Hotel Motel  Bed and Breakfast</option>
                                                                <option value="Hotel/Motel Full Service" {{ $ad->comm_sub == 'Hotel/Motel Full Service' ? 'selected':'' }}>Hotel/Motel Full Service</option>
                                                                <option value="Hotel/Motel Limited Service" {{ $ad->comm_sub == 'Hotel/Motel Limited Service' ? 'selected':'' }}>Hotel/Motel Limited Service</option>
                                                                <option value="Multi Family Garden Low Rise" {{ $ad->comm_sub == 'Multi Family Garden Low Rise' ? 'selected':'' }}>Multi Family Garden Low Rise</option>
                                                                <option value="Multi Family Mid/ High Rise" {{ $ad->comm_sub == 'Multi Family Mid/ High Rise' ? 'selected':'' }}>Multi Family Mid/ High Rise</option>
                                                                <option value="Multi Family Mobile Home" {{ $ad->comm_sub == 'Multi Family Mobile Home' ? 'selected':'' }}>Multi Family Mobile Home</option>
                                                        </select> {!! $errors->has('comm_sub')? '
								<p class="help-block">'.$errors->first('comm_sub').'</p>
								':'' !!}
							</div>
						</div>
						
<div
                                            	class="form-group {{ $errors->has('price')? 'has-error':'' }}">
                                                <label for="price" class="col-sm-4 control-label">@lang('app.monthly_rent')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="price"
                                                                value="{{ old('price')? old('price') : $ad->price }}" name="price"
                                                                placeholder="@lang('app.price')"> {!!
                                                        $errors->has('price')? '
                                                        <p class="help-block">'.$errors->first('price').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
                                        
                        @if($ad->type == "commercial" or $ad->type == "storefront" or $ad->type == "office" or $ad->type =="medical" or $ad->type == "restaurant" or $ad->type == "retail" or $ad->type == "industrial" or $ad->type == "warehouse" or $ad->type == "land" or $ad->type == "other" or $ad->type == "flex")

					<legend>Lease Details</legend>
					<div
						class="form-group {{ $errors->has('space_available')? 'has-error':'' }}">
						<label for="space_available" class="col-sm-4 control-label">@lang('app.space_available')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="space_available"
								value="{{ $ad->space_available }}" name="space_available"
								placeholder="@lang('app.space_available')"> {!!
							$errors->has('space_available')? '
							<p class="help-block">'.$errors->first('space_available').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('lease_type')? 'has-error':'' }}">
						<label for="lease_type" class="col-sm-4 control-label">@lang('app.lease_type')</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="lease_type"
								id="lease_type">
								<option value="">Please select Lease Type</option>
								<option value="N/A" {{ $ad->lease_type == 'N/A' ? 'selected':'' }}>N/A</option>
								<option value="Full Service" {{ $ad->lease_type == 'Full Service' ? 'selected':'' }}>Full Service</option>
								<option value="Industrial Gross" {{ $ad->lease_type == 'Industrial Gross' ? 'selected':'' }}>Industrial Gross</option>
								<option value="NNN" {{ $ad->lease_type == 'NNN' ? 'selected':'' }}>NNN</option>
								<option value="Modified Gross" {{ $ad->lease_type == 'Modified Gross' ? 'selected':'' }}>Modified Gross</option>
								<option value="Modified Net" {{ $ad->lease_type == 'Modified Net' ? 'selected':'' }}>Modified Net</option>
								<option value="Other" {{ $ad->lease_type == 'Other' ? 'selected':'' }}>Other</option>
							</select> {!!
							$errors->has('lease_type')? '
							<p class="help-block">'.$errors->first('lease_type').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('year_built')? 'has-error':'' }}">
						<label for="year_built" class="col-sm-4 control-label">@lang('app.year_built')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="year_built"
								value="{{ $ad->year_built }}" name="year_built"
								placeholder="@lang('app.year_built')"> {!!
							$errors->has('year_built')? '
							<p class="help-block">'.$errors->first('year_built').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('lot_size')? 'has-error':'' }}">
						<label for="lot_size" class="col-sm-4 control-label">@lang('app.lot_size')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="lot_size"
								value="{{ $ad->lot_size }}" name="lot_size"
								placeholder="@lang('app.lot_size')"> {!!
							$errors->has('lot_size')? '
							<p class="help-block">'.$errors->first('lot_size').'</p>
							':'' !!}
						</div>
					</div>
					<div
                                            	class="form-group {{ $errors->has('sqft_price')? 'has-error':'' }}">
                                                <label for="sqft_price" class="col-sm-4 control-label">@lang('app.sqft_price')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="sqft_price"
                                                                value="{{ $ad->sqft_price }}" name="sqft_price"
                                                                placeholder="@lang('app.sqft_price')"> {!!
                                                        $errors->has('sqft_price')? '
                                                        <p class="help-block">'.$errors->first('sqft_price').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
					<div
                                               	class="form-group {{ $errors->has('building_size')? 'has-error':'' }}">
                                                <label for="building_size" class="col-sm-4 control-label">@lang('app.building_size')</label>
                                                <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="building_size"
                                                                value="{{ $ad->building_size }}" name="building_size"
                                                                placeholder="@lang('app.building_size')"> {!!
                                                        $errors->has('building_size')? '
                                                        <p class="help-block">'.$errors->first('building_size').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

						<div
							class="form-group {{ $errors->has('comm_use')? 'has-error':'' }}">
							<label for="comm_use" class="col-sm-4 control-label">Property Use</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="comm_use"
									value="{{ old('comm_use')? old('comm_use') : $ad->comm_use }}" name="comm_use"
									placeholder="Property Use"> {!!
								$errors->has('comm_use')? '
								<p class="help-block">'.$errors->first('comm_use').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('building_class')? 'has-error':'' }}">
							<label for="building_class" class="col-sm-4 control-label">Building Class</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="building_class"
									value="{{ old('building_class')? old('building_class') : $ad->building_class }}" name="building_class"
									placeholder="Building Class"> {!!
								$errors->has('building_class')? '
								<p class="help-block">'.$errors->first('building_class').'</p>
								':'' !!}
							</div>
						</div>

					<div
						class="form-group {{ $errors->has('location')? 'has-error':'' }}">
						<label for="location" class="col-sm-4 control-label">Location Description</label>
						<div class="col-sm-8">
							<textarea name="location" class="form-control" rows="8">{{ old('location')? old('location') : $ad->location }}</textarea>
							{!! $errors->has('location')? '
							<p class="help-block">'.$errors->first('location').'</p>
							':'' !!}
							<p class="text-info">This description will help the viewer to learn details about the location of your property</p>
						</div>
					</div>
					@endif
					
					<legend>Property Features</legend>
					<p class="text-info">These features will show up as a bullet-ed list on the property listing.</p>

						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 1</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf1"
									value="{{ old('pf1')? old('pf1') : $ad->pf1 }}" name="pf1"
									placeholder="Property Feature"> {!!
								$errors->has('pf1')? '
								<p class="help-block">'.$errors->first('pf1').'</p>
								':'' !!}
							</div>
						</div>
						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}"><label for="lot_size" class="col-sm-4 control-label">Feature 2</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf2"
									value="{{ old('pf2')? old('pf2') : $ad->pf2 }}" name="pf2"
									placeholder="Property Feature"> {!!
								$errors->has('pf2')? '
								<p class="help-block">'.$errors->first('pf2').'</p>
								':'' !!}
							</div>
						</div>
						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}"><label for="lot_size" class="col-sm-4 control-label">Feature 3</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf3"
									value="{{ old('pf3')? old('pf3') : $ad->pf3 }}" name="pf3"
									placeholder="Property Feature"> {!!
								$errors->has('pf3')? '
								<p class="help-block">'.$errors->first('pf3').'</p>
								':'' !!}
							</div>
						</div>
						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}"><label for="lot_size" class="col-sm-4 control-label">Feature 4</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf4"
									value="{{ old('pf4')? old('pf4') : $ad->pf4 }}" name="pf4"
									placeholder="Property Feature"> {!!
								$errors->has('pf4')? '
								<p class="help-block">'.$errors->first('pf4').'</p>
								':'' !!}
							</div>
						</div>
						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}"><label for="lot_size" class="col-sm-4 control-label">Feature 5</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf5"
									value="{{ old('pf5')? old('pf5') : $ad->pf5 }}" name="pf5"
									placeholder="Property Feature"> {!!
								$errors->has('pf5')? '
								<p class="help-block">'.$errors->first('pf5').'</p>
								':'' !!}
							</div>
						</div>
						<div class="form-group {{ $errors->has('pf1')? 'has-error':'' }}"><label for="lot_size" class="col-sm-4 control-label">Feature 6</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf6"
									value="{{ old('pf6')? old('pf6') : $ad->pf6 }}" name="pf6"
									placeholder="Property Feature"> {!!
								$errors->has('pf6')? '
								<p class="help-block">'.$errors->first('pf6').'</p>
								':'' !!}
							</div>
						</div>